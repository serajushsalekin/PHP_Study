<?php 
	session_start();
	include 'dbconn.php';

	if (!isset($_SESSION['mysession'])) {
		header("Location: index.php");
	}

	$query = $stmt->query("SELECT * FROM info WHERE id=".$_SESSION['mysession']);
	$userRow =$query->fetch_array();
	$stmt->close();

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Hello! <?php echo $userRow['name']; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body class="jumbotron">
	<button name="logout" class="float-right bg-danger btn btn-danger sticky-top btn-secondary d-inline">

		<li class="btn-block h1 list-inline list-inline-item">
			<a href="out.php?logout">Logout</a>

		</li>


	</button>
	<ul class="list-inline">
		<li class="h1 list-inline-item">list 1</li>
		<li class="h1 list-inline-item">list 2</li>
		<li class="h1 list-inline-item">list 3</li>

	</ul>

	<h3 class="h1 /fixed-top">Hellllllooooooo</h3>
	<h3 class="h1 btn btn-success sticky-top">Hellllllooooooo</h3>
	<h3 class="h1 /fixed-bottom">Hellllllooooooo</h3>
	<h3 class="text-lg-right text-md-right text-sm-right">Align to the right</h3>
	<div class="container">

		<p class="bg-success d-inline">Hello</p><p class="bg-warning d-inline">World!</p>
		
	</div>


	<div class="float-left bg-success">
		Float left
	</div><br>
	<div class="float-right bg-warning">
		Float Right
	</div><br>
	<div class="float-none bg-danger">
		None float
	</div><br>

	<div class="btn-warning clearfix">
		<button class="btn btn-success btn-secondary float-left">Float Left</button>
		<button class="btn btn-danger btn-secondary float-right">Float Right</button>
	</div>
	<div>Extra</div>
	<p class="text-muted mb-5 pr-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p class="bg-info text-white justify-content-center p-2 mt-1 px-5 py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p class="bg-faded mt-5 pl-2 h-100 bg-success w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	//Button
	<br>

	<button class="btn btn-block btn-primary btn-outline-danger">Primary</button>
	<button class="btn btn-secondary" type="button" data-toggle="button" aria-pressed="true" >Secondary</button>
	<button class="btn btn-info">info</button>
	<button class="btn btn-success">Success</button>
	<button class="btn btn-warning">Warning</button>
	<button class="btn btn-danger">Danger</button>
	<button class="btn btn-link">Link</button>

	<br><br>
	//Dropdown//
	<div class="dropdown ">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Dropdown</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="">Link one</a>
			<a class="dropdown-item" href="">Link two</a>
			<a class="dropdown-item" href="">Link tree</a>
		</div>
	</div>
	<br><br>
	<div class="dropdown btn-group">
		<button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown">My Dropdown</button><button class="btn btn-success">Home</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="">Link one</a>
			<a class="dropdown-item" href="">Link two</a>
			<a class="dropdown-item" href="">Link tree</a>
		</div>
	</div>

	<!--lecture 15 finished-->

<br><br>
</body>
</html>