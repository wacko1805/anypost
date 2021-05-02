<!DOCTYPE html>
<html>
<head>
  <title><?php echo $maintitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
   
    <div class="topnav" id="myTopnav">
        <a class="active top" href=".">home</a>
        <a  href="app">app</a>
        <a href="download.html">download</a>
        <a href="report.html">report a comment</a>
        <a class="github" href="https://github.com/wacko1805/anypost">github</a>
        <div class="topnav-right">
          <a class="github2" href="https://github.com/wacko1805/anypost">github</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
        <header>
            <h3>anypost dev</h3>
</header>
<main>
<?php $date = date('Y-m-d\TH:i:s:a');?>

<?php  date_default_timezone_set('Etc/GMT+0');

$displaydate = "Uploaded by Dev";  ?>
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
                echo "

                <form  action='../connect.php'  method='post'>
                <input type='text' name='title' id='replace'  placeholder='Title' required autocomplete='off'> <br>
                  <textarea  maxlength='500' rows='7'  type='text' id='replace2' name='comment' placeholder='Comment' required autocomplete='off' ></textarea> <br>
                  <input style='display:none;' type='text' name='date' value='$date'>
                  <input style='display:none;' type='text' name='displaydate' value='$displaydate'>
                  
                        <input type='submit' id='theButton'   name='submit' value='Submit'>
                  </div>
            </form>
                ";  
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>  

        </main>