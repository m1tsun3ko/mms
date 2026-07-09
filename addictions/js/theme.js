const html = document.documentElement;

const button = document.getElementById("themeButton");

const savedTheme = localStorage.getItem("theme");

if(savedTheme){

    html.dataset.theme = savedTheme;

}

if(button){

    updateButton();

    button.addEventListener("click",()=>{

        html.dataset.theme =
            html.dataset.theme === "dark"
                ? "light"
                : "dark";

        localStorage.setItem(
            "theme",
            html.dataset.theme
        );

        updateButton();

    });

}

function updateButton(){

    if(!button) return;

    button.textContent =
        html.dataset.theme === "dark"
            ? "🌙"
            : "☀️";

}