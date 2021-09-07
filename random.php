<?php

include('config.php');


$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);


}



$sql = "SELECT * from posts ORDER BY RAND() LIMIT 0,1;";


$result = $conn->query($sql);

if ($result->num_rows > 0) {


while($row = $result->fetch_assoc()) {

    // Checks to see if comments exist

    $id = $row["id"];
    $title = $row["title"];
    $comment = $row["comment"];
    $date = $row["display_time"];
    $topic = $row["topic"];

    
}

} else {

echo "<article><h2>Theres no posts!</h2></article>";

}

$conn->close();

?>
<html>
    <head>
    <title><?php echo $title; ?> | Random Post - Anypost</title>
    </head>
    <body>
    <?php include("assets/php/nav.php");?>
<main>
        <div class="random-post">
            <div class="main">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $comment; ?></p>
            </div>
            <div class="badge">
                <a id="topics" class="topics-hide" href="http://localhost/topics-post.php?topic=<?php echo $topic; ?>"><?php echo $topic; ?></a>
                <p class="topics-hide"></p>
                <a id="comment" href="big.php?id=<?php echo $id; ?>">Comment</a>
            </div>
        </div class="random-post">
        <div class="buttons"><a onClick="window.location.reload();"><buttton class="badge"><i class="fas fa-redo"></i> New Post</button></a>
        </main>
        <script>
   let attribute = document.getElementsByClassName('topics-hide');
   for (let i = 0; i < attribute.length; i++) {
      let impDiv = attribute[i];
      let value = impDiv.innerHTML.trim();
      if (value == 'No Topic' || value == '') {
         impDiv.style.display = 'none';
      }
   }
</script>

</body>