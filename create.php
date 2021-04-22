<!DOCTYPE html>
<head>
<?php include("config.php"); ?>
  <title><?php echo $maintitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="style.css">
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://raw.githubusercontent.com/mrameezraja/char-replacer/master/jquery-1.9.1.js"></script>
  <script src="replace1.js"></script>
  <script> $(function () { $("#replace").charReplacer({ replaceChar: ["<", ">", "\n"], replaceWith: ["&lt;", "&gt;", " "] });}) </script>
  <script> $(function () { $("#replace2").charReplacer({ replaceChar: ["<", ">", "\n"], replaceWith: ["&lt;", "&gt;", " "] });})</script>
</head>
<body>
<header>
  <h3><?php echo $maintitle ?></h3>
</header>
<main>
<?php $date = date('Y-m-d\TH:i:s:a'); ?>

<form onsubmit="return validate()"  action="connect.php"  method="post">
    <input type="text" name="title" id="replace"  placeholder="Title" required autocomplete="off"> <br>
      <textarea  maxlength="500" rows="10" cols="60" type="text" id="replace2" name="comment" placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="datetime-local" name="date" value="<?= $date ?>">
      <input type="submit" id='theButton'   name="submit" value="Submit">
      </div>
</form>
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
</body>
</html>
</html>