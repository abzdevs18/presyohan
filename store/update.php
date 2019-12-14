<?php



include '../config.php';

$prod_id = 0;
$prod_name = "";
$prod_category = "";
$prod_price = "";
$update = false;

if (isset($_POST['submit'])) {
		$prod_id = $_POST['prod_id'];
		$prod_name = $_POST['prod_name'];
		$prod_category = $_POST['prod_category'];
		$prod_price = $_POST['prod_price'];
		

		mysqli_query($con,  "UPDATE products SET prod_name='$prod_name', prod_price='$prod_price', prod_category='$prod_category' WHERE prod_id=$prod_id");
		$_SESSION['message'] = "Record updated!"; 
		header('location: products.php');
    }
?>