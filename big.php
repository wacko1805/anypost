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
<div style="margin-bottom: 100px;"></div>

<?php
$id=$_GET['id'];
// Checking data it is a number or not
if(!is_numeric($id)){
echo "Data Error";
}

$comment_error = " <div class='big-article'><h2>Sorry, the Post your looking for does not exist!</h2><br><div class='topics'   id='topics'><a href='/'><p class='topics-hide' >Go Back</p></div></a></div>";
$result = $conn->query("SELECT * FROM posts where id=$id");
$result = $result->fetch_row();
if(empty($result)){
    echo $comment_error;
}else{
 


// MySQL connection string

$count="SELECT *  FROM posts where id=?";

if($stmt = $conn->prepare($count)){
  $stmt->bind_param('i',$id);
  $stmt->execute();

 $result = $stmt->get_result();
 $row=$result->fetch_object();
 
 $id = $row->id;
 $title = $row->title;
 $comment = $row->comment;
 $date = $row->display_time;
 $topic = $row->topic;
 echo " " . "<div class='big-article'><h2>$row->title </h2><span>$row->display_time</span><br><br><p>$row->comment</p><div class='topics'   id='topics'><a href='topics-post.php?topic=$row->topic'><p class='topics-hide' >$row->topic</p></div></a></div>";



}else{
echo $connection->error;
}
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
<?php
if(empty($result)){
  echo "";
}else{
include('assets/php/comment-form.php');}?>



<script src="/assets/js/disable.js">
</script>
</div>
<?php

if(empty($result)){
    echo "";
}else{
 
$query="SELECT * FROM `comments`  WHERE `post_id`='$row->id'  ORDER BY `comments`.`id` DESC";
$results = mysqli_query($conn, $query) or exit(mysqli_error());

while ($row = mysqli_fetch_array($results)) {
  $commid = $row['id'];
//show only object_id, name and wish
    echo '<div class="comment">';
    echo '<h3>' . $row['comment'] . '</h3>';
    echo '<span>' . $row['display_time'] . '</span>';
    echo '</div><br>';
}
}
?>


</main>

<div style="margin-bottom: 400px;"></div>

<?php include("assets/php/footer.php");?>
