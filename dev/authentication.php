<!DOCTYPE html>
<html>
<head>
  <?php include("connect.php");?>
  <?php      
        include('connect.php');  
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select *from login where username = '$username' and password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                echo "Yes";
              }  
              else{  
                header("location:index.html"); // redirects to all records page
              }     
      ?>  
</head>
<body>
<noscript>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Please enable Javascript for full funcionality!</strong>
</div>
</noscript>
<?php include("../assets/php/nav.php");?>

<main>
<p>DEVELOPER MODE </p>

</h2>
<?php $date = date('Y-m-d\TH:i:s:a');?>

<?php  date_default_timezone_set('Etc/GMT+0');

$displaydate = "Uploaded by Dev";  ?>


                <form  action='connect.php'  method='post'>
                <input type='text' name='title' id='replace'  placeholder='Title' required autocomplete='off'> <br>
                  <textarea  maxlength='500' rows='7'  type='text' id='replace2' name='comment' placeholder='Comment' required autocomplete='off' ></textarea> <br>
                  <input style='display:none;' type='text' name='date' value='$date'>
                  <input style='display:none;' type='text' name='displaydate' value='$displaydate'>
                  
                        <input type='submit' id='theButton'   name='submit' value='Submit'>
                  </div>
            </form>
                ";  


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

        </main>