<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "anypost";
$maintitle = "anypost";
$date = date('Y-m-d\TH:i:s:a');
date_default_timezone_set('Etc/GMT+0');
$displaydate = date('H:i A, M d ') ;
$timezone = "GMT+";
include("assets/php/head.php");
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>