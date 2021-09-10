var upClass = 'toggle-up';
var downClass = 'toggle-down';

function toggle() {
  var square = document.querySelector('.float');
  
  if (~square.className.indexOf(downClass)) {
    square.className = square.className.replace(downClass, upClass);
      location.href='#create';
  } else {
        square.className = square.className.replace(upClass, downClass);
        location.href='#';
  }
  
}


