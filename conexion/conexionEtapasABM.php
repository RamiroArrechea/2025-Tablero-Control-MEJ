<?php

	# Establesco la conexion con la base de datos.

	# Establesco la conexion con la base de datos.
	require "./conexionDB.php";
	


	
	if(isset($_POST['enviar']) ){
		$nombreEtapa = $_POST['nombreEtapa'];
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		//INSERT INTO `sacramento`(`sacramento_id`, `sacramento_nombre`) 
		//VALUES ('[value-1]','[value-2]')
		$sql = "INSERT INTO `etapa`(`etapa_nombre`) 
				VALUES ('".$nombreEtapa."')";

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../etapasGracias.php");
		}else{
			echo "error";
		}

		mysqli_close($conn);
	}else{
		echo "NO ENTRE AL IF";
	}

	////////////////////////////////////////////////////////////////////////
	// INSERTAR DATOS
	////////////////////////////////////////////////////////////////////////
	

		


	// Y PARRA BORAR
	//"DELETE FROM espacio_comunidad WHERE `espacio_comunidad`.`espacioComunidad_id` = 1"?
?>
