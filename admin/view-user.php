<?php

include '../config.php';
$sql="SELECT * FROM users WHERE type ='user'";
$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
  <div class="table-responsive">
    <table id="users">
    <thead>
      <tr>
        <th>USER ID</th>
        <th>FIRST NAME</th>  
        <th>LAST NAME</th>
        <th>BARANGAY</th>
        <th>CITY</th>
        <th>ZIP CODE</th>
        <th>E-MAIL</th>
        <th>PASSWORD</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($rows=mysqli_fetch_array($result)) { ?>
      <tr>
        <td><?php echo $rows['user_id']; ?></td>
        <td><?php echo $rows['fname']; ?></td>
        <td><?php echo $rows['lname']; ?></td>
        <td><?php echo $rows['brgy']; ?></td>
        <td><?php echo $rows['city']; ?></td>
        <td><?php echo $rows['zip']; ?></td>
        <td><?php echo $rows['email']; ?></td>        
        <td><?php echo $rows['pw']; ?></td>
        <td><a class="button" href="edit-user.php?user_id=<?php echo $rows['user_id']; ?>">Edit</a></td>
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
