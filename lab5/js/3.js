var button = document.querySelector("button")
var head = document.querySelector("h1")

button.addEventListener("mouseover", () => head.textContent = "Bye there!")


button.addEventListener("mouseout", () => head.textContent = "Hello there!")


var lis = document.querySelectorAll("li")
var isRed = false
for(var i=0; i<lis.length; i++){
    lis[i].addEventListener("click", function(){
        if(isRed){
            this.style.color = "black"
        }else{
            this.style.color = "red"
        }
        isRed = !isRed
    })
}