<!DOCTYPE html>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<html>
<head>
  <?php include("../config.php");?>

</head>
<body>
<main>

<?php


$title =  filter_input(INPUT_POST, 'title');
$comment = filter_input(INPUT_POST, 'comment');
$upload_time = filter_input(INPUT_POST, 'date');
$display_time = filter_input(INPUT_POST, 'displaydate');
$topic =  filter_input(INPUT_POST, 'topic');

if (!empty($title)){
if (!empty($comment)){
    if (!empty($upload_time)){
        if (!empty($display_time)){
            if (!empty($topic)){
    include("../config.php");
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
Your post Has Uploaded</h2></article>";
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
