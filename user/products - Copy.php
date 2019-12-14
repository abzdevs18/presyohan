
<?php
session_start();

include '../config.php';
include 'addlist.php';

$user_mail = $_SESSION['usermail'];
$user_id = $_SESSION['user_id'];



  if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `products`,`users` WHERE products.user_id = users.user_id AND CONCAT (`prod_name`,`prod_category`) LIKE '%".$valueToSearch."%'";
    $fetch_rowsect = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM users RIGHT JOIN products ON users.user_id = products.user_id";
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
<link rel="stylesheet" href="../css/fawesome/all.css">
<link rel="stylesheet" type="text/css" href="../css/prod-style.css">

<style type="text/css">
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 50%;
  font-size:14px;
}
button:hover {
    opacity: 0.8;
</style>
</head>
<body>

<div class="topnav" id="myTopnav" style="position: fixed; width: 100%;">
  <a class="nohover" href="user-index.php">
    <b style="color: #43b6e3;">P</b>
    <b style="color: #a1479f;">R</b>
    <b style="color: #e54271;">E</b>
    <b style="color: #b7d655;">S</b>
    <b style="color: #43b6e3;">Y</b>
    <b style="color: #a1479f;">O</b>
    <b style="color: #e54271;">H</b>
    <b style="color: #b7d655;">A</b>
    <b style="color: #43b6e3;">N</b></a>    
  <a class="active" href="products.php" >Products</a>
  <a href="category.php">Categories</a>
  <a href="viewlist.php">List</a>  
  <a href="logout.php" >Logout</a>  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fas fa-bars"></i>
  </a>
  <span style="color: white; float: right; padding: 15px;"><b><?php echo $user_id;?></b></span>
</div>

<div class="container">
  <div class="search">
    <form  action="products.php" method="post">
    <input type="text" name="valueToSearch" placeholder="Search...">
    <input type="submit" name="search" value="Search">
    </form>
  </div>
  
  <div class="grid-container">
      <?php
    while ($rows = mysqli_fetch_array($fetch_rowsect)){ 
   
      echo '<div>'; 
        
        echo '<p><h3>'.$rows['prod_name'].'</h3></p>';
        echo '<img style="width: 121px; height:125px;" src="../store/'.$rows['prod_img'].'"/>';
        echo '<p><strong>Product Price</strong>: '.$rows['prod_price'].'</p>';
        echo '<p><strong>Category</strong>: '.$rows['prod_category'].'</p>';
        echo '<p><strong>Store Name</strong>: '.$rows['store_name'].'</p>';
        echo '<p><strong>Store Location</strong>:<a target="_self" style="text-decoration:none;color:#4CAF50;" href="../'.$rows['store_location'].'" >'.$rows['store_address'].'</a></p>';
        // echo "<script>alert('Added to List'); window.location = 'products.php';</script>";
        //echo '<button onclick="document.getElementById(\'modal-wrapper\').style.display=\'block\' " style="width:200px;">Add To List</button>';

?>
        <form method="post" action="addlist.php" style="position: relative;">
        <input type="hidden" name="prod_id" value="<?php echo $rows['prod_id']?>">
        <input type="hidden" name="prod_name" value="<?php echo $rows['prod_name']?>">
        <input type="hidden" name="prod_price" value="<?php echo $rows['prod_price'] ?>">
        <input type="hidden" name="prod_category" value="<?php echo $rows['prod_category'] ?>">
        <input type="hidden" name="store_address" value="<?php echo $rows['store_address'] ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id?>">      
        <button type="submit" name="submit" value="" >Add To List</button>
        </form>


</div>
<?php
      
    }
  ?>
  <!--
    <input type="hidden" name="hidden_name" value="<?php //echo $row["prod_name"]; ?>" />

    <input type="hidden" name="hidden_price" value="<?php //echo $row["prod_price"]; ?>" />
  -->

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
