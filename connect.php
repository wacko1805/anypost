<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>
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
<?php include("assets/php/nav.php");?>
<main>

<script language="JavaScript" type="text/javascript">
setTimeout("location.href = 'index.php'",2000); // milliseconds, so 10 seconds = 10000ms
</script>
<?php

$title = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'title')))));
$comment = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'comment')))));
$upload_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'date')))));
$display_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'displaydate')))));
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
<?php include ("json.php"); ?>
</body>
</html>
</html>
