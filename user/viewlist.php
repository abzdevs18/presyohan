<?php

session_start();
$user_id = $_SESSION['user_id'];
$user_mail = $_SESSION['usermail'];


include '../config.php';
$sql="SELECT * FROM list WHERE user_id = '$user_id' ORDER BY list_id DESC";
$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/nav.css">
</head>
<body>



<?php include 'header.php'; ?>

<div class="container">
  
  <div class="table-responsive">
    <table class="list">
    <thead>
      <tr>
        <th>PRODUCT NAME</th>  
        <th>PRODUCT PRICE</th>
        <th>PRODUCT CATEGORY</th>
        <th>STORE NAME</th>
        <th>STORE ADDRESS</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($rows=mysqli_fetch_array($result)) { ?>
      <tr>
        <td><?php echo $rows['prod_name']; ?></td>
        <td><i style="margin-right: 5px;" class="fa">&#8369;</i><?php echo $rows['prod_price']; ?></td>
        <td><?php echo $rows['prod_category']; ?></td>
         <td><?php echo $rows['store_name']; ?></td>
        <td><?php echo $rows['store_address']; ?></td>        
      </tr>
      <?php
      }

        mysqli_close($con);
      ?>


    </tbody>
  </table>
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
