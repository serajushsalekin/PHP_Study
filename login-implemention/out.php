<?php 
session_start();

include 'dbconn.php';
if (!isset($_SESSION['mysession'])) {
	
	header("Location: index.php");

}
elseif (isset($_SESSION['mysession'])!='') {
	header("Location: home.php");
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['mysession']);
	header("Location: index.php");
}

 ?>