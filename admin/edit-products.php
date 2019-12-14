<?php

include '../config.php';

$id = $_REQUEST['prod_id'];
$sql = mysqli_query($con, "SELECT * FROM products WHERE prod_id='$id'");

$result = mysqli_fetch_array($sql);
if (!$result) 
		{
		die("Error: Data not found..");
		}	
				$prod_name= $result['prod_name'];					
				$prod_price=$result['prod_price'];					
				$prod_category=$result['prod_category'];					
				//$prod_img=$result['prod_img'];					
if(isset($_POST['save']))
{
	$newprod_name = $_POST['prod_name'];
	$newprod_price = $_POST['prod_price'];				
	$newprod_category= $_POST['prod_category'];					
			
	mysqli_query($con, "UPDATE products SET prod_name ='$newprod_name', prod_price ='$newprod_price',  prod_category ='$newprod_category' WHERE prod_id = '$id'") or die(mysql_error());



  echo "<script>alert('Product Updated'); window.location = 'products.php';</script>";
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
        <h1 class="user__title">Update Product</h1>        
    </header>
    
    <form class="form" action="" method="post"  >
        <div class="form__group">
            <input type="text" name="prod_name" class="form__input" value="<?php echo $prod_name ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="prod_price" class="form__input" value="<?php echo $prod_price ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" name="prod_category" class="form__input" value="<?php echo $prod_category ?>" />
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
