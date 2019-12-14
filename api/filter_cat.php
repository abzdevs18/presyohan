SELECT * FROM products WHERE products.prod_category LIKE 'Mens Shoes'
<?php
include '../config.php';

$prod_category = $_POST['prod_category'];

$list = array();
$query = mysqli_query($con,"SELECT * FROM products WHERE products.prod_category LIKE '".$prod_category."'");
while ($row = mysqli_fetch_assoc($query)) {
	array_push($list, array("prod_id"=>$row['prod_id'],"prod_name"=>$row['prod_name'],"prod_price"=>number_format($row['prod_price']),"prod_category"=>$row['prod_category'],"prod_img"=>$row['prod_img'],"description"=>$row['description']));
	// echo "<br />". $row['prod_name'] . "<br />";
}

echo json_encode($list);