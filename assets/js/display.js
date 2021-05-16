var xmlhttp = new XMLHttpRequest();
var url = "anypost.json";

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myArr = JSON.parse(this.responseText);
    myFunction(myArr);
  }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
  var out = "";
  var i;
  for(i = 0; i < arr.length; i++) {
    out += '<article><h2> ' + arr[i].title + '</h2><p> ' + 
    arr[i].comment + '</p><span>'  + 
    arr[i].display_time + '</span></artilce></article><br>';
  }
  document.getElementById("id01").innerHTML = out;
}