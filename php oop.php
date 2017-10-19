<?php

/**
*        				//Class & Object//
*/
class cars
{
	private   $var1 = 'private';
	public    $var2 = 'public';
	protected $var3 = 'protected';

	public function print_fun()
	{
		echo $this -> var2 .'<br>';
		echo $this -> var1 .'<br>';
		echo $this -> var3 .'<br>';
	}
	
	function option()
	{
		echo "No options<br>";
		$this->printname('From option');
	}
	function printname($name)
	{
		echo "$name<br>";
	}
}

$methods = get_class_methods('cars');         	//for showing all the methods in cars class//
foreach ($methods as $method) {
	print($method."<br>");
}


 ?>
 <?php

 $ins = new cars();
 $ins->option();


 /**
 * 
 */
 class log
 {
 	function __construct()
 	{
 		$this->cre('<br>hello from construct and ');
 	}
 	
 	function cre($uname,$password='')
 	{
 		global $ins;
 		echo "$uname logged in.<br>";
 		$ins->option();

 	}
 	function __destruct()
 	{
 		echo "CLOSED PROGRAM.";
 	}
 }

 $user = new log();
 $user->cre('Salekin');

/**
* 
*/
class car extends cars
{
	public function ex_fun()
	{

		//echo $this-> var1;
		echo $this-> var2 ."<br>";
		echo $this-> var3 ."<br>";
	}
	
}
$ex = new car();
$ex->print_fun();
$ex->ex_fun();

//var_dump($ex->var2); 

  ?>