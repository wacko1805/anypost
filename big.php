<html>
<head>
  <?php include("config.php");?>
  <title><?php include("assets/php/title-big.php") ?> | anypost</title>
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
$id=$_GET['id'];
// Checking data it is a number or not
if(!is_numeric($id)){
echo "Data Error";
exit;
}
// MySQL connection string

$count="SELECT *  FROM posts where id=?";

if($stmt = $conn->prepare($count)){
  $stmt->bind_param('i',$id);
  $stmt->execute();

 $result = $stmt->get_result();
 $row=$result->fetch_object();

echo " " . "<article><h2>$row->title</h2><p>$row->comment</p><span>$row->display_time</span></artilce>";

}else{
echo $connection->error;
}
?>
</article>
<div class="comment-header">
<h2>Comments:</h2>

</div>

<button class="add-comment" onclick="myFunction()">Add Comment</button>

<div id="form-hide">
<form  action="comment.php"   id="form" accept-charset="utf-8"  method="post">
        <input style="display:none;" type="text" name="post_id" value="<?php echo "$row->id"?>">
      <textarea  maxlength="500"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      
<input type="submit" id='submit'   name="submit" value="Submit">
    </div>
</form>
</div>
<?php

$query="SELECT * FROM `comments`  WHERE `post_id`='$row->id'  ORDER BY `comments`.`upload_time` DESC";
$results = mysqli_query($conn, $query) or exit(mysqli_error());

while ($row = mysqli_fetch_array($results)) {

//show only object_id, name and wish
    echo '<div class="comment">';
    echo '<h3>' . $row['comment'] . '</h3>';
    echo '<span>' . $row['display_time'] . '</span>';
    echo '</div><br>';
}
?>

<script>
function myFunction() {
  var x = document.getElementById("form-hide");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>




