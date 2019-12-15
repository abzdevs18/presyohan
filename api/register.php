<?php
include '../config.php';

$list = array();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$brgy = $_POST['brgy'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$pw = $_POST['pw'];

$sql="INSERT INTO users (fname, lname, brgy, city, zip, email, pw)
	VALUES('$fname','$lname','$brgy','$city','$zip','$email','$pw')";
$result=mysql_query($sql);

if ($result) {
	if ($query) {
		$last_id = mysqli_insert_id($con);
		array_push($list, array('status' => 1,'id'=$last_id));
	}
}else{
	array_push($list, array('status' => 0));
}

echo json_encode($list);