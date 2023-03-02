const loginHeader = document.querySelector(".headerLogin");
const registerHeader = document.querySelector(".headerRegister");
const loginForm = document.querySelector(".loginForm");
const registerForm = document.querySelector(".registerForm");

registerHeader.addEventListener("click", function () {
    if (registerHeader.classList.contains("active")) {
    } else {
        document.querySelector(".headerRegister").classList.toggle("active");
        document.querySelector(".headerLogin").classList.toggle("active");
    }

    if (registerForm.classList.contains("active")) {
    } else {
        document.querySelector(".loginForm").classList.toggle("active");
        document.querySelector(".registerForm").classList.toggle("active");
    }
});

loginHeader.addEventListener("click", function () {
    if (loginHeader.classList.contains("active")) {
    } else {
        document.querySelector(".headerRegister").classList.toggle("active");
        document.querySelector(".headerLogin").classList.toggle("active");
    }

    if (loginForm.classList.contains("active")) {
    } else {
        document.querySelector(".loginForm").classList.toggle("active");
        document.querySelector(".registerForm").classList.toggle("active");
    }
});
