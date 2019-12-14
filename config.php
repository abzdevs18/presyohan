<?php
$db_username = 'qdigdeio_wp1901';
$db_password = 'qdigdeio_wp1901';
$db_name = 'qdigdeio_wp1901';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$con=mysqli_connect("localhost","qdigdeio_wp1901","qdigdeio_wp1901","qdigdeio_wp1901");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>