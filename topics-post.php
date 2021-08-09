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

$query="SELECT * FROM `posts`  WHERE `topic`='$topic' ORDER BY `posts`.`upload_time` DESC ";
$results = mysqli_query($conn, $query) or exit(mysqli_error());

while($row = $results->fetch_assoc()) {

  // Checks to see if comments exist
  $sql_com = "SELECT post_id FROM comments WHERE `post_id`='" . $row["id"]. "'";
  $result_com = $conn->query($sql_com);
  
  if ($result_com->num_rows > 0) {
      // output data of each row
      while($row_com = $result_com->fetch_assoc()) {
          $comments_ave = "<i class='far fa-comments'>";
      }
  } else {
      $comments_ave = "";
  }
echo " " . "<a  href='big.php?id=" . $row["id"]. "'><article><h2> " . $row["title"]. "</h2><p> " . $row["comment"]. "</p><div class='topics'   id='topics'><a href='topics-post.php?topic=" . $row["topic"]. "'><p class='topics-hide' >" . $row["topic"]. "</p></div></a><a  href='big.php?id=" . $row["id"]. "'><br><div class='more'><i class='fas fa-reply'></i> ";
echo $comments_ave;
echo "</i></a></div><span>" . $row["display_time"]. " </span></artilce></article></div><br>";
}


?>

</body>
</html>