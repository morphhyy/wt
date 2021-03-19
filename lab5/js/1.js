var image = document.querySelector('img')

var both = document.querySelector('#both')

// hidden.addEventListener('click', () =>{
//     image.style.visibility = 'hidden'
// })


// show.addEventListener('click', () =>{
//     image.style.visibility = 'visible'
// })

both.addEventListener("click", () => {
    image.classList.toggle("show-hid")
    if(both.textContent == "HIDE"){
        both.textContent = "SHOW"
    }else{
        both.textContent = "HIDE"
    }
    
})
