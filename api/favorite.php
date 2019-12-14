<?php
include '../config.php';

$list = array();


$prod_name = $_POST['prod_name'];
$prod_category = $_POST['prod_category'];
$prod_price = $_POST['prod_price'];
$store_name = $_POST['store_name'];
$store_address = $_POST['store_address'];
$user_id = $_POST['user_id'];


$row = mysqli_query($con,  "INSERT INTO list (prod_name, prod_price,prod_category, store_name, store_address, user_id) VALUES ('$prod_name', '$prod_price', '$prod_category', '$store_name', '$store_address', '$user_id')");
if ($row) {
	array_push($list, array('status' => 1));
}else{
	array_push($list, array('status' => 0));
}

echo json_encode($list);
