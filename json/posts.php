<?php
include("config.php");

     //fetch table rows from mysql db
     $sql = "select * from posts ORDER BY `posts`.`upload_time` DESC";
     $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
?>
