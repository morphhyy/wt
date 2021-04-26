var password = document.querySelector('#psw')
var rpassword = document.querySelector('#rpsw')
var button = document.querySelector('button')
var errorhtml = document.querySelector('.error')


// checking.addEventListener('mouseleave', () => {
//     if(password.value === rpassword.value){
//         password.style.border = '1.5px solid green'
//         rpassword.style.border = '1.5px solid green'
    
//     }else{
//         password.style.border = '1.5px solid red'
//         rpassword.style.border = '1.5px solid red'
//     }
// })


    
// gedey.addEventListener('submit',errors)

gedey.addEventListener('submit', (e) => {
    e.preventDefault()
    if(password.value !== rpassword.value){
        errorhtml.style.display = 'block'
        errorhtml.classList.toggle('error')
        errorhtml.textContent = 'Incorrect Password'

        setTimeout(() =>{
            errorhtml.style.display = 'none'
        }, 4000)

    }else{
        e.target.submit()
    }
})

