<!DOCTYPE html>
<html>
<head>
  <?php include("config.php"); 
    
  ?>
  <title><?php echo $maintitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="top"></div>
<header><?php echo $maintitle ?></header>
<div class="Topnav"  id="myTopnav">
        <a class="top" >anypost</a>
        <div class="topnav-right">
        <a class="github2" href="/download.html">download</a>
        <a class="github2" href="/report.html">report a comment</a>
          <a class="github2" href="https://github.com/wacko1805/anypost">github</a>
        </div>


        <a href="javascript:void(0);" class="icon" onclick="fullnav()">
          <i class="fa fa-bars"></i>
        </a>
      </div>


      <div id="fullnav">
      <p>anypost</a>
          <div class="exit-icon">
      <a href="javascript:void(0);"  onclick="fullnav()">
      <i class="fa fa-times"></i></div>
</a>
<div class="main">
<a href="/download.html">download apk</a><br>
        <a href="/report.html">report a comment</a><br>
        <a href="https://github.com/wacko1805/anypost">source code</a>
</div>
</div>

<main>
     <?php include("posts.php");?>
<?php
$path='posts/';
function scan_dir($dir) {

    $files = array();    
    foreach (scandir($dir) as $file) {
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
}
$files=scan_dir($path);


foreach ($files as $key => $value) {
    if($value!="." && $value!="..")
    {
       
        print_r (file_get_contents($path."/" .$value));
        echo "</p></article></article><br><br>";
    }
}
?></main>
<footer>
  <div class="mdc-bottom-navigation">
        <nav class="mdc-bottom-navigation__list">
            <a style="text-decoration: none; padding-right: 40px;" href="#top">
            <span class="mdc-bottom-navigation__list-item mdc-bottom-navigation__list-item--activated mdc-ripple-surface mdc-ripple-surface--primary"
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                <span class="material-icons mdc-bottom-navigation__list-item__icon">house</span>
                <span class="mdc-bottom-navigation__list-item__text">Home</span>
            </span></a>
            <a style="text-decoration: none; padding-left: 40px;" href="create.php">
            <span
            class="mdc-bottom-navigation__list-item mdc-ripple-surface mdc-ripple-surface--primary"  
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                
                <span class="material-icons mdc-bottom-navigation__list-item__icon">add</span>
                <span class="mdc-bottom-navigation__list-item__text">Create a post</span></a>
            </span>
        </nav>
    </div>
</footer>
  <script src='https://unpkg.com/material-components-web@latest/dist/material-components-web.js'></script><script  src="./script.js"></script>
  <script>
function fullnav() {
  var x = document.getElementById("fullnav");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<script >
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("myTopnav").style.opacity = "1";

  } else {
    document.getElementById("myTopnav").style.opacity = "0";

  }
}
</script>
</body>
</html>
</html>