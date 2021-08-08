<?php
include("config.php");
     $sql = "select * from topics";
     $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
  
    echo json_encode($emparray);  

?>
