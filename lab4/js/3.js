var num1 = document.querySelector('#num1')
var num2 = document.querySelector('#num2')

var add = document.querySelector('#add')
var sub = document.querySelector('#sub')
var mult = document.querySelector('#mult')
var divi = document.querySelector('#divi')
var result = document.querySelector('#result')

add.addEventListener("click", ()=>{
    var a = Number(num1.value)
    var b = Number(num2.value)
    var total = a+b
    result.innerHTML = "<br><h3> Addition: " + total + "</h3>"
})

sub.addEventListener("click", () => {
    var a = Number(num1.value)
    var b = Number(num2.value)
    var total = a-b
    result.innerHTML = "<br><h3> Subtraction: " + total + "</h3>"
})

mult.addEventListener("click", () => {
    var a = Number(num1.value)
    var b = Number(num2.value)
    var total = a*b
    result.innerHTML = "<br><h3> Multiplication: " + total + "</h3>"
})

divi.addEventListener("click", () => {
    var a = Number(num1.value)
    var b = Number(num2.value)
    var total = a/b
    result.innerHTML = "<br><h3> Division: " + total + "</h3>"
})