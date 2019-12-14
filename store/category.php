<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a class="nohover" href="store-index.php">
    <b style="color: #43b6e3;">P</b>
    <b style="color: #a1479f;">R</b>
    <b style="color: #e54271;">E</b>
    <b style="color: #b7d655;">S</b>
    <b style="color: #43b6e3;">Y</b>
    <b style="color: #a1479f;">O</b>
    <b style="color: #e54271;">H</b>
    <b style="color: #b7d655;">A</b>
    <b style="color: #43b6e3;">N</b></a>    
  <a href="products.php" >Products</a>
  <a class="active" href="category.php">Categories</a> 
  <a href="viewlist.php">List</a>  
  <a href="logout.php" >Logout</a> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fas fa-bars"></i>
  </a>
</div>

<div class="container">
  <center><!-- 
   product code here . . .  -->
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
