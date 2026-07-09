<?php

/*
==================================================
ADVERTISEMENT
==================================================
*/

$advertisement = null;

$ads = glob("../advertisement/*.{png,jpg,jpeg,webp,avif}", GLOB_BRACE);

if ($ads) {

    $image = $ads[array_rand($ads)];

    $id = pathinfo($image, PATHINFO_FILENAME);

    $json = "../advertisement/" . $id . ".json";

    $url = "#";

    if (file_exists($json)) {

        $data = json_decode(file_get_contents($json), true);

        if (!empty($data["url"])) {

            $url = $data["url"];

        }

    }

    $advertisement = [
        "image" => $image,
        "url"   => $url
    ];

}

?>

<div class="sidebar-wrapper">

    <!-- ==========================================
         LOGO
    =========================================== -->

    <a href="/" class="sidebar-logo">

        <img
            src="../addictions/imgs/logo-flat.svg"
            alt="MMS">

    </a>

    <!-- ==========================================
         MENU
    =========================================== -->

    <nav class="sidebar-menu">

        <!-- PROFILE -->

        <div class="sidebar-group">

            <a href="/profile/" class="sidebar-item active">

                <img
                    src="../addictions/imgs/icons/profile.svg"
                    alt="">

                <span>Профиль</span>

            </a>

        </div>

        <!-- SOCIAL -->

        <div class="sidebar-group">

            <a href="/communities/" class="sidebar-item">

                <img
                    src="../addictions/imgs/icons/community.svg"
                    alt="">

                <span>Сообщества</span>

            </a>

            <a href="/friends/" class="sidebar-item">

                <img
                    src="../addictions/imgs/icons/friends.svg"
                    alt="">

                <span>Друзья</span>

            </a>

            <a href="/messages/" class="sidebar-item">

                <img
                    src="../addictions/imgs/icons/messages.svg"
                    alt="">

                <span>Сообщения</span>

            </a>

        </div>

        <!-- EXTRA -->

        <div class="sidebar-group">

            <a href="/bookmarks/" class="sidebar-item">

                <img
                    src="../addictions/imgs/icons/bookmark.svg"
                    alt="">

                <span>Закладки</span>

            </a>

            <a href="/music/" class="sidebar-item">

                <img
                    src="../addictions/imgs/icons/music.svg"
                    alt="">

                <span>Музыка</span>

            </a>

            <a href="/settings/" class="sidebar-item">

                <img
                    src="../addictions/imgs/icons/settings.svg"
                    alt="">

                <span>Настройки</span>

            </a>

        </div>

    </nav>

    <!-- ==========================================
         ADVERTISEMENT
    =========================================== -->

    <?php if($advertisement): ?>

        <div class="sidebar-ad">

            <a
                href="<?= htmlspecialchars($advertisement["url"]) ?>"
                target="_blank"
                rel="noopener noreferrer">

                <img
                    src="<?= htmlspecialchars($advertisement["image"]) ?>"
                    alt="Advertisement">

                <div class="sidebar-ad-label">

                    Реклама

                </div>

            </a>

        </div>

    <?php endif; ?>

</div>