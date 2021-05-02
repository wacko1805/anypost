window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("header").style.fontSize = "20px";
    document.getElementById("header").style.paddingTop = "15px";
    document.getElementById("header").style.paddingBottom = "15px";
    document.getElementById("header").style.textAlign = "left";
    document.getElementById("header").style.paddingLeft = "25px";
    document.getElementById("header").style.boxShadow = "0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12)";
    document.getElementById("header").style.fontWeight = "normal";
    document.getElementById("header").style.color = "var(--colour3)";
  } else {
    document.getElementById("header").style.fontSize = "60px";
    document.getElementById("header").style.paddingTop = "120px";
    document.getElementById("header").style.paddingBottom = "120px";
    document.getElementById("header").style.textAlign = "center";
    document.getElementById("header").style.paddingLeft = "0";
    document.getElementById("header").style.boxShadow = "none";
    document.getElementById("header").style.fontWeight = "bold";
    document.getElementById("header").style.color = "var(--colour2)";
  }
}