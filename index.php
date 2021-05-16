<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>

</head>
<body>
<noscript>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Please enable Javascript for full funcionality!</strong>
</div>
</noscript>
<?php include("assets/php/nav.php");?>
<main>
<?php include("posts.php");?>
</main>
<footer>
  <div class="mdc-bottom-navigation">
        <nav  class="mdc-bottom-navigation__list">
        <div id="home-btn">
            <a style="text-decoration: none; padding-right: 40px;" href="#top">
            <span  class="mdc-bottom-navigation__list-item mdc-bottom-navigation__list-item--activated mdc-ripple-surface mdc-ripple-surface--primary"
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                <span class="material-icons mdc-bottom-navigation__list-item__icon">house</span>
                <span class="mdc-bottom-navigation__list-item__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span></div>

            <div id="up-btn">
            <span  class="mdc-bottom-navigation__list-item mdc-bottom-navigation__list-item--activated mdc-ripple-surface mdc-ripple-surface--primary"
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                <span class="material-icons mdc-bottom-navigation__list-item__icon">arrow_upward</span>
                <span class="mdc-bottom-navigation__list-item__text">Back to top</span>
            </span></div>
            <a style="text-decoration: none; padding-left: 40px;" href="create.php">
            <span
            class="mdc-bottom-navigation__list-item mdc-ripple-surface mdc-ripple-surface--primary"  
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                
                <span class="material-icons mdc-bottom-navigation__list-item__icon">add</span>
                <span class="mdc-bottom-navigation__list-item__text">Create a post</span></a>
            </span>
        </nav>
    </div>
</footer>
<script src="http://anypost.pixel-fy.com/assets/js/display.js"></script>
</body>
</html>