// Form Header

function errorStyleHandler() {
    const uploadForm = document.getElementById("uploadForm");

    if (window.location.pathname === "/ICT%204561%20Web%20Development%20with%20PHP/Application/upload.php") {
        const uploadNav = document.getElementById("uploadNav");
        const loginNav = document.getElementById("loginNav");
        const fileInput = document.getElementById("upload_file");
        const submitButton = document.getElementById("submitButton");

        loginNav.classList.remove("active");
        uploadNav.classList.add("active");

        submitButton.onclick = function (ev) {
            if (fileInput.value >= 1 || fileInput.files.length >= 1) {
                console.log("This was successful!");
            } else {
                document.getElementById("errorOutput").innerText = "*Please Upload a File";
                ev.preventDefault();
            }
        }

    }
}


function init() {
    errorStyleHandler();
}

document.onload = init();