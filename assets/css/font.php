<?php
header("Content-type: text/css");
  if (!isset($_COOKIE["font"])) {
      $font = "'Poppins', sans-serif";
  }
  else {  $font =  $_COOKIE["font"];  }

echo ":root { --font: $font;}";
?>