<?php
include '../config.php';

$list = array();
$query = mysqli_query($con,"SELECT * FROM products");
while ($row = mysqli_fetch_assoc($query)) {
	array_push($list, array("prod_id"=>$row['prod_id'],"prod_name"=>$row['prod_name'],"prod_price"=>number_format($row['prod_price']),"prod_category"=>$row['prod_category'],"prod_img"=>$row['prod_img'],"description"=>$row['description']));
	// echo "<br />". $row['prod_name'] . "<br />";
}

echo json_encode($list);