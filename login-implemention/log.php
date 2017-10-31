<?php 
session_start();
require 'dbconn.php';
if (isset($_SESSION['mysession'])!='') {
	header("LOCATION: home.php");
	exit;
}

if (isset($_POST['login'])) {
	
	//$name = strip_tags($_POST['name']) or strip_tags($_POST['email']);
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	//$name = $stmt->real_escape_string($name);
	$email = $stmt->real_escape_string($email);
	$password = $stmt->real_escape_string($password);

	$query = $stmt->query("SELECT id,email,password FROM info WHERE email='$email'");
	$row=$query->fetch_array();
	$count = $query->num_rows;

	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['mysession'] = $row['id'];
		header("Location: home.php");
	}
	else{
		echo "invalid username and password<br>";
	}

  $stmt->close();

}

 ?>