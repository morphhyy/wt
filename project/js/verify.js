const check = (valid) => {
    
    const anything = document.querySelector('#'+valid.id).value;
    fetch("http://localhost:9000/verify.php?"+valid.id+"="+anything)
    .then(response => response.text())
    .then(data => {
        if(data.includes("already exists")){
            document.getElementById("message-"+valid.id).innerHTML = valid.id.split('-').pop()+ " already exists"
            
            setTimeout(() => {
                document.getElementById("message-"+valid.id).innerHTML = ""
            }, 5000)
        }
})
}


registerForm.addEventListener('submit', e => {
    const regUsername = registerForm.querySelector('#reg-username')
    const regEmail = registerForm.querySelector('#reg-email')
    const regPassword = registerForm.querySelector('#reg-password')
    e.preventDefault();

    if(regUsername.value !== '' && regEmail.value !== '' && regPassword.value !== ''){
        e.target.submit();
        
    }
})


loginForm.addEventListener('submit', e => {
    const loginUsername = loginForm.querySelector('#login-username')
    const loginPassword = loginForm.querySelector('#login-password')
    const loginMess = document.querySelector('#login-message')
    const error_mess = document.querySelector('.error')


    e.preventDefault();

    if(loginUsername.value !== '' && loginPassword.value !== ''){
        fetch(`http://localhost:9000/verify.php?username=${loginUsername.value}&password=${loginPassword.value}`)
            .then(response => response.text())
            .then(data => {
                if(data.includes('correct')){
                    e.target.submit()
                } else {
                    error_mess.style.display = 'block'
                    if(data.includes('invalid username')){
                        loginMess.innerHTML = "Invalid Username"
                    }else if(data.includes('invalid password')){
                        loginMess.innerHTML = "Invalid Password"
                    }

                    setTimeout(() => {
                        error_mess.style.display = 'none'
                    }, 5000)
                } 
            })
    }
}) 
