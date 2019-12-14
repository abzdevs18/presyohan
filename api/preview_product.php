<?php
include '../config.php';

$prod_id = $_POST['prod_id'];

$list = array();
$query = mysqli_query($con,"SELECT `prod_id`, `prod_name`, `prod_price`, `prod_category`, `prod_img`, `description`,`store_name`, `store_location`, `store_address` FROM products LEFT JOIN users ON products.user_id = users.user_id WHERE prod_id = '$prod_id'");
while ($row = mysqli_fetch_assoc($query)) {
	array_push($list, array("prod_id"=>$row['prod_id'],"prod_name"=>$row['prod_name'],"prod_price"=>number_format($row['prod_price']),"prod_category"=>$row['prod_category'],"prod_img"=>$row['prod_img'],"description"=>$row['description'],"store_name"=>$row['store_name'],"store_location"=>$row['store_location'],"store_address"=>$row['store_address']));
	// echo "<br />". $row['prod_name'] . "<br />";
}

echo json_encode($list);