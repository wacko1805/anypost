<!DOCTYPE html>
<html>
<head>
  <?php include("config.php"); ?>
  <title><?php echo $maintitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>anypost<span>.</span></h3>
        </header>

        <main>
                <h2>Your post was uploaded!</h2>
                <button onclick="goBack()">Go Back</button>
        </main>
        <script>
            function goBack() {
              window.history.back();
            }
            </script>
<?php

$title = filter_input(INPUT_POST, 'title');
$comment = filter_input(INPUT_POST, 'comment');
$upload_time = filter_input(INPUT_POST, 'date');
if (!empty($title)){
if (!empty($comment)){
    if (!empty($upload_time)){
    include("config.php");
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO posts (title, comment, upload_time)
values ('$title','$comment','$upload_time')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Title should not be empty";
die();
}
}
else{
    echo "Title should not be empty";
    die();
    }
    }
else{
echo "Comment should not be empty";
die();
}
?>