const modal = document.querySelector('#login-reg-modal')
const modalContent = document.querySelector(".modal-content")
const btn = document.querySelector('#login-reg')

const loginSwitch = document.querySelector("#login-switch")
const registerSwitch = document.querySelector("#register-switch")
const loginForm = document.querySelector("#loginForm")
const registerForm = document.querySelector("#registerForm")

let selectedStyle = "background-color: darkturquoise"

let loginFormContents = document.querySelector("#loginPanel").innerHTML
let registerFormContents = document.querySelector("#registerPanel").innerHTML

const uploadToggle = document.querySelector(".upload-toggle")
const uploadbtn = document.querySelector(".upload-nav")

function showPassword() {
    let passtype = document.querySelector('#login-password')
    let showPass = document.querySelector('#showpass')
    if (showPass.checked) passtype.type = "text";
    else passtype.type = "password"
}

document.body.addEventListener("click", (event) => {
    if (btn.contains(event.target)) {
        modal.style.display = "flex";
        loginForm.innerHTML = loginFormContents;
        loginSwitch.setAttribute("style", selectedStyle)
    }

    if (!modalContent.contains(event.target) && !btn.contains(event.target)) {
        modal.style.display = "none"
        loginForm.innerHTML = "";
        registerForm.innerHTML = "";
    }

    if (loginSwitch.contains(event.target)) {
        loginSwitch.setAttribute("style", selectedStyle)
        registerSwitch.removeAttribute("style")
        loginForm.innerHTML = loginFormContents;
        registerForm.innerHTML = "";
    }

    if (registerSwitch.contains(event.target)) {
        registerSwitch.setAttribute("style", selectedStyle)
        loginSwitch.removeAttribute("style")
        registerForm.innerHTML = registerFormContents;
        loginForm.innerHTML = "";
    }

})

if(uploadbtn){
    uploadbtn.addEventListener('click', () => {
        uploadToggle.classList.toggle('upload-toggle')
    })    
}

if(uploadToggle){
    setTimeout(() => {
        uploadToggle.style.display = "none"
    }, 50000)
}
