<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>anypost</title>
    </head>
    <body>
    

<header>
    <h1>anypost</h1>
    <a onclick="on()">Create a post</a>
</header>
<div id="overlay" onclick="off()">
  <div id="text">
  <form action="create/upload.php"  method="post">
    <input type="text" name="title" placeholder="Title" required autocomplete="off"> <br>
      <textarea rows="10" cols="60" type="text" name="comment" placeholder="Comment" required autocomplete="off"></textarea> <br>
      <input type="submit" name="submit" value="Submit">
</form>
  </div>
</div>

<div class="main">
<div class="posts">
<?php
$path='./posts/';
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
        echo "</p></article><br><br>";
    }
}
?>
</div>
</div>
<script src="script.js"></script>
<footer>
    <div class="links">
        <a href="#">Github</a>
</div>
</footer>
</html>