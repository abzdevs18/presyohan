<?php
session_start();
$_SESSION['message'] = '';
include 'config.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {


		$prod_name = $mysqli->real_escape_string($_POST['prod_name']);
		$prod_price = $mysqli->real_escape_string($_POST['prod_price']);
		$prod_category = $mysqli->real_escape_string($_POST['prod_category']);
		$pic_path = $mysqli->real_escape_string('images/products/'.$_FILES['prod_img']['name']);

		if(preg_match("!image!", $_FILES['prod_img']['type'])){
			if (copy($_FILES['prod_img']['tmp_name'], $pic_path)) {
				# code...
			
			$sql = "INSERT INTO products (prod_name,prod_price,prod_category,prod_img)"
			. "VALUES ('$prod_name','$prod_price','$prod_category','$pic_path')";

			if($mysqli->query($sql) === true){
				$_SESSION['message'] = "Adding Successful";
				header("Location: add-products.php");
			}
			else {
				
				$_SESSION['message'] = "upload failed";
			}
		}
		
		else
		{
				$_SESSION['message'] = "asdasd Successful";
		}
	}
}