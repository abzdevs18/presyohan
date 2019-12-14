<?php
session_start();
$_SESSION['message'] = '';
include '../config.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$id =  $_SESSION['user_id'];
		$prod_name = $mysqli->real_escape_string($_POST['prod_name']);
		$prod_price = $mysqli->real_escape_string($_POST['prod_price']);
		$prod_category = $mysqli->real_escape_string($_POST['prod_category']);
		$description = $mysqli->real_escape_string($_POST['description']);
		$pic_path = $mysqli->real_escape_string('images/products/'.$_FILES['prod_img']['name']);

		if(preg_match("!image!", $_FILES['prod_img']['type'])){
			if (copy($_FILES['prod_img']['tmp_name'], $pic_path)) {
				# code...
			
			$sql = "INSERT INTO products (prod_name,prod_price,prod_category,description,prod_img, user_id)"
			. "VALUES ('$prod_name','$prod_price','$prod_category','$description','$pic_path','$id')";

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