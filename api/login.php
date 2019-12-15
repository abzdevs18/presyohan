<?php
include '../config.php';

$list = array();

$email = $_POST['email'];
$pw = $_POST['pw'];

$sql="SELECT user_id, email, pw FROM users WHERE email = '$email' AND pw = '$pw'";
$result=mysqli_query($con,$sql);

if ($result) {
	$id = mysqli_fetch_assoc($result);
	$userId = $id['user_id'];
	array_push($list, array('status' => 1,'id'=>$userId));
}else{
	array_push($list, array('status' => 0));
}

echo json_encode($list);