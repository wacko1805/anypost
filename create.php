<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>
    <style>

@media only screen and (max-height: 500px) {
.mdc-bottom-navigation {
  display: none;
}
}

@media only screen and (max-height: 500px) {
#header {
  display: none;
}
}

        </style>

        
</head>
<body>
<?php include("assets/php/nav.php");?>
<div id="main">

<main>
      
      
<form   action="connect.php" accept-charset="utf-8"  method="post">
    <input type="text" name="title" id="title"  placeholder="Title"  required autocomplete="off"> <br>
      <textarea  maxlength="500" rows="7"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      
      <div  class="submitp"><p><input type="submit" id='submit'   name="submit" value="Submit"><i>By submitting,<br> you agree to the <br><a href="t+c.php#main">Terms and conditions</a></i></p></div>
      <a href="md-create.php"><p class="newbox">Try the new markdown editor! (beta)</p></a>
    </div>
</form>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-gc-9+4u-81-12"
     data-ad-client="ca-pub-9222991553459658"
     data-ad-slot="6014955189"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>




<script src="assets/js/block.js"></script>


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
<script src='assets/js/main.js'></script>


</body>
</html>