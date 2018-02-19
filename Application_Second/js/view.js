function changeClasses() {
    if (window.location.pathname === "/ICT%204561%20Web%20Development%20with%20PHP/Application/view.php") {
        const viewNav = document.getElementById("viewNav");
        const loginNav = document.getElementById("loginNav");

        loginNav.classList.remove("active");
        viewNav.classList.add("active");
    }
}

function init() {
    changeClasses();
}

document.onload = init();