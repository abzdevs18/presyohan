<?php

include '../config.php';

  if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql functions
    // $query = "SELECT * FROM `products` WHERE CONCAT(`prod_id`,`prod_name`,`prod_category`) LIKE '%".$valueToSearch."%'";
    $query = "SELECT * FROM `products`,`users` WHERE products.user_id = users.user_id AND CONCAT (`prod_name`,`prod_category`) LIKE '%".$valueToSearch."%'";
    // $fetch_rowsect = mysqli_query($con,$query);
    // $query = "SELECT * FROM users AS u RIGHT JOIN products ON u.user_id = products.user_id LIKE '%".$valueToSearch."%'";
    $fetch_rowsect = mysqli_query($con,$query);

    
}
 else {
    $query = "SELECT * FROM users RIGHT JOIN products ON users.user_id = products.user_id WHERE prod_category = 'Mens Apparel'";
    $fetch_rowsect = filterTable($query);
}
// function to connect and execute the query
function filterTable($query)
{
include '../config.php';
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}
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
  
  <div class="search">
    <form  action="../products.php" method="post">
    <input type="text" autofocus name="valueToSearch" placeholder="Search...">
    <input type="submit" name="search" value="Search">
    </form>
  </div>
  
  <div class="grid-container">
 
    <?php
    while ($rows = mysqli_fetch_array($fetch_rowsect)){
      # code...

      echo "
      <div class='item'>
        <img style='width: 121px; height:125px;' src='../store/".$rows['prod_img']."'/>
        <h5>
          <a style='font-size: 15px; text-decoration: none; color: #337ab7;' href='../prod-view.php?prod_id=".$rows['prod_id']."&user_id=".$rows['user_id']."'>".$rows['prod_name']."</a>
        </h5>
        <p style='margin-top:-5%;'>
          <span style='color: red; '>₱ ".$rows['prod_price']."</span>
        </p>
        <button onclick='document.getElementById(\"modal-wrapper\").style.display=\"block\" ' style='width:200px;'>Favorite</button>

      ";
      
                          echo "</div>";
    }

  ?>
  </div>
</div>
<div id="modal-wrapper" class="modal">
  <form class="modal-content animate" action="../login.php" method="post">    
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h1 style="text-align:center">Log-in to Continue</h1>
    </div>

    <div class="container">
      <input type="email" class="uname" placeholder="Email" name="email" required="" style="width: 90%; padding: 12px 20px; margin: 8px 26px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; font-size:16px;" >
      <input type="password" class="psw" placeholder="Enter Password" name="pw" required="" style="width: 90%; padding: 12px 20px; margin: 8px 26px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; font-size:16px;" >        
       <button type="submit" name="submit" style="width: 90%; margin-left: 4.3%;">Login</button>   
      <a href="../register-page.php" style="text-decoration:none; float:right; margin:26px 30px;">Don't have an Account? Click Here!</a>
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
