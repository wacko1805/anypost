var upClass = 'toggle-up';
var downClass = 'toggle-down';

function toggle() {
  var square = document.querySelector('.float');
  
  if (~square.className.indexOf(downClass)) {
    square.className = square.className.replace(downClass, upClass);
      location.href='#create';
      console.log("Opened Post Create overlay"); 
  } else {
        square.className = square.className.replace(upClass, downClass);
        location.href='#';
        console.log("CLosed post create overlay"); 
  }
  
}


