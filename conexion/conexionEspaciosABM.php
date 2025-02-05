<?php

	# Establesco la conexion con la base de datos.

	# Establesco la conexion con la base de datos.
	require "./conexionDB.php";
	


	////////////////////////////////////////////////////////////////////////
	// INSERTAR DATOS
	////////////////////////////////////////////////////////////////////////
	if(isset($_POST['enviar']) ){
		$nombreEspacio = $_POST['nombreEspacio'];
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		//INSERT INTO `espacio_comunidad`(`espacioComunidad_id`, `espacioComunidad_nombre`) 
		//VALUES ('[value-1]','[value-2]')
		$sql = "INSERT INTO `espacio`(`espacio_nombre`) 
				VALUES ('".$nombreEspacio."')";

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../espaciosGracias.php");
		}else{
			echo "error";
		}

		mysqli_close($conn);
	}else{
		echo "NO ENTRE AL IF";
	}
	
	////////////////////////////////////////////////////////////////////////
	// MODIFICAR DATOS
	////////////////////////////////////////////////////////////////////////

	if(isset($_POST['actualizar']) ){
		$nombreEspacio = $_POST['nombreEspacio'];
		$idEspacio = $_POST['id'];
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		echo "$idEspacio" . $idEspacio;
		//UPDATE `espacio_comunidad` SET 
		//`espacioComunidad_id`='[value-1]',
		//`espacioComunidad_nombre`='[value-2]' 
		//WHERE 1
		$sql = "UPDATE `espacio` SET 
				`espacio_nombre` = '".$nombreEspacio."' 
				WHERE `espacio_id` = '".$idEspacio."'";

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../espaciosGracias.php");
		}else{
			echo "error";
		}

		mysqli_close($conn);
	}else{
		echo "NO ENTRE AL IF";
	}

	////////////////////////////////////////////////////////////////////////
	// ELIMINAR  DATOS
	////////////////////////////////////////////////////////////////////////
	if(isset($_POST['eliminar']) ){
		$nombreEspacio = $_POST['nombreEspacio'];
		$idEspacio = $_POST['id'];
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		echo "$idEspacio" . $idEspacio;
		//DELETE FROM espacio_comunidad WHERE = 1"
		//WHERE 1
		$sql = "DELETE FROM `espacio` 
				WHERE `espacio_id` = '".$idEspacio."'";

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../espaciosGracias.php");
		}else{
			echo "error";
		}

		mysqli_close($conn);
	}else{
		echo "NO ENTRE AL IF";
	}


	include "./espaciosABM.php";

	// Y PARRA BORAR
	//"DELETE FROM espacio_comunidad WHERE `espacio_comunidad`.`espacioComunidad_id` = 1"?
?>
