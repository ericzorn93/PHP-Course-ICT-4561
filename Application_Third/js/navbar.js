// Check Login Path
function checkLogin() {
    var links = document.querySelectorAll("a");

    if (window.location.pathname == "/ICT%204561%20Web%20Development%20with%20PHP/Application/") {
        for (var i = 0; i < links.length; i++) {
            links[i].setAttribute('href', '#');
            links[i].classList.add("disabled");
        }
    }
}

function init() {
    checkLogin();
}

document.onload = init();