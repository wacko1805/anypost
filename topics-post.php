<html>
<head>
  <?php include("config.php");?>
  <title>Anypost</title>
</head>
<body>
<?php include("assets/php/nav.php");?>
<main>
<?php
$comment_error = " <div class='big-article'><h2>Sorry, the Post your looking for does not exist!</h2><br><div class='topics'   id='topics'><a href='/'><p class='topics-hide' >Go Back</p></div></a></div>";


 
$edit_record = $_GET['topic'];

$query = "select * from topics where topic='$edit_record'";
$result2 = $conn->query($query);
$result2 = $result2->fetch_row();
$run = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($run,MYSQLI_ASSOC))
{
$topic = $row['topic'];
}

?>





<?php
$topic_error = "<article><h2>The topic you are looking for does not exist</h2><p></p></article>";
if(empty($result2)){
    echo $topic_error;
}else{
 
echo "<div class='topic-header'>
<div class='topics'>Topic: <p>$topic</p></div>
</div>";
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
echo " " . "<a  href='big.php?id=" . $row["id"]. "'><article><h2> " . $row["title"]. "</h2><p> " . $row["comment"]. "</p><a  href='big.php?id=" . $row["id"]. "'><br><div class='more'><i class='fas fa-reply'></i> ";
echo $comments_ave;
echo "</i></a></div><span>" . $row["display_time"]. " </span></artilce></article></div><br>";

}
}
?>
</main>
<?php include("assets/php/footer.php");?>
</body>
</html>