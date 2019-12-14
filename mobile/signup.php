<?php
include 'db_connect.php';
error_reporting (0);
if($_POST['signup'])
{
$user_id = $row['user_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$brgy = $_POST['brgy'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$pw = $_POST['pw'];
$type = $_POST['type'];
$sql="INSERT INTO users (user_id,fname,lname,brgy,city,zip,email,pw,type)
VALUES('$user_id','$fname','$lname','$brgy','$city','$zip','$email','$pw','$type')";
$result=mysql_query($sql);
}
{
if($sql){
		header('Refresh:0; url=index.php');
		exit();
	}
}
?>