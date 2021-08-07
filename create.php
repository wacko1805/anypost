<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>

</head>
<body>
<div id="main">

<main>
      
      <?php
      $displaydate = date('H:i A, M d ') ;
?>
<form  action="connect.php"   id="form" accept-charset="utf-8"  method="post">
    <input type="text" name="title" id="title"  placeholder="Title"  required autocomplete="off"> <br>
      <textarea  maxlength="500" rows="7"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      <select id="topic" name="topic">
      <option id="no topic">No Topic</option>
      <?php include("select-posts.php");?>
  </select>
      <div  class="submitp"><p><input type="submit" id='submit'   name="submit" value="Submit"><i>By submitting,<br> you agree to the <br><a href="./t+c.php#main">Terms and conditions</a></i></p></div>
    </div>
</form>
<?php
//selects data where wish is pending 
$query="SELECT * FROM `topics` WHERE `topic`='test1'";
$results = mysqli_query($conn, $query) or exit(mysqli_error());

while ($row = mysqli_fetch_array($results)) {

//show only object_id, name and wish
echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['topic'] . '</td>';
echo '</tr>';
}
?>
</body>
</html>