<?php
session_start();
$_SESSION['message'] = '';

include 'config.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$store_name = $mysqli->real_escape_string($_POST['store_name']);
	$store_address = $mysqli->real_escape_string($_POST['store_address']);
	$pic_path = $mysqli->real_escape_string('store/store/'.$_FILES['store_location']['name']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$pw = $mysqli->real_escape_string($_POST['pw']);
	

	if(preg_match("!image!", $_FILES['store_location']['type'])){
			if (copy($_FILES['store_location']['tmp_name'], $pic_path)) {
				# code...
			
			$sql = "INSERT INTO users (type, store_name, store_location, store_address, email, pw)"
			. "VALUES ('store','$store_name','$pic_path','$store_address','$email','$pw')";

			if($mysqli->query($sql) === true){
				$_SESSION['message'] = "Adding Successful";
				header("Location: login-page.php");
			}
			else {
				
				$_SESSION['message'] = "upload failed";
			}
		}
		
		else
		{
				$_SESSION['message'] = "asdasd Successful";
		}
	}

}
// if(isset($_POST['submit']))
// {
// $store_name = $_POST['store_name'];
// $store_location = $_POST['store_location'];
// $store_address = $_POST['store_address'];
// $email = $_POST['email'];
// $pw = $_POST['pw'];

// $sql="INSERT INTO users (type, store_name, store_location, store_address, email, pw)
// 	VALUES('store','$store_name','$store_location','$store_address','$email','$pw')";
// $result=mysql_query($sql);

// if ($con->query($sql) === TRUE) {
// 					session_start();
// 					$_SESSION['users'] = $rows['store_name'];
// 					$_SESSION['id'] = $rows['user_id'];
// header("Location: index.php");
// die();
// } else {
// echo "Error: " . $sql . "<br>" . $con->error;
// }$con->close();
// }
?>
