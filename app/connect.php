<!DOCTYPE html>
<html>
<head>
  <?php include("config.php"); ?>
  <title><?php echo $maintitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="style.css">
  <style>
      article {
          text-align: center;
      }
      header {
        padding-bottom: 50px;

      }
      </style>
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
<script language="JavaScript" type="text/javascript">
setTimeout("location.href = 'index.php'",2000); // milliseconds, so 10 seconds = 10000ms
</script>
<?php

$title = filter_input(INPUT_POST, 'title');
$comment = filter_input(INPUT_POST, 'comment');
$upload_time = filter_input(INPUT_POST, 'date');
$display_time = filter_input(INPUT_POST, 'displaydate');
if (!empty($title)){
if (!empty($comment)){
    if (!empty($upload_time)){
        if (!empty($display_time)){
    include("config.php");
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO posts (title, comment, upload_time, display_time)
values ('$title','$comment','$upload_time','$display_time')";
if ($conn->query($sql)){
echo "<article><h2><div class='loader'></div><br>
Your post is uploading</h2></article>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "<article><h2>Sorry, there was an issue on our end. </h2></article>";
die();
}
}
else{
    echo "<article><h2>Sorry, there was an issue on our end. </h2></article>";
    die();
    }
    }

        
else{
echo "<article><h2>Sorry, there was an issue on our end. </h2></article>";
die();
}
}
?>
</main>
<footer>
  <div class="mdc-bottom-navigation">
        <nav class="mdc-bottom-navigation__list">
            <a style="text-decoration: none; padding-right: 40px;" href=".">
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
</body>
</html>
</html>