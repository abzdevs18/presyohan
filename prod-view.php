<?php

include 'config.php';


$prod_id = $_GET['prod_id'];
$user_id = $_GET['user_id'];
   /*$query = "SELECT * FROM users RIGHT JOIN products ON users.user_id = products.prod_id WHERE $prod_id = products.prod_id";*/
  $query = "SELECT * FROM products WHERE prod_id = '$prod_id'";


    $res = mysqli_query($con,$query);
    // echo mysqli_num_rows($res);


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="css/prod-style.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
<link rel="stylesheet" type="text/css" href="css/cat.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
</head>
<style>

</style>
<body>

<?php include 'header.php'; ?>

<div class="container">
      <?php
    while ($rows = mysqli_fetch_assoc($res)){

      $nm = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE user_id = '$user_id '"));
      # code...
      echo "
      <div class='items'>
      <div class='imahe'>
        <img style='width: 242px; height: 75%; display:block;' src='store/".$rows['prod_img']."'/>

        <button onclick='document.getElementById(\"modal-wrapper\").style.display=\"block\" ' style='width:242px; margin-top:1rem; display:block;'>Add To List</button>
      </div>
      <div class='desc'>
          <p style='font-weight:bold; text-decoration: none; font-size:30px; margin-top: -.2rem;' > 
            ".$rows['prod_name']."
          </p>
          <p style='margin-top:-4%;'>".$nm['store_name']." 
          </p>
       
          <span style='font-size:20px;'>₱ ".$rows['prod_price']."</span>

        <p><b>Description:</b>
        <p>".$rows['description']."</p>
        </p>
        <p>
          <b>Store Address: </b><a target='_self' style='text-decoration:none;color:#4CAF50;' href='".$nm['store_location']."' ><p style='margin-top:-2%;'>".$nm['store_address']." </p></a>
        </p>
      </div>

  ";
                          echo "</div>";


                        }

  ?>
</div>
<div id="modal-wrapper" class="modal">
  <form class="modal-content animate" action="login.php" method="post">    
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h1 style="text-align:center">Log-in to Continue</h1>
    </div>

    <div class="container">
      <input type="email" class="uname" placeholder="Email" name="email" required="" style="width: 90%; padding: 12px 20px; margin: 8px 26px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; font-size:16px;" >
      <input type="password" class="psw" placeholder="Enter Password" name="pw" required="" style="width: 90%; padding: 12px 20px; margin: 8px 26px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; font-size:16px;" >        
      <button type="submit" name="submit" style="width: 90%; margin-left: 4.3%;">Login</button>  
      <a href="register-page.php" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Don't have an Account? Click Here!</a>
    </div>
  </form>
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close
var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


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
