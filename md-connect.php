<!DOCTYPE html>
<html>
<head>
  <?php include("config.php");?>
  <style>
      article {
          text-align: center;
      }
      header {
        padding-bottom: 50px;

      }
      </style>

</head>
<body>
<?php include("assets/php/nav.php");?>
<main>

<script language="JavaScript" type="text/javascript">
setTimeout("location.href = 'index.php'",2000); 
</script>



<?php


$title = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'title')))));
$comment = str_replace("<html>", '&lthtml&gt', str_replace('\n', ' ', str_replace('<script>', '&ltscript&gt', str_replace('<style>', '&ltstyle&gt', str_replace("</html>", '&lt/html&gt',  str_replace('</script>', '&lt/script&gt', str_replace('<style>', '&lt/style&gt', str_replace('<article>', '&ltarticle&gt', str_replace('</article>', '&lt/article&gt', str_replace('<img', '&ltimg', filter_input(INPUT_POST, 'comment')))))))))));
$upload_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'date')))));
$display_time = str_replace("'", '’', str_replace('\n', ' ', str_replace('>', '&gt', str_replace('<', '&lt', filter_input(INPUT_POST, 'displaydate')))));

if (!empty($title)){
if (!empty($comment)){
    if (!empty($upload_time)){
        if (!empty($display_time)){
    include("config.php");
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO posts (title, comment, upload_time, display_time)
values ('$title','$comment','$upload_time','$display_time')";
if ($conn->query($sql)){
echo "<article><h2><div class='loader'></div><br>
Your post is uploading</h2></article>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "<article><h2>Sorry, there was an issue on our end. </h2></article>";
die();
}
}
else{
    echo "<article><h2>Sorry, there was an issue on our end. </h2></article>";
    die();
    }
    }

        
else{
echo "<article><h2>Sorry, there was an issue on our end. </h2></article>";
die();
}
}
?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- anypost 2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9222991553459658"
     data-ad-slot="9590689371"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
</main>
<footer>
  <div class="mdc-bottom-navigation">
        <nav class="mdc-bottom-navigation__list">
            <a style="text-decoration: none; padding-right: 40px;" href=".">
            <span class="mdc-bottom-navigation__list-item mdc-bottom-navigation__list-item--activated mdc-ripple-surface mdc-ripple-surface--primary"
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                <span class="material-icons mdc-bottom-navigation__list-item__icon">house</span>
                <span class="mdc-bottom-navigation__list-item__text">Home</span>
            </span></a>
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
<?php include ("json.php"); ?>
</body>
</html>
</html>