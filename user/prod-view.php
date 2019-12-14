<?php

include '../config.php';

session_start();
$prod_id = $_GET['prod_id'];
$user_id = $_GET['user_id'];
$id = $_SESSION['user_id'];
   /*$query = "SELECT * FROM users RIGHT JOIN products ON users.user_id = products.prod_id WHERE $prod_id = products.prod_id";*/
  $query = "SELECT * FROM products WHERE prod_id = '$prod_id'";


    $res = mysqli_query($con,$query);
    // echo mysqli_num_rows($res);


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/prod-style.css">
<link rel="stylesheet" type="text/css" href="../css/modal.css">
<link rel="stylesheet" type="text/css" href="../css/cat.css">
<link rel="stylesheet" type="text/css" href="../css/nav.css">
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
        <img style='width: 242px; height: 75%; display:block;' src='../store/".$rows['prod_img']."'/>
 
        <form method='post' action='addlist.php' style='position: relative;'>
        <input type='hidden' name='prod_id' value='".$rows['prod_id']."'>
        <input type='hidden' name='prod_name' value='".$rows['prod_name']."'>
        <input type='hidden' name='prod_price' value='".$rows['prod_price']." '>
        <input type='hidden' name='prod_category' value='".$rows['prod_category']." '>
        <input type='hidden' name='store_name' value='".$nm['store_name']." '>
        <input type='hidden' name='store_address' value='".$nm['store_address']."'>
        <input type='hidden' name='user_id' value='".$id." '>      
        <button type='submit' name='submit' style='width: 100%; background-color: #4CAF50;  color: white;    padding: 14px 20px; border: none; cursor: pointer; font-size: 14px; margin-top: .5rem;
'>Favorite</button>
        </form>

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
          <b>Store Address: </b><a target='_self' style='text-decoration:none;color:#4CAF50;' href='../".$nm['store_location']."' ><p style='margin-top:-2%;'>".$nm['store_address']." </p></a>
        </p>
      </div>

  ";
                          echo "</div>";


                        }

  ?>

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
