<?php
header('Location: /clean/');

if(isset($_POST['submit'])){
$Name = "<article><h2>".$_POST['title']."
";
$Pass = "</h2><p>".$_POST['comment']."
";
$file = fopen("posts/" . 'blog-post'.date('m-d-Y_hia').'.txt',"a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>