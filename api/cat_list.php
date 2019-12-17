<?php
include '../config.php';
error_reporting(0);

$list = array();
$query = mysqli_query($con,"SELECT DISTINCT(prod_category) AS cat FROM `products`");
while ($row = mysqli_fetch_assoc($query)) {	
	$category = $row['cat'];
	$data_q = "SELECT DISTINCT COUNT(prod_id) AS `num`,`prod_name`, `description` FROM `products` WHERE `prod_category` LIKE '" . $category . "'";
	$q = mysqli_query($con, $data_q);
	$res = mysqli_fetch_assoc($q);
	array_push($list, array("prod_category"=>$row['cat'],"items"=>3));
	// echo "<br />". $row['prod_name'] . "<br />";
}

echo json_encode($list);