var img1 = document.getElementById('img1');
var img2 = document.getElementById('img2');

img1.addEventListener('click', function (ev) {
    img1.style.zIndex = 1;
    img2.style.zIndex = 0;
    });
    
img2.addEventListener('click', function (ev) {
img2.style.zIndex = 1;
img1.style.zIndex = 0;
    }
)
