
<?php
session_start();

include '../../config.php';
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
    $query = "SELECT * FROM users RIGHT JOIN products ON users.user_id = products.user_id WHERE prod_category = 'Health and Personal Care'";
    $fetch_rowsect = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
include '../../config.php';
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="../../css/prod-style.css">
<link rel="stylesheet" type="text/css" href="../../css/cat.css">
<link rel="stylesheet" type="text/css" href="../../css/nav.css">


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


<?php include 'header.php'; ?>

<div class="container">
  
  <div class="search">
    <form  action="../products.php" method="post">
    <input type="text" name="valueToSearch" placeholder="Search...">
    <input type="submit" name="search" value="Search">
    </form>
  </div>
  
  <div class="grid-container">
      
    <?php
    while ($rows = mysqli_fetch_array($fetch_rowsect)){
      # code...

      echo "
      <div class='item'>
        <img style='width: 121px; height:125px;' src='../../store/".$rows['prod_img']."'/>
        <h5>
          <a style='font-size: 15px; text-decoration: none; color: #337ab7;' href='../prod-view.php?prod_id=".$rows['prod_id']."&user_id=".$rows['user_id']."'>".$rows['prod_name']."</a>
        </h5>
        <p style='margin-top:-5%;'>
          <span style='color: red; '>₱ ".$rows['prod_price']."</span>
        </p>

      ";
      
                          
  
  ?>
        <form method="post" action="addlist.php" style="position: relative;">
        <input type="hidden" name="prod_id" value="<?php echo $rows['prod_id']?>">
        <input type="hidden" name="prod_name" value="<?php echo $rows['prod_name']?>">
        <input type="hidden" name="prod_price" value="<?php echo $rows['prod_price'] ?>">
        <input type="hidden" name="prod_category" value="<?php echo $rows['prod_category'] ?>">
        <input type="hidden" name="store_name" value="<?php echo $rows['store_name'] ?>">
        <input type="hidden" name="store_address" value="<?php echo $rows['store_address'] ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id?>">      
        <button type="submit" name="submit" value="" >Favorite</button>
        </form>


</div>
<?php
    }
      echo "</div>";
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
