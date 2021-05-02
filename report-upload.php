<?php
header('Location: report-submitted.php');

if(isset($_POST['submit'])){
$Name = "Reported: ".$_POST['report']."
";

$file = fopen("reports/" . 'blog-post'.date('m-d-Y_hia').'.txt',"a");
fwrite($file, $Name);
fclose($file);
}
?>