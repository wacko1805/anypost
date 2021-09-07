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

$qry = mysqli_query($conn,"select * from topics where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
	
    $edit = mysqli_query($conn,"update posts set title='$fullname' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("home.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['topic'] ?>" placeholder="Enter Full Name" Required>
  <input type="submit" name="update" value="Update">
</form>