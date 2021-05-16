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
      
      

<script type="text/javascript">
    document.write("<form action=\"connect.php\" id=\"form\" accept-charset=\"utf-8\"  method=\"post\" />");
    document.write("<input type=\"text\" name=\"title\" id=\"title\"  placeholder=\"Title\" onkeyup=\"return forceLower(this);\" required autocomplete=\"off\"> <br> ");
    document.write("<textarea  maxlength=\"500\" rows=\"7\"  type=\"text\" id=\"comment\" name=\"comment\" onkeyup=\"return forceLower(this);\" placeholder=\"Comment\" required autocomplete=\"off\" /></textarea> <br>");
    document.write("<input style=\"display:none;\" type=\"text\" name=\"date\" value=\"<?= $date ?>\">");
    document.write("<input style=\"display:none;\" type=\"text\" name=\"displaydate\" value=\"<?= $displaydate ?> <?= $timezone ?>\">");
    document.write("<input type=\"submit\" id=\'submit\' name=\"submit\" value=\"Submit\">");



</script>
<noscript>
    <article><h2>Please enable JavaScript to continue</h2><p>Sorry if this causes any inconveniences.</p></article>
</noscript>
</div>




<script src="assets/js/block.js"></script>

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
<script src='assets/js/main.js'></script>


</body>
</html>