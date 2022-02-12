<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>
  <title>anypost</title>
  <script>
    $("form").submit(function(event) {

var hcaptchaVal = $('[name=h-captcha-response]').value;
if (hcaptchaVal === " ") {
   event.preventDefault();
   alert("Please complete the hCaptcha");
}
});
</script>
</head>
<body>
    
<?php include("assets/php/nav.php");?>
<main>
    
<div id="create" class="overlay">
	<div class="popup w3-animate-top">
		<div class="content ">
        <form  action="connect.php"   id="form" accept-charset="utf-8"  method="post">
        <div class="h-captcha" id="captcha"  data-sitekey="d3b475c7-c72b-4ccf-be51-b63988c0fb57">
    <input type="text" name="title" id="title"  placeholder="Title"  required autocomplete="off"> <br>
      <textarea  maxlength="500" rows="7"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" ></textarea> <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      <select id="topic" name="topic">
      <option id="no topic">No Topic</option>
      <?php include("select-posts.php");?>
  </select>
      <div  class="submitp"><p style="margin-bottom:0;"><input type="submit" id='submit' onClick="return empty()"   name="submit" value="Submit"><i>By submitting,<br> you agree to the <br><a href="/t+c.php">Terms and conditions</a></i></p></div>
    </div>
</div>
</div>
</form>


<script src="/assets/js/disable.js"></script>
<script>
  $(document).ready(function() {
    $("body").prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1001; display: none;"></div>');
    $("body").prepend("<div id='PleaseWait' class='loading' style='display: none;'><div class='box'><ul><li></li><li></li><li></li><li></li><li></li></ul><ul><li></li><li></li><li></li><li></li><li></li></ul><ul><li></li><li></li><li></li><li></li><li></li></ul></div> <h1 class='loading2'>Loading...</h1></div></div>");
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
	</div>
</div>


<?php include("posts.php");
?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9222991553459658"
     crossorigin="anonymous"></script>
<!-- Anypost display -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9222991553459658"
     data-ad-slot="3075986874"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
        <script>
   let attribute = document.getElementsByClassName('topics-hide');
   for (let i = 0; i < attribute.length; i++) {
      let impDiv = attribute[i];
      let value = impDiv.innerHTML.trim();
      if (value == 'No Topic' || value == '') {
         impDiv.style.display = 'none';
      }
   }
</script>
</main>
<a onclick="toggle()" class="toggle-down float" >
<label for="toggle">
<i  class="fas fa-plus"></i></lable>
</a>
<script src="assets/js/display.js"></script>
<?php include("assets/php/footer.php");?>

</body>
</html>