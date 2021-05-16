<?php

include("config.php");


$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT * FROM `posts` ORDER BY `posts`.`upload_time` DESC ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {


while($row = $result->fetch_assoc()) {

echo " " . "<article><h2> " . $row["title"]. "</h2><p> " . $row["comment"]. "</p><span>" . $row["display_time"]. " </span></artilce></article><br>";

}

} else {

echo "<article><h2>Theres no posts!</h2></article>";

}

$conn->close();

?>

