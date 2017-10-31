<?php

session_start();
if (isset($_SESSION['mysession'])!='') {
	header('Location: home.php');
}
include_once 'dbconn.php';

if (isset($_POST['signup'])) {
	$remail = strip_tags($_POST['email']);
	$rname = strip_tags($_POST['name']);
	$rpassword=strip_tags($_POST['password']);

	$remail = $stmt->real_escape_string($remail);
	$rname = $stmt->real_escape_string($rname);
	$rpassword = $stmt->real_escape_string($rpassword);

	$hashpass = password_hash($rpassword, PASSWORD_DEFAULT);
	$check_email = $stmt->query("SELECT email FROM info WHERE email='$remail'");
	$count = $check_email->num_rows;
	if ($count==0) {
		$query = "INSERT INTO info(name,email,password)VALUES('$rname','$remail','$hashpass')";
		if ($stmt->query($query)) {
			
			$msg = "Successfully Registered!";
		}

		else{
			$msg = "ERROR while registering";
		}
	}
	elseif (!$count==0) {
		$msg = "User already existed!";
	}
	
	else{
		$msg = "check username and email.";
	}

	$stmt->close();
}

  ?>