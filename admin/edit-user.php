<?php

include '../config.php';

$id = $_REQUEST['user_id'];
$sql = mysqli_query($con, "SELECT * FROM users WHERE user_id='$id'");

$result = mysqli_fetch_array($sql);
if (!$result) 
		{
		die("Error: Data not found..");
		}	
				$fname= $result['fname'];					
				$lname=$result['lname'];					
				$brgy=$result['brgy'];					
				$city=$result['city'];					
				$zip=$result['zip'];				
				$email=$result['email'];			
				$pw=$result['pw'];	
if(isset($_POST['save']))
{
	$newName = $_POST['fname'];
	$newLastname = $_POST['lname'];				
	$newbrgy= $_POST['brgy'];					
	$newcity= $_POST['city'];					
	$newzip= $_POST['zip'];				
	$newemail= $_POST['email'];			
	$newpw= $_POST['pw'];	

	mysqli_query($con, "UPDATE users SET fname ='$newName', lname ='$newLastname',  brgy ='$newbrgy', city ='$newcity', zip ='$newzip', email ='$newemail', pw ='$newpw' WHERE user_id = '$id'") or die(mysql_error());


  echo "<script>alert('User Updated'); window.location = 'view-user.php';</script>";
}	
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/style-reg.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="user">
    <header class="user__header">
        <h1 class="user__title">Update User</h1>        
    </header>
    
    <form class="form" action="" method="post">
        <div class="form__group">
            <input type="text" name="fname" placeholder="First Name" class="form__input" value="<?php echo $fname ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="lname" placeholder="Last Name" class="form__input" value="<?php echo $lname ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="brgy" placeholder="Barangay" class="form__input" value="<?php echo $brgy ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="city" placeholder="City" class="form__input" value="<?php echo $city ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="zip" placeholder="Zip code" class="form__input" value="<?php echo $zip ?>" />
        </div>
        
        <div class="form__group">
            <input type="email" name="email" placeholder="E-mail" class="form__input" value="<?php echo $email ?>" />
        </div>
        
        <div class="form__group">
            <input type="password" name="pw" placeholder="Password" class="form__input" value="<?php echo $pw ?>" />
        </div>
        
        

        <button class="btn" type="submit" name="save">Update</button>
        
    </form>
    
</div>
  
  

    <script  src="js/index.js"></script>


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
