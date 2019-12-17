<?php
include '../config.php';

$list = array();
$query = mysqli_query($con,"SELECT DISTINCT(prod_category) AS cat FROM `products`");
while ($row = mysqli_fetch_assoc($query)) {
	$q = mysqli_query($con,"SELECT DISTINCT COUNT(prod_id) AS `num`,`prod_name`, `description` FROM `products` WHERE `prod_category` LIKE 'Mens Shoes'");
	$res = mysqli_fetch_assoc($q);
	array_push($list, array("prod_category"=>$row['cat'],"description"=>$res['description'],"items"=>$res['num']));
	// echo "<br />". $row['prod_name'] . "<br />";
}

echo json_encode($list);