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
  <style>
  #myTopnav{
    opacity: 1;
    position: absolute;
  }
  #header {
  padding-top: 160px;
  padding-bottom: 60px;

}
  </style>
</head>
<body>
<div id="top"></div>
<div id="header">report</div>
<div class="Topnav"  id="myTopnav">
        <a class="top" >anypost</a>

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
<a href="/download.php">download apk</a><br>
        <a href="/report.php">report a comment</a><br>
        <a href="https://github.com/wacko1805/anypost">source code</a>
</div>
</div>

<main>
<form action="report-upload.php" method="post" enctype="multipart/form-data">
<h3>Select post</h3>
<select name="report" id="report" placeholder="Select post">
<option selected disabled>Choose one</option><?php include("select-posts.php");?></select>
<input type="submit" id='submit'   name="submit" value="Submit">
                  </form>

</main>
<footer>
  <div class="mdc-bottom-navigation">
        <nav class="mdc-bottom-navigation__list">
            <a style="text-decoration: none; padding-right: 40px;" href=".">
            <span class="mdc-bottom-navigation__list-item mdc-ripple-surface mdc-ripple-surface--primary"  
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
 document.getElementById("myTopNav").style.opacity = "1";
</script>
</body>
</html>
</html>
