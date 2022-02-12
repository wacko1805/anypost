<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>
  <title>Anypost</title>
</head>
<body>
<?php include("assets/php/nav.php");?>
<main>

<?php
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

$badword = "<article><h2>Some words in your post are not allowed to be posted on anypost.</h2><p>Please remove these words and try again.</p></article>";
$badwordlist = file_get_contents("bads.txt");
$badwordstring = "/" . $badwordlist . "/i";

$post_id = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'post_id')))));
$comment = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'comment')))));
$upload_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'date')))));
$display_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'displaydate')))));
if (preg_match($badwordstring, $post_id)){
    echo $badword;
    return false;
 }
    else {

        if (preg_match($badwordstring, $comment)){
            echo $badword;
            return false;
         }
            else {

                if (preg_match($badwordstring, $upload_time)){
                    echo $badword;
                    return false;
                 }
                    else {
    
                        if (preg_match($badwordstring, $display_time)){
                            echo $badword;
                            return false;
                         }
                            else {
                                header('Location: '."$previous".'');

if (!empty($post_id)){
if (!empty($comment)){
    if (!empty($upload_time)){
        if (!empty($display_time)){
            $host = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "anypost";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO comments (post_id, comment, upload_time, display_time)
values ('$post_id','$comment','$upload_time','$display_time')";
if ($conn->query($sql)){
echo "<article><h2><div class='loader'></div><br>
Your post is uploading</h2></article>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "<article><h2>Sorry, there was an issue on our end. 1 </h2></article>";
die();
}
}
else{
    echo "<article><h2>Sorry, there was an issue on our end. 2</h2></article>";
    die();
    }
    }

        
else{
echo "<article><h2>Sorry, there was an issue on our end.3 </h2></article>";
die();
}
}
                            }}}}
?>