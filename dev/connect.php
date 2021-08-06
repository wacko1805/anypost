<?php      
        $host = "127.0.0.1";  
        $user = "root";  
        $password = '';  
        $db_name = "ap-dev";  
        include("../assets/php/head.php");
        $maintitle = "anypost";

        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  


        $db = mysqli_connect("localhost","root","","anypost");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
    ?>  