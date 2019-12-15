<?php
include '../config.php';

$list = array();

$email = $_POST['email'];
$pw = $_POST['pw'];

$sql="SELECT  email, pw FROM users WHERE email = $email AND pw = $pw";
$result=mysqli_query($sql);

if ($result) {
	$id = mysqli_fetch_assoc($result);
	$userId = $id['user_id']
	array_push($list, array('status' => 1,'id'=$user_id));
}else{
	array_push($list, array('status' => 0));
}

echo json_encode($list);