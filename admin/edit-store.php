<?php

include '../config.php';
$id = $_REQUEST['user_id'];
$sql = mysqli_query($con, "SELECT * FROM users WHERE user_id='$id'");

$result = mysqli_fetch_array($sql);
if (!$result) 
    {
    die("Error: Data not found..");
    } 
        $store_name= $result['store_name'];         
        $store_location=$result['store_location'];          
        $store_address=$result['store_address'];         
        $email=$result['email'];      
        $pw=$result['pw'];  
if(isset($_POST['save']))
{
  $newName = $_POST['store_name'];
  $newLastname = $_POST['store_location'];       
  $newstore_address= $_POST['store_address'];     
  $newemail= $_POST['email'];     
  $newpw= $_POST['pw']; 

  mysqli_query($con, "UPDATE users SET store_name ='$newName', store_location ='$newLastname',  store_address ='$newstore_address', email ='$newemail', pw ='$newpw' WHERE user_id = '$id'") or die(mysql_error());



  echo "<script>alert('Store Updated'); window.location = 'view-store.php';</script>";
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
        <h1 class="user__title">Register</h1>        
    </header>
    
    <form class="form" action="" method="post">
        <div class="form__group">
            <input type="text" name="store_name" placeholder="Store Name" class="form__input" value="<?php echo $store_name ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="store_location" placeholder="Store Location" class="form__input" value="<?php echo $store_location ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="store_address" placeholder="Store Address" class="form__input" value="<?php echo $store_address ?>" />
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
