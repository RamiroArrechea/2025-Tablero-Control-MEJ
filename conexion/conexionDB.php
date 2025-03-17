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

		
	try {
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		if($conn->connect_error) {
			throw new Exception("Error de conexión: " . $conn->connect_error);
		}
		echo "RAMA ENTRE";
	} catch(Exception $ex) {
		echo $ex->getMessage();
		error_log("Error de conexión: " . $ex->getMessage());
	}
	


?>
