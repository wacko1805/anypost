<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","anypost") or die("Error " . mysqli_error($connection));
    //fetch table rows from mysql db
    $sql = "SELECT * FROM `posts` ORDER BY `posts`.`upload_time` DESC ";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

        //create an array
        $emparray = array();
        while($row =mysqli_fetch_assoc($result))
        {
            $emparray[] = $row;
        }

            //write to json file
    $fp = fopen('anypost.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);