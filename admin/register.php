<!--Connect To Database-->
<?php

include '../config.php';
?>

<?php
error_reporting (1);
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$brgy = $_POST['brgy'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$pw = $_POST['pw'];

$sql="INSERT INTO users (type, fname, lname, brgy, city, zip, email, pw)
	VALUES('user','$fname','$lname','$brgy','$city','$zip','$email','$pw')";
$result=mysql_query($sql);

if ($con->query($sql) === TRUE) {
					session_start();
					$_SESSION['users'] = $rows['fname'];
					$_SESSION['id'] = $rows['user_id'];
header("Location: index.php");
die();
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}$con->close();
}
?>
