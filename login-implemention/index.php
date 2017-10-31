<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php 
		//require_once 'dbconn.php';

		//include 'dbconn.php';
		//include 'log.php';
		//include 'reg.php';

	 ?>
	<div class="container">
    	<div class="jumbotron">
    		<form method="post">
    			<h2>SIGN UP</h2>
    			<?php include_once 'reg.php'; ?>
    			    			<p><?php 
    			    			if (isset($msg)) {
    			    			echo $msg;	
    			    			}  ?></p>

				<input type="text" name="email" placeholder="Email" required /><br><br>
				<input type="text" name="name" placeholder="User" required /><br><br>
				<input type="password" name="password" placeholder="Password" required /><br><br>
				<button class="btn_sign_up" type="submit" name="signup" >SIGN UP</button>
    			
    		</form>
    		<button class="btn_sign_up" type="submit"  ><a href="login.php">Login here</a></button>
    	</div>



    </div>


</body>
</html>