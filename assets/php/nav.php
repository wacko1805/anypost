<div id="top"></div>
<div id="header"><?php echo $maintitle ?><span id="span">.</span></div>
      <header class="header">
        <a href="../" class="logo">anypost</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a href=".">Home</a></li>
          <li><a href="/topics.php">Topics</a></li>
          <li><a href="https://github.com/wacko1805/anypost">Source Code</a></li>
          <li class="settingsicon"><a onclick="settings()" ><i class="fas fa-cog"></i></a></li>

        </ul>
      </header>
</div>

<script>

function settings() {
  var x = document.getElementById("settings");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<?php
  if (!isset($_COOKIE["colour"])) {
      $colour = "#9088d4";
  }
  else {  $colour =  $_COOKIE["colour"];  }
?>
<div id="settings">
  <div class="settings">
    <div class="sett-bod">
  <a onclick="settings()"><i class="fas fa-times"></i></a>
  <h1>Settings</h1>
  <form>
    <label>Pick a accent colour: (Beta)</label><br>
 <input type="color" value="<?php echo $colour;?>" id="nameBox" name='usrname'><br>
 <input type="button" value="Apply" id="submit" onclick="putCookie(document.getElementsByTagName('form'));">
 <input type="button" value="reset" id="submit-reset" onclick="delCookie()">

</form>

<form>
<label for="font">Choose a font:</label><br><br>
<select id="font" name="usrname">
  <option style="font-family: 'Poppins', sans-serif;" value="'Poppins', sans-serif">Poppins</option>
  <option style="font-family: 'Source Code Pro', monospace;" value="'Source Code Pro', monospace">Source Code</option>
  <option style="font-family: 'Lora', serif;" value="'Lora', serif">Lora</option>
  <option style="font-family: 'Quicksand', sans-serif;" value="'Quicksand', sans-serif">Quicksand</option>
  <option style="font-family: 'Roboto Slab', serif;" value="'Roboto Slab', serif">Roboto Slab</option>
  <option style="font-family: 'Rubik', sans-serif;" value="'Rubik', sans-serif">Rubik</option>
  <option style="font-family: 'Ubuntu', sans-serif;" value="'Ubuntu', sans-serif">Ubuntu</option>

</select> 
<input type="button" value="Apply" id="submit" onclick="putCookieFont(document.getElementsByTagName('form'));">

</form>
</div>
</div>
</div>
<?php
if(isset($_GET['link'])) {
    $link = $_GET['link'];

    echo "<div class='center'><div id='leaving' class='leaving'>
    <h1>Warning:</h1>
    <br>
    <p>You are leaving Anypost. The link you are proceeding too may not be secure. Please proceed with caution </p>
    <p><b>Link: </b> $link</p>
    <a href='$link'><button>Proceed to link</button></a> <a onClick='javascript:history.go(-1)'><button>Go back</button></a>
    </div></div>";
}
?>