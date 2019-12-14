<?php


include '../../config.php';

if (isset($_POST['submit'])) {
		$prod_id = $_POST['prod_id'];
		$prod_name = $_POST['prod_name'];
		$prod_category = $_POST['prod_category'];
		$prod_price = $_POST['prod_price'];
		$store_name = $_POST['store_name'];
		$store_address = $_POST['store_address'];
		$user_id = $_POST['user_id'];
		

		mysqli_query($con,  "INSERT INTO list (prod_id, prod_name, prod_price,prod_category, store_name, store_address, user_id) VALUES ('$prod_id', '$prod_name', '$prod_price', '$prod_category', '$store_name', '$store_address', '$user_id')");
		// $_SESSION['message'] = "Added Successfully"; 
		// header('location: viewlist.php');
		echo "<script>alert('Added to List'); window.location = '../products.php';</script>";
    }
?>