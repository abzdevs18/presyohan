<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="css/style-reg.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
</head>
<body>


<?php include 'header.php'; ?>

<div class="user">
    <header class="user__header">
        <h1 class="user__title">Register</h1>        
    </header>
    
    <form class="form" action="register.php" method="post">
        <div class="form__group">
            <input type="text" placeholder="First Name" class="form__input" name="fname" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Last Name" class="form__input" name="lname" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Barangay" class="form__input" name="brgy" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="City" class="form__input" name="city" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Zip code" class="form__input" name="zip" />
        </div>
        
        <div class="form__group">
            <input type="email" placeholder="E-mail" class="form__input" name="email" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="pw" />
        </div>
        
        

        <button class="btn" type="submit" name="submit">Register</button>
        
    </form>
    <div class="store">         
          <a href="store-reg.php" style="text-decoration: none; color: black;font-size: 10px;">SIGN UP AS A STORE, CLICK HERE!</a>
        </div>
</div>
  
  

    <script  src="js/index.js"></script>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
