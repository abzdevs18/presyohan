<div class="topnav" id="myTopnav">
  <a class="nohover" href="../index.php">
    <b style="color: #43b6e3;">P</b>
    <b style="color: #a1479f;">R</b>
    <b style="color: #e54271;">E</b>
    <b style="color: #b7d655;">S</b>
    <b style="color: #43b6e3;">Y</b>
    <b style="color: #a1479f;">O</b>
    <b style="color: #e54271;">H</b>
    <b style="color: #b7d655;">A</b>
    <b style="color: #43b6e3;">N</b></a>    
   <a href="../products.php" >Products</a>
   <div class="dropdown">
    <button class="dropbtn">Categories 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cat1.php">Mens Apparel</a>
      <a href="cat2.php">Appliances</a>
      <a href="cat3.php">Mens Shoes</a>
      <a href="cat4.php">Personal Care</a>
      <a href="cat5.php">Womens Shoes</a>
      <a href="cat6.php">Womens Apparel</a>
    </div>
  </div> 
  <a href="../register-page.php" style="float: right;" >Register</a>  
  <a href="../login-page.php" style="float: right;" >Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fas fa-bars"></i>
  </a>
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
