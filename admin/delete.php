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

include "../config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from posts where id = '$id'"); // delete query

if($del)
{
    echo "done!";
    echo "<a href='home.php'>Home</a>";
    mysqli_close($conn); // Close connection
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
