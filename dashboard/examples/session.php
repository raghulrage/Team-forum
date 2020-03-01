<?php 
	session_start();
	$user = $_GET['user_id'];
	$_SESSION['user'] = $user;
	header("Location: dashboard.php");
 ?>