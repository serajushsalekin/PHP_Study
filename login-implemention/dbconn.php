<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "sqldb";
	 
	 $stmt = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($stmt->connect_errno) 
     {
         die("ERROR : -> ".$stmt->connect_error);
     }
