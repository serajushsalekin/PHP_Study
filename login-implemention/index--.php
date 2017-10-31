<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up Form Concept</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
	<?php 
		include 'dbconn.php';
		include 'log.php';
		include 'reg.php';

	 ?>
  <div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p><?php

  	if (isset($msg)) {
  		echo "<h2>$msg</h2>";
  	}
  	  ?></p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>
  	<?php

  	if (isset($msg)) {
  		echo "<h2>$msg</h2>";
  	}
  	  ?>

  </p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
 <div class="cont_form_login" method="POST">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="text" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<button class="btn_login" name="login" type="submit" onclick="cambiar_login()">LOGIN</button>
  </div>
  
   <div class="cont_form_sign_up" method ='POST'>
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>
<input type="text" name="email" placeholder="Email" required />
<input type="text" name="name" placeholder="User" required />
<input type="password" name="password" placeholder="Password" required /><br><br>
<button class="btn_sign_up" type="signup" name="signup" onclick="cambiar_sign_up()">SIGN UP</button>

  </div>

    </div>
    
  </div>
 </div>
</div>
  
    <script  src="js/index.js"></script>


    <div class="container">
    	<div class="jumbotron">
    		<form method="post">
    			<h2>SIGN UP</h2>
				<input type="text" name="email" placeholder="Email" required />
				<input type="text" name="name" placeholder="User" required />
				<input type="password" name="password" placeholder="Password" required /><br><br>
				<button class="btn_sign_up" type="signup" name="signup" >SIGN UP</button>
    			
    		</form>
    		
    	</div>

    </div>

</body>
</html>
