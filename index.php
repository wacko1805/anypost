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
<input type="checkbox" name="toggle" id="toggle" />
<label for="toggle"></label>
<div class="message"><h1> 
<form  action="connect.php"   id="form" accept-charset="utf-8"  method="post">
    <input type="text" name="title" id="title"  placeholder="Title"  required autocomplete="off"> <br>
      <textarea  maxlength="500" rows="7"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      <select id="topic" name="topic">
      <option selected disabled>Choose Topic (optional)</option>
      <?php include("select-posts.php");?>
  </select>
      <div  class="submitp"><p><input type="submit" id='submit'   name="submit" value="Submit"><i>By submitting,<br> you agree to the <br><a href="./t+c.php#main">Terms and conditions</a></i></p></div>
    </div>
</form>
</h2>
  
<script>
  $(document).ready(function() {
    $("body").prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1001; display: none;"></div>');
    $("body").prepend("<div id='PleaseWait' class='loading' style='display: none;'><div class='box'><ul><li></li><li></li><li></li><li></li><li></li></ul><ul><li></li><li></li><li></li><li></li><li></li></ul><ul><li></li><li></li><li></li><li></li><li></li></ul></div> <h1 class='loading2'>Loading...</h1></div>");
});

$('#form').submit(function() {
    var pass = true;
    //some validations

    if(pass == false){
        return false;
    }
    $("#overlay, #PleaseWait").show();

    return true;
});
</script>

</div>

<?php include("posts.php");?>
<br>

<br>
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
        echo "</p></article></article><br><br>";
    }
}
?>
</main>
<a onclick="toggle()" class="toggle-down float" >
<input type="checkbox" name="toggle" id="toggle" />
<label for="toggle">
<i  class="fas fa-plus"></i></lable>
</a>

<script src="assets/js/display.js"></script>
</body>
</html>