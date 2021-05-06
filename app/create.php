<!DOCTYPE html>
<head>
<?php include("config.php"); 

?>
  <title><?php echo $maintitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://raw.githubusercontent.com/mrameezraja/char-replacer/master/jquery-1.9.1.js"></script>
  <script src="replace1.js"></script>
  <script> $(function () { $("#title").charReplacer({ replaceChar: ["'", ">","<", "\n"], replaceWith: ["’", "&gt;", "&lt;", " "] });}) </script>
  <script> $(function () { $("#comment").charReplacer({ replaceChar: ["'", ">","<", "\n"], replaceWith: ["’", "&gt;", "&lt;", " "] });})</script>
  <style>
      header {
        padding-bottom: 50px;

      }
      </style>
</head>
<body>
<div id="top"></div>
<header><?php echo $maintitle ?></header>
<div class="Topnav"  id="myTopnav">
        <a class="top" >anypost</a>
        <div class="topnav-right">
        <a class="github2" href="/download.html">download</a>
        <a class="github2" href="/report.html">report a comment</a>
          <a class="github2" href="https://github.com/wacko1805/anypost">github</a>
        </div>


        <a href="javascript:void(0);" class="icon" onclick="fullnav()">
          <i class="fa fa-bars"></i>
        </a>
      </div>


      <div id="fullnav">
      <p>anypost</a>
          <div class="exit-icon">
      <a href="javascript:void(0);"  onclick="fullnav()">
      <i class="fa fa-times"></i></div>
</a>
<div class="main">
<a href="/download.html">download apk</a><br>
        <a href="/report.html">report a comment</a><br>
        <a href="https://github.com/wacko1805/anypost">source code</a>
</div>
</div>

<main>
<form   action="connect.php"  method="post">
    <input type="text" name="title" id="title"  placeholder="Title" onkeyup="return forceLower(this);" required autocomplete="off"> <br>
      <textarea  maxlength="500" rows="7"  type="text" id="comment" name="comment" onkeyup="return forceLower(this);" placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      
            <input type="submit" id='submit'   name="submit" value="Submit">
      </div>
</form>
<script src="block.js"></script>

<script>
function forceLower(strInput) 
{
strInput.value=strInput.value.toLowerCase();
}​
</script>
</main>
<footer>
  <div class="mdc-bottom-navigation">
        <nav class="mdc-bottom-navigation__list">
            <a style="text-decoration: none; padding-right: 40px;" href=".">
            <span
            class="mdc-bottom-navigation__list-item mdc-ripple-surface mdc-ripple-surface--primary"  
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                <span class="material-icons mdc-bottom-navigation__list-item__icon">house</span>
                <span class="mdc-bottom-navigation__list-item__text">Home</span>
            </span></a>
            <a style="text-decoration: none; padding-left: 40px;" href="create.php">
            <span class="mdc-bottom-navigation__list-item mdc-bottom-navigation__list-item--activated mdc-ripple-surface mdc-ripple-surface--primary"
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded> 
                <span class="material-icons mdc-bottom-navigation__list-item__icon">add</span>
                <span class="mdc-bottom-navigation__list-item__text">Create a post</span></a>
            </span>
        </nav>
    </div>
</footer>
<script>
function fullnav() {
  var x = document.getElementById("fullnav");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<script >
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("myTopnav").style.opacity = "1";

  } else {
    document.getElementById("myTopnav").style.opacity = "0";

  }
}
</script>

</body>
</html>