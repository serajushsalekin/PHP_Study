<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div>
    		<form method="post">
    			<h2>LOGIN</h2><br>

    			<?php include_once 'log.php'; ?>
 		<input type="text" name="email" placeholder="Email" 		required /><br><br>
		<input type="password" name="password" placeholder="Password" required /><br><br>
		<button class="btn_login" name="login" type="submit">LOGIN</button>


    		</form>
    	</div>

</body>
</html>