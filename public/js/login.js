let btnEye = document.getElementById("btn-eye");
let iconEye = document.getElementById("icon-eye");
let inputPassword = document.getElementById("input-password");

function showPassword() {
    if (inputPassword.getAttribute('type') == "password") {
        inputPassword.setAttribute('type', 'text');
        iconEye.setAttribute('class', 'fa-solid fa-eye');
    } else { 
        inputPassword.setAttribute('type', 'password');
        iconEye.setAttribute('class', 'fa-solid fa-eye-slash');
    }


}

btnEye.addEventListener("click", showPassword);