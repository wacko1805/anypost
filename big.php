<html>
<head>
  <?php include("config.php");?>
  <title><?php include("assets/php/title-big.php") ?> | anypost</title>
  <style>
    #header {
      display: none;
    }
  </style>
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
<div style="margin-bottom: 50px;"></div>

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
echo " " . "<div class='big-article'><h2>$row->title </h2><span>$row->display_time</span><br><br><p>$row->comment</p><div class='topics'   id='topics'><a href='topics-post.php?topic=$row->topic'><p class='topics-hide' >$row->topic</p></div></a></div>";



}else{
echo $connection->error;
}
?>
<script>
   let attribute = document.getElementsByClassName('topics-hide');
   for (let i = 0; i < attribute.length; i++) {
      let impDiv = attribute[i];
      let value = impDiv.innerHTML.trim();
      if (value == 'No Topic' || value == '') {
         impDiv.style.display = 'none';
      }
   }
</script>
</article>
<a class="hidden" href="image.php?s=fff_000_500_500&t=<?php echo $row->title; ?>&c=<?php echo $row->comment; ?>">Share</a>
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
<script src="/assets/js/disable.js">
</script>
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


</main>
<div style="margin-bottom: 400px;"></div>

<?php include("assets/php/footer.php");?>
