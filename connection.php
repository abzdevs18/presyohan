<?php
$conn = mysqli_connect("localhost","root","D3b1an!?","presyohan");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}