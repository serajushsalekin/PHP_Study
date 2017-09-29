<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php print("hello next"."\xA") ?>
	<?php echo " echo next";
	  ?>
	<?php
	$name = 'sani';
	$age = 23;
	$salary = 2.5;
	print ("I am $name,<br> my age is $age years old and my salary is $salary lakh"); 
	echo "<br>";

	define('abc', 'alphabet variable(example of constant variable)');
	echo abc;
	?>

	<?php echo '<br>' ?>
	<?php
	define('def', 'variable and constant');
	$fav_color = "black";
	$birthd_year = 1995;

	date_default_timezone_set('Etc/GMT+6');
	$today = date('F j, Y');
	$this_year = date('Y');
	$age_cal = $this_year - $birthd_year;

	?>
	
		<h1>Gets Your hands Dirty : <small><?php echo def; ?></small></h1>
		<h2>Todays date:<br></h2>
		<?php echo $today; ?>
		<h3>My Name:<br></h3>
		<?php echo $name;  ?>	
		<h4>My Fav Color: <br></h4>
		<?php echo $fav_color;  ?>

		<h5>My age: <br></h5>
		<?php echo $age_cal ,'<br>',"<br>"; ?>


		          //Array Section//
<?php
$product = array('Car','bike','plane','bycycle' );
  ?>
  <h4>Product:</h4>
<ul>
	<li><?php echo $product[0];  ?></li>
	<li><?php echo $product[1]; ?></li>
	<li><?php echo $product[2]; ?></li>
</ul>
					//Associative Arrays//	

<?php
$product_list = array(
	"car"     => "Car",
	"bike"    => "bike",
	"plane"   => "plane",
	"bycycle" => "bycycle" );
  ?>
  <h4>Product list:</h4>
<ul>
	<li><?php echo $product_list["car"];  ?></li>
	<li><?php echo $product_list["bike"]; ?></li>
	<li><?php echo $product_list["bycycle"]; ?></li>
</ul>

               //Multidimentional Array//
<?php
$product_car_list = array(
	 array(
	 "car1"    => "Car",
	"bike1"    => "bike",
	"plane1"   => "plane",
	"bycycle1" => "bycycle" 
	 ),
	 array(
	 	"hundai"     	=> "Hundai",
		"lamborgini"    => "Lamborgini",
		"audi"   		=> "Audi",
		"bmw" 			=> "BMW"
	 ),
	 );
  ?>
  <h4>Product Car list:</h4>
<ul>
	<li><?php echo $product_car_list[1]['hundai'];  ?></li>
	<li><?php echo $product_car_list[0]["car1"]; ?></li>
	<li><?php echo $product_car_list[1]["bmw"]; ?></li>
</ul>

					//if-else//
<?php
$apple = 20;
$rice = 30;

  ?>
<h4>The Price of rice is <?php echo $rice; ?> taka/kg</h4>
<h4><?php if ($apple>$rice) {
	# code...
	echo "Apple is Costly";
}
else echo "Rice is Costly";
 ?></h4>


					//while//


 <?php
 $var = 1;
 echo "<br>";
 while ($var <= 10) {
 	echo $var."<br>";
 	$var++;
 }


 echo "<br>";
 for ($i=1; $i < $var; $i++) { 
 	echo $i.'<br>';
 }
   ?>

   						//for EachLoop//
<?php
foreach ($product as $pro) {
	echo $pro.'<br>';
}
  ?>
  						//do-while//
<?php
do {
 	# code...
 	print '<br>'.$var.'<br>';
 	$var++;
 } while ($var <= 20); 
 ?>
						//Function//
<?php
	function callme()
	{
		static $var;
		$var++;
		echo '<br>'."callme :".$var.'<br>';
	}
	callme();
	callme();
	callme();

	//sort() function
	$books = array('bangla','english','canadian','indiana','austrilian poet');
	sort($books);
	foreach ($books as $pro) {
		echo '<br>'.$pro."<br>";
	}

	//strtolower() function
	$string_var = "CanadianBangladesiIndianaBritishAmerican";
	$string_var = strtolower($string_var);
	echo $string_var ."<br>";

	//sha1() function
	$hidden_key = 'passcode';
	echo "before sha1 : $hidden_key"."<br>";
	$hidden_key = sha1($hidden_key);
	echo "after sha1 : $hidden_key"."<br>";

	//custom function
	//argument

	function argu_lect($hidden_key)
	{
		
		
			echo "$hidden_key";
		
	}
	argu_lect("bangladesh");

	function multi($x,$y)
	{
		echo "<br>"."Multipication of $x and $y is: ".$x*$y."<br>";
	}

	multi(12,2);
  ?>
</body>
</html>