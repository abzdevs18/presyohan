<?php

include '../config.php';
$sql="SELECT * FROM products";
$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
  <div class="table-responsive">
  <table id="users">
    <thead>
      <tr>
        <th>PRODUCT ID</th>
        <th>NAME</th>  
        <th>PRICE</th>
        <th>CATEGORY</th>
        <th>LOCATION</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($rows=mysqli_fetch_array($result)) { ?>
      <tr>
        <td><?php echo $rows['prod_id']; ?></td>
        <td><?php echo $rows['prod_name']; ?></td>
        <td><?php echo $rows['prod_price']; ?></td>
        <td><?php echo $rows['prod_category']; ?></td>
        <td style="width: 30rem;"><?php echo $rows['prod_img']; ?></td>
        <td><a class="button" href="edit-products.php?prod_id=<?php echo $rows['prod_id']; ?>">Edit</a></td>
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
