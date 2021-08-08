<?php
     $conn = mysqli_connect("127.0.0.1","root","","anypost") or die("Error " . mysqli_error($connection));

     
 header("Access-Control-Allow-Origin: *");
 header("content-type: application/json");

?>
