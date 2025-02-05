<?php

	# Establesco la conexion con la base de datos.

	# Establesco la conexion con la base de datos.
	require "./conexionDB.php";
	
	if(isset($_POST['enviar']) ){
		$nombreSacramento = $_POST['nombreSacramento'];
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		//INSERT INTO `sacramento`(`sacramento_id`, `sacramento_nombre`) 
		//VALUES ('[value-1]','[value-2]')
		$sql = "INSERT INTO `sacramento`(`sacramento_nombre`) 
				VALUES ('".$nombreSacramento."')";

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../sacramentosGracias.php");
		}else{
			echo "error";
		}

		mysqli_close($conn);
	}else{
		echo "NO ENTRE AL IF";
	}

	//include "./espaciosABM.php";

	// Y PARRA BORAR
	//"DELETE FROM espacio_comunidad WHERE `espacio_comunidad`.`espacioComunidad_id` = 1"?
?>
