<?php
session_start();

include 'update.php';
$email = $_SESSION['email'];
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/prod-style.css">
<link rel="stylesheet" type="text/css" href="../css/modal.css">
<script src="../include/jquery.min.js"></script>

</head>
<body>


<?php include 'header.php'; ?>

<div class="container">
  
  <div class="grid-container">
  <?php
    $id = $_SESSION['user_id'];

    $sql = "SELECT * FROM products WHERE user_id = '$id'";
    $der = mysqli_query($con, $sql);

    while ($rows = mysqli_fetch_array($der)){ 
      # code...
      echo '<div>';
                          echo '<p><h3>'.$rows['prod_name'].'</h3></p>';
                          echo '<img style="width: 121px; height:125px;" src="'.$rows['prod_img'].'"/>';
                          echo '<p><strong>Product Price</strong>: '.$rows['prod_price'].'</p>';
                          echo '<p><strong>Category</strong>: '.$rows['prod_category'].'</p>';/*
                           echo '<a href="#edit='.$rows['prod_id'].'"data-toggle="modal">
                           <button onclick="document.getElementById(\'modal-wrapper\').style.display=\'block\' " style="width:200px;" name="edit" id="id">Update</button></a>';*/?>

                           <button style="    width: 90%;  margin-bottom: .5rem;" onclick="idN(<?php echo $rows['prod_id']; ?>)">Update</button>

                           <?php

                            echo '</div>';
                          ?>
<?php
  }

?>
  </div>
</div>

<!-- MOdal Div -->

<div id="modal-wrapper" class="modal" style="display: none;">
  <!-- Show Modal in -->
</div>

<!-- Mdal End -->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function idN(id){
  $('.modal').show();
  var idN = id;
  $.ajax({
    url: 'modal_prod.php',
    type: 'POST',
    data: {
      id:idN
    },
    success:function(data){
      $('.modal').html(data);
    },
    error:function(){
      console.log("kl");
    }
  });
}

</script>

</body>
</html>
