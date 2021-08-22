<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>

<?php


$topic = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'topic')))));


if (!empty($topic)){

            if (!empty($topic)){
    include("../config.php");
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO topics (topic)
values ('$topic')";
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

?>
