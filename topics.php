<html>
<head>
  <?php include("config.php");?>
  <title>Topics | Anypost</title>
</head>
<body>
<?php include("assets/php/nav.php");?>
<main>
<h2>Topics:</h2><br>
<?php
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `topics` ORDER BY `topics`.`id` ASC ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

  echo " " . "<a class='topics2'  href='topics-post.php?topic=" . $row["topic"]. "'>" . $row["topic"]. "</a>";
}

} else {

echo "<article><h2>Theres no posts!</h2></article>";

}

$conn->close();

?>
</main>
<div style="margin-bottom: 400px;"></div>
<?php include("assets/php/footer.php");?>
</body>
</html>