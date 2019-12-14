<?php

include '../config.php';

session_start();
$user = $_SESSION['id'];
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	exit();
