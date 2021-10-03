<?php
header("Content-type: text/css");
  if (!isset($_COOKIE["colour"])) {
      $colour = "#9088d4";
  }
  else {  $colour =  $_COOKIE["colour"];  }

echo ":root { --main: $colour;}";
?>

