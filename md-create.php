<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>
<style>
  textarea {
    height: 300px
  }
  </style>
        
</head>
<body>
<?php include("assets/php/nav.php");?>
<div id="main">

<main>
<form   action="md-connect.php" accept-charset="utf-8"  method="post">
<input  style="display:none;" type="text" name="title" id="title"  placeholder="Title" value=" "  required autocomplete="off"> <br>
    <textarea class="mdhtmlform-md">## add markdown to anypost!</textarea>
      <textarea class="mdhtmlform-html"   maxlength="500" rows="16" cols="80"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" style="display: none;" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      <div class="mdhtmlform-html"></div>
      <div  class="submitp"><p><input type="submit" id='submit'   name="submit" value="Submit"><i>By submitting,<br> you agree to the <br><a href="t+c.php#main">Terms and conditions</a></i></p></div>
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

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <!-- mdhtmlform Dependencies -->
        <script src="https://www.justinmccandless.com/demos/markdown-html-form/examples/simple/js/vendor/showdown.js"></script> <!-- Include Showdown before mdhtmlform! -->
        <script src="https://www.justinmccandless.com/demos/markdown-html-form/examples/simple/js/vendor/to-markdown.js"></script> <!-- Include to-markdown before mdhtmlform -->
        <script src="https://www.justinmccandless.com/demos/markdown-html-form/examples/simple/js/mdhtmlform.js"></script> <!-- The main mdhtmlform file -->
        <!-- end mdhtmlform Dependencies -->
        
        <script src="https://www.justinmccandless.com/demos/markdown-html-form/examples/simple/js/example.js"></script> <!-- The js for this example -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>