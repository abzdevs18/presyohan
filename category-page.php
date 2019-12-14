<?php

include 'config.php';

  if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `products` WHERE CONCAT(`prod_id`,`prod_name`,`prod_category`) LIKE '%".$valueToSearch."%'";
    $fetch_rowsect = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `products`";
    $fetch_rowsect = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "root", "presyohan");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="css/prod-style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a class="nohover" href="index.php">
    <b style="color: #43b6e3;">P</b>
    <b style="color: #a1479f;">R</b>
    <b style="color: #e54271;">E</b>
    <b style="color: #b7d655;">S</b>
    <b style="color: #43b6e3;">Y</b>
    <b style="color: #a1479f;">O</b>
    <b style="color: #e54271;">H</b>
    <b style="color: #b7d655;">A</b>
    <b style="color: #43b6e3;">N</b></a>    
   <a  href="products.php" >Products</a>
   <a class="active" href="category-page.php" >Categories</a>
  <a href="login-page.php" >Login</a>
  <a href="register-page.php">Register</a>  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fas fa-bars"></i>
  </a>
</div>

<div class="container">
  <div class="search">
    <form  action="category-page.php" method="post">
    <input type="text" name="valueToSearch" placeholder="Search...">
    <input type="submit" name="search" value="Search">
    </form>
  </div>
  
  <div class="grid-container">
      <?php
    while ($rows = mysqli_fetch_array($fetch_rowsect)): 
      # code...
      echo '<div>';
                          echo '<p><h3>'.$rows['prod_name'].'</h3></p>';
                          echo '<img style="width: 121px; height:125px;" src="store/'.$rows['prod_img'].'"/>';
                          echo '<p><strong>Product Price</strong>: '.$rows['prod_price'].'</p>';
                          echo '<p><strong>Category</strong>: '.$rows['prod_category'].'</p>';
                          

                      
                          echo '</div>';
                        endwhile;

  ?>
  </div>
</div>


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

  </center>
</div>

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
