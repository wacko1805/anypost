<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>anypost</title>

    </head>
    <body>
    

<header>
    <h1>anypost</h1>
    <a onclick="on()">Create a post</a>
</header>
<div id="overlay" onclick="off()">
  <div id="text">
  <div id="container">
  <form name="form1" action="./create/upload.php"  method="post">
    <input type="text" name="title" placeholder="Title" required autocomplete="off"> <br>

      <textarea maxlength="500" rows="10" cols="60" type="text" name="comment" placeholder="Comment" required autocomplete="off" onClick="select_area()"></textarea> <br>

      <input type="submit" name="submit" value="Submit" onClick="validate_text();">
      </div>
</form>

<script  src="./assets/js/script.js"></script>
  </div>
</div>

<div class="main">
<div class="posts">
<?php
include './assets/php/post.php'
?>
</div>
</div>


<footer>
    <div class="links">
        <a>v0.01-beta</a> <p></p><a href="https://github.com/wacko1805/anypost">Github</a>
</div>
</footer>
</html>v