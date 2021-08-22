<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
include("../config.php");
$db = mysqli_connect("localhost","root","","anypost");


?>
<?php include("../assets/php/nav.php");?>

<main>
<p>DEVELOPER MODE <a href="logout.php">LOGOUT</a></p>

</h2>
<?php $date = date('Y-m-d\TH:i:s:a');?>

<?php  

$displaydate = "Uploaded by Admin";  ?>

<form  action="connect.php"   id="form" accept-charset="utf-8"  method="post">
    <input type="text" name="title" id="title"  placeholder="Title"  required autocomplete="off"> <br>
      <textarea  maxlength="500" rows="7"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?>">
      <select id="topic" name="topic">
      <option id="no topic">No Topic</option>
      <?php include("../select-posts.php");?>
  </select>
      <div  class="submitp"><p><input type="submit" id='submit'   name="submit" value="Submit"><i>By submitting,<br> you agree to the <br><a href="t+c.php#main">Terms and conditions</a></i></p></div>
    </div>
</form>

            <form  action='add-topic.php'  method='post'>
                <input type='text' name='topic' id='topic'  placeholder='Topic' required autocomplete='off'> <br>
         
                  
                        <input type='submit' id='theButton'   name='submit' value='Submit'>
                  </div>
            </form>
</main>
<div style="width:100%; word-break:Break-all;">
            <table border="2">
  <tr>

    <td>id</td>
    <td>Topic</td>
    <td>Delete</td>
    <td>edit</td>
  </tr>

<?php


$records = mysqli_query($db,"select * from topics ORDER BY `topics`.`id` DESC"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['topic']; ?></td>
    <td><a href="edit-topic.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete-topic.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>


<table border="2">
  <tr>

    <td>Title</td>
    <td>Edit</td>
    <td>Delete</td>
    <td>edit</td>
  </tr>

<?php


$records = mysqli_query($db,"select * from posts ORDER BY `posts`.`upload_time` DESC"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['title']; ?></td>
    <td><?php echo $data['comment']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>



    