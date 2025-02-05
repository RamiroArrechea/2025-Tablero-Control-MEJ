<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "mej_baseDatos";
	$conn ="";

	try{
		$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

		if($conn!=""){
			echo "CONECTADO SISTEMA";
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
		echo "NO CONECTADO SISTEMA";
	}



?>
