const username = document.querySelector('#username')
const password = document.querySelector('#password')
const email = document.querySelector('#email')
const updateForm = document.querySelector('#updateForm')

updateForm.addEventListener('submit', e => {
    e.preventDefault()
    if(username.value !== '' && password.value !== '' && email.value !== ''){
        fetch(`http://localhost:9000/verify.php?u=${username.value}&p=${password.value}&e=${email.value}`)
            .then(response => response.text())
            .then(data => {
                if(data.includes('username exist')){
                    username.style.border = '1px solid red';
                    setTimeout(() => {
                        username.style.border = '1px solid grey'
                    },6000)
                }else if(data.includes('email exist')){
                    email.style.border = '1px solid red';
                    setTimeout(() => {
                        email.style.border = '1px solid grey'
                    }, 6000)
                }else if(data.includes('incorrect')){
                    password.style.border = '1px solid red';
                    setTimeout(() => {
                        password.style.border = '1px solid grey'
                    }, 6000)
                }else if(data.includes('correct')){
                    console.log('correct')
                    e.target.submit()
                }
            })
    }
})

