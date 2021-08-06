<!DOCTYPE html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: .');
?>
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
setTimeout("location.href = 'index.php'",2000); 
</script>
<?php


$title = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'title')))));
$comment = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'comment')))));
$upload_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'date')))));
$display_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'displaydate')))));
$topic = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'topic')))));

if (!empty($title)){
if (!empty($comment)){
    if (!empty($upload_time)){
        if (!empty($display_time)){
            if (!empty($topic)){
    include("config.php");
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO posts (title, comment, upload_time, display_time, topic)
values ('$title','$comment','$upload_time','$display_time','$topic')";
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

else{
    echo "<article><h2>Sorry, there was an issue on our end. </h2></article>";
    die();
    }
    }
?>

</body>
</html>
</html>