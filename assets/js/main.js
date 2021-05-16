function fullnav() {
    var x = document.getElementById("fullnav");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
      window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      document.getElementById("home-btn").style.opacity = "0";
      document.getElementById("home-btn").style.display = "none";
      document.getElementById("up-btn").style.opacity = "1";
      document.getElementById("up-btn").style.display = "block";
      document.getElementById("myTopnav").style.opacity = "1";
  
    } else {
      document.getElementById("home-btn").style.opacity = "1";
      document.getElementById("home-btn").style.display = "block";
      document.getElementById("up-btn").style.opacity = "0";
      document.getElementById("up-btn").style.display = "none";
      document.getElementById("myTopnav").style.opacity = "0";
  
    }
  
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
  
  }