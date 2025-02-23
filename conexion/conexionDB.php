<?php

	//	 PARA TRABAJAR EN EL REPOSITORIO
	/*$dbhost = "sql111.infinityfree.com";
	$dbuser = "if0_38260221";
	$dbpass = "f1I27xIxWYTPh";
	$dbname = "if0_38260221_mej_baseDatos";
	$conn ="";*/

	//	 PARA TRABAJAR EN LOCAL
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "mej_baseDatos";
	$conn ="";

		
	try{
		$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

		if($conn!=""){
			//echo "CONECTADO SISTEMA";
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
		//echo "NO CONECTADO SISTEMA";
	}



?>
