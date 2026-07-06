const CACHE_ENABLED = false;
const CACHE = "assets";

self.addEventListener("fetch", event => {

    if (!CACHE_ENABLED) {
        event.respondWith(fetch(event.request));
        return;
    }

    const url = new URL(event.request.url);

    if (
        !url.pathname.endsWith(".css") &&
        !url.pathname.endsWith(".js")
    ) {
        event.respondWith(fetch(event.request));
        return;
    }

    event.respondWith(
        caches.match(event.request).then(response => {
            if (response) {
                return response;
            }

            return fetch(event.request).then(network => {
                return caches.open(CACHE).then(cache => {
                    cache.put(event.request, network.clone());
                    return network;
                });
            });
        })
    );

});
