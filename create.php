<!DOCTYPE html>
<html lang="en" class="mdc-typography">
<head>
  <meta charset="UTF-8">
  <title>anypost app</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> 
<link rel='stylesheet' href='https://unpkg.com/material-components-web@latest/dist/material-components-web.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/solid.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }
  </style>
</head>
<body>
<header>
  <h3>anypost</h3>
  <a href="/settings.php">
  <div class="icon">
  <i class="uil uil-setting"></i>
</div></a>
</header>



<main>
<form  action="upload.php"  method="post">
    <input type="text" name="title" placeholder="Title" required autocomplete="off"> <br>

      <textarea id="txtWords" maxlength="500" rows="10" cols="60" type="text" id="comment" name="comment" placeholder="Comment" required autocomplete="off" ></textarea> <br>

      <input type="submit" id='theButton'   name="submit" value="Submit">
      </div>

</form>
</main>

<footer>
  <div class="mdc-bottom-navigation">
        <nav class="mdc-bottom-navigation__list">
            <a style="text-decoration: none; padding-right: 40px;" href="/">
            <span
            class="mdc-bottom-navigation__list-item mdc-ripple-surface mdc-ripple-surface--primary"  
                data-mdc-auto-init="MDCRipple" data-mdc-ripple-is-unbounded>
                <span class="material-icons mdc-bottom-navigation__list-item__icon">house</span>
                <span class="mdc-bottom-navigation__list-item__text">Home</span>
            </span></a>

            <a style="text-decoration: none; padding-left: 40px;" href="/create.php">

            
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