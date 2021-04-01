
var elm;
function grab(evt) {
      console.log(evt);
      elm = evt.currentTarget;
      console.log(elm);

      document.addEventListener("mousemove", move, true);
      document.addEventListener("mouseup", drop, true);
    }

function move(ev) {
      elm.style.left = ev.clientX + "px";
      elm.style.top = ev.clientY + "px";
    }

function drop(ev) {
      document.removeEventListener('mouseup', drop, true);
      document.removeEventListener('mousemove', move, true);
    }
