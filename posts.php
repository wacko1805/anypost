<!DOCTYPE html>
<html lang="en" class="mdc-typography">
<head>
  <meta charset="UTF-8">
  <title>anypost app</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> 
<link rel='stylesheet' href='https://unpkg.com/material-components-web@latest/dist/material-components-web.css'><link rel="stylesheet" href="./style.css">
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }
  main {
  flex-grow:1;
  padding:20px;
  margin-left: 0;
  margin-right: 0;
  word-wrap: normal;
  word-break: break-word;
}
@media only screen and (max-width: 600px) {
  main {
  margin-left: 0;
  margin-right: 0;
  
  }
}
  </style>
</head>
<body>


  
<main>
<style>
</style>

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
        echo "</p></article><br><br></code></pre>";
    }
}
?>

</main>
<div style="display:none;">
<script>document.body.innerHTML = document.body.innerHTML.replace(/<script>/g, '<----script>');</script>
<script>document.body.innerHTML = document.body.innerHTML.replace(/</script>/g, '<----/script>');</script>
<script>document.body.innerHTML = document.body.innerHTML.replace(/<style>/g, '<----style>');</script>
<script>document.body.innerHTML = document.body.innerHTML.replace(/</style>/g, '<----/style>');</script>

</div>
</body>
</html>
