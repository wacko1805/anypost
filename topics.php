<html>
<head>
  <?php include("config.php");?>

</head>
<body>
<noscript>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Please enable Javascript for full funcionality!</strong>
</div>
</noscript>
<?php include("assets/php/nav.php");?>
<main>



<?php


$edit_record = $_GET['topic'];

$query = "select * from topics where topic='$edit_record'";

$run = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($run,MYSQLI_ASSOC))
{
$topic = $row['topic'];
}
?>
<div class="topic-header">
 <div class='topics'>Topic: <p><?php echo $topic;?></p></div>
</div>
<?php

$query="SELECT * FROM `posts`  WHERE `topic`='$topic'";
$results = mysqli_query($conn, $query) or exit(mysqli_error());

while ($row = mysqli_fetch_array($results)) {

//show only object_id, name and wish
echo " " . "<a  href='big.php?id=" . $row["id"]. "'><article><h2> " . $row["title"]. "</h2><p> " . $row["comment"]. "</p><a  href='big.php?id=" . $row["id"]. "'><div class='more'><i class='far fa-comments'></i></a></div><span>" . $row["display_time"]. " </span></artilce></article></div><br>";

}
?>

</body>
</html>