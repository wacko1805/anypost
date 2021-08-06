<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>

</head>
<body>

<main>
<?php include("posts.php");?>
<?php
$path='posts/';
function scan_dir($dir) {

    $files = array();    
    foreach (scandir($dir) as $file) {
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
}
$files=scan_dir($path);


foreach ($files as $key => $value) {
    if($value!="." && $value!="..")
    {
       
        print_r (file_get_contents($path."/" .$value));
        echo "</p></article></article><br><br>";
    }
}
?></main>
</body>
</html>