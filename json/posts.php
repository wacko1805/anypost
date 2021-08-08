<?php
     $conn = mysqli_connect("localhost","root","","anypost") or die("Error " . mysqli_error($connection));

     
 header("Access-Control-Allow-Origin: *");
 header("content-type: application/json");
     //fetch table rows from mysql db
     $sql = "select * from posts";
     $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
?>
