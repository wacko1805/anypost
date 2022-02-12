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
$badword = "<article><h2>Some words in your post are not allowed to be posted on anypost.</h2><p>Please remove these words and try again.</p></article>";
$badwordlist = file_get_contents("bads.txt");
$badwordstring = "/" . $badwordlist . "/i";
$data = array(
    'secret' => "0x6C0d0FAbF8C111b09AfB0f21942C107B198a6B8b",
    'response' => $_POST['h-captcha-response']
);$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);
$responseData = json_decode($response);
if($responseData->success) {


$title = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'title')))));
$comment = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'comment')))));
$upload_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'date')))));
$display_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'displaydate')))));
$topic = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'topic')))));

if (preg_match($badwordstring, $title)){
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

                            if (preg_match($badwordstring, $topic)){
                                echo $badword;
                                return false;
                             }
                                else {

if (!empty($title)){
if (!empty($comment)){
    if (!empty($upload_time)){
        if (!empty($display_time)){
            if (!empty($topic)){
    include("config.php");
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO posts (title, comment, upload_time, display_time, topic)
values ('$title','$comment','$upload_time','$display_time','$topic')";
if ($conn->query($sql)){
    $sqll = "SELECT * FROM `posts` ORDER BY `posts`.`id` DESC LIMIT 1 ";
$resultl = $conn->query($sqll);
if ($resultl->num_rows > 0) {
while($rowl = $resultl->fetch_assoc()) {

    $latest = $rowl["id"];
}
} else {
}
    $note = "<script>window.location.replace('/big.php?id=".$latest."');</script>";
}
else{
    $note = "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}}
else{
$note = "Sorry, there was an issue on our end.";
die();
}
}
else{
    $note = "Sorry, there was an issue on our end. ";
    die();
    }
    }

        
else{
    $note = "Sorry, there was an issue on our end. ";
die();
}
}

else{
    $note = "Sorry, there was an issue on our end. ";
    die();
    }
    }
                        }}}}
} 
else {
    $note = "Please verify that you are a human and try again";
}

?>
<article><h2><?php echo $note; ?><h2></article>
</body>
</html>
</html>