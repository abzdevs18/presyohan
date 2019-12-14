<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header("location:../index.php");
	session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title></title>

  <!-- CSS  -->
  <link href="../css/font.css" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
body, html{
	height:100%;
}
  

.bg { 
  /* The image used */
  background-image: url("../bgs.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>
<body>
  <!-- Preloading Section Start -->
<div class="preloader-background bg">
	<center>
		<div class="btn-floating btn-larges pulse"><img src="../logo-icon.png" alt="Paris" width="150px" height="150px"></div>
		<p style="font-size:30px;font-weight:bold;">
			<span style="color:#f1152f;">P</span>
			<span style="color:#fc5b2d;">R</span>
			<span style="color:#2b5794;">E</span>
			<span style="color:#007386;">S</span>
			<span style="color:#8e2991;">Y</span>
			<span style="color:#d9177a;">O</span>
			<span style="color:#f1152f;">H</span>
			<span style="color:#fc5b2d;">A</span>
			<span style="color:#2b5794;">N</span>
		</p>
	</center>
</div>

<div class="main">
<div class="navbar-fixed">
<nav style="background-color:#241a3d;">
<div class="nav-wrapper">
		<a href="index.php" class="left"><i style="color:#ff5a2a;" class="material-icons right">arrow_back</i></a>
 		<strong style="font-size:20px;padding-left:5px;color:#ff5a2a;">Women's Shoes</strong>
		<a class="dropdown-trigger right" href="#!" data-target="dropdown1">
		<i style="color:#ff5a2a;padding-right:10px;" class="material-icons">more_vert</i></a>
</div>
</nav>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a style="color:#fff;background-color:#241a3d;" href="favorites.php">Favorites</a></li>
  <li class="divider"></li>
  <li><a style="color:#fff;background-color:#241a3d;" class="modal-trigger" href="logout.php">Logout</a></li>
</ul>
</div>

<div class="container">
<br>
<nav style="background-color:#241a3d;">
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="myInput" onkeyup="myFunction()" type="search" placeholder="Seach Items..." required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
</nav>
<br>
<ul id="myUL">
<?php
include 'db_connect.php';
$sql="SELECT * FROM products WHERE prod_category = 'Womens Shoes'";
$result=mysql_query($sql);
while($rows=mysql_fetch_array($result)){ ?>
<li><div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img style="height:350px;" class="activator" src="../../store/<?php echo $rows['prod_img']; ?>" >
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><strong><a><?php echo $rows['prod_name']; ?> - <?php echo $rows['prod_price']; ?></a></strong>
	  <i class="material-icons right">more_vert</i></span>
      <form action="add_favorite.php" method="post">
	  <input name="prod_name" type="text"  value="<?php echo $rows['prod_name']; ?>" hidden>
	  <input name="prod_price" type="text"  value="<?php echo $rows['prod_price']; ?>" hidden>
	  <input name="prod_category" type="text"  value="<?php echo $rows['prod_category']; ?>" hidden>
	  <input name="store_name" type="text"  value="<?php if($_SESSION["store_name"]) { echo $_SESSION["store_name"];} ?>" hidden>
	  <input name="store_address" type="text"  value="<?php if($_SESSION["store_address"]) { echo $_SESSION["store_address"];} ?>" hidden>
	  <input name="user_id" type="text"  value="<?php if($_SESSION["user_id"]) { echo $_SESSION["user_id"];} ?>" hidden>
      <p><button class="waves-effect waves-light btn" type="submit" name="submit" value="Submit" style="background-color:#241a3d;">Favorite</button></p>
	  </form>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php echo $rows['prod_name']; ?></span>
      <p><?php echo $rows['description']; ?></p>
    </div>
</div></li>
<?php } mysql_close();?>
</ul>
</div>
</div>

 <!-- Modal Structure -->
  <div id="login" class="modal">
    <div class="modal-content">
      <center><h6><strong>Login to your Account</strong></h6></center>
	<form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
	  <center><a href="#!" style="background-color:#241a3d;" class="modal-action modal-close waves-effect btn"><strong>Login</strong></a></center>
    </form><br>
	<center>or Create Account <a href="#signup" class="modal-trigger">here</a></center>
    </div>
  </div>
  
  <div id="signup" class="modal">
    <div class="modal-content">
      <center><h6><strong>Create an Account</strong></h6></center>
	<form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">First Name</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Barangay</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">City</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Zipcode</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <input id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
	  <center><a href="#!" style="background-color:#241a3d;" class="modal-action modal-close waves-effect btn"><strong>Signup</strong></a></center>
    </form>
    </div>
  </div>

  <!--  Scripts-->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').delay(2400).fadeOut(1200);
	
	$('.preloader-wrapper')
		.delay(2400)
		.fadeOut();
});
$(".dropdown-trigger").dropdown();
</script>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<script>
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>
</body>
</html>

