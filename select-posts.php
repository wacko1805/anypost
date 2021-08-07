<?php




//outputs 08:33:15 04 June 2013

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT * FROM `topics` ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {


while($row = $result->fetch_assoc()) {

echo "<option value='" . $row["topic"]. "'> " . $row["topic"]. "</option> ";

}

} else {

echo "<article><h2>Theres no posts!</h2></article>";

}

$conn->close();

?>