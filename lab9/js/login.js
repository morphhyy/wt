let show_pwd = document.querySelector('#show_pwd')
let pwd = document.querySelector('#pwd')

show_pwd.addEventListener('click', () => {
    if (pwd.type === "password") pwd.type = "text"
     else pwd.type = "password"
})

