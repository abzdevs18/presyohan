<?php
include 'db_connect.php';
error_reporting (0);
if($_POST['submit'])
{
$list_id = $row['list_id'];
$prod_name = $_POST['prod_name'];
$prod_price = $_POST['prod_price'];
$prod_category = $_POST['prod_category'];
$store_name = $_POST['store_name'];
$store_address = $_POST['store_address'];
$user_id = $_POST['user_id'];

$sql="INSERT INTO list (list_id,prod_name,prod_price,prod_category,store_name,store_address,user_id)
VALUES('$list_id','$prod_name','$prod_price','$prod_category','$store_name','$store_address','$user_id')";
$result=mysql_query($sql);
}
{
if($sql){
		header('Refresh:0; url=fav_alert.php');
		exit();
	}
}
?>