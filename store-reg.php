<?php
  session_start();
  $_SESSION['message'] = '';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="css/style-reg.css">
</head>
<body>


<?php include 'header.php'; ?>

<div class="user">
    <header class="user__header">
        <h1 class="user__title">Register</h1>     
            <?php $_SESSION['message'] ?>    
    </header>
    
    <form class="form" action="store-act.php" method="post" enctype="multipart/form-data">
        <div class="form__group">
            <input type="text" placeholder="Store Name" class="form__input" name="store_name" />
        </div>

        <div class="form__group">
            <input type="text" placeholder="Store Address" class="form__input" name="store_address" />
        </div>
        
        <div class="form__group">
          <div class="upload-btn-wrapper">
            <label for="file-upload" class="custom-file-upload">
              Store Location  <i class="fas fa-cloud-upload-alt"></i> 
            </label>
              <input id="file-upload" accept="store/**" type="file" name="store_location" />
            
            <!-- <input type="text" placeholder="Store Location" class="form__input" name="store_location" /> -->
          </div>
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
          <a href="register-page.php" style="text-decoration: none; color: white; font-size: 10px;">SIGN UP AS A USER, CLICK HERE!</a>
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
