<!DOCTYPE html>
<html lang="en" class="mdc-typography">
<head>
  <meta charset="UTF-8">
  <title>openpost</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> 
<link rel='stylesheet' href='https://unpkg.com/material-components-web@latest/dist/material-components-web.css'>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
<link rel="stylesheet" href="/style.css">
<script>
echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
</script>
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }
  iframe {
  width: 100%;
}
.header2 {
  text-align: center;
}
  </style>
</head>
<body>
<header>
  <h3>cleanpost</h3>
  <div class="icon"><i class="uil uil-settings"></i></div></a>

</header>

<main>
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
        echo "</p></article><br><br>";
    }
}
?>
  
</main>

<footer>
  <div class="mdc-bottom-navigation">
        <nav class="mdc-bottom-navigation__list">
            <a style="text-decoration: none; padding-right: 40px;" href="/clean/">
            <span class="mdc-bottom-navigation__list-item mdc-bottom-navigation__list-item--activated mdc-ripple-surface mdc-ripple-surface--primary"
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                <span class="material-icons mdc-bottom-navigation__list-item__icon">house</span>
                <span class="mdc-bottom-navigation__list-item__text">Home</span>
            </span></a>

            <a style="text-decoration: none; padding-left: 40px;" href="create.php">

            <span
            class="mdc-bottom-navigation__list-item mdc-ripple-surface mdc-ripple-surface--primary"  
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                
                <span class="material-icons mdc-bottom-navigation__list-item__icon">add</span>
                <span class="mdc-bottom-navigation__list-item__text">Create a post</span></a>
            </span>
            <a style="text-decoration: none; padding-left: 40px;" href="/chats.php">

            
<span class="mdc-bottom-navigation__list-item mdc-ripple-surface mdc-ripple-surface--primary"  
    data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
    
    <span class="material-icons mdc-bottom-navigation__list-item__icon">chat</span>
    <span class="mdc-bottom-navigation__list-item__text">Chats</span></a>
    </span>
        </nav>
    </div>
</footer>
<!-- partial -->
  <script src='https://unpkg.com/material-components-web@latest/dist/material-components-web.js'></script><script  src="./script.js"></script>

</body>
</html>

</html>