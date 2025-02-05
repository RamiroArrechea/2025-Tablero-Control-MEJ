<?php

	# Establesco la conexion con la base de datos.

	# Establesco la conexion con la base de datos.
	require "./conexionDB.php";
	


	////////////////////////////////////////////////////////////////////////
	// INSERTAR DATOS
	////////////////////////////////////////////////////////////////////////
	if(isset($_POST['enviar']) ){
		$apellido 	= $_POST['mejinoApellido'];
		$nombre 	= $_POST['mejinoNombre'];
		$fechaNac 	= $_POST['mejinoFechaNac'];
		$etapa 		= $_POST['mejinoEtapa'];
		$comunidad 	= $_POST['mejinoComunidad'];
		$sacramento = $_POST['mejinoSacramento'];
		$desicion 	= $_POST['mejinoDesicion'];

		echo "$apellido";
		echo "$nombre";
		echo "$fechaNac";
		echo "$etapa";
		echo "$comunidad";
		echo "$sacramento";
		echo "$desicion";
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		//INSERT INTO `mejinos`
		//(`mejinos_id`, `mejinos_apellido`, `mejinos_nombre`, `mejinos_fechaNac`, `mejinos_etapa`, `mejinos_comunidad`, `mejinos_sacramento`, `mejinos_desicion`) 
		//VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
		

		$sql = "INSERT INTO `mejinos`
				(`mejinos_apellido`, `mejinos_nombre`, `mejinos_fechaNac`, `mejinos_etapa`, `mejinos_comunidad`, `mejinos_sacramento`, `mejinos_desicion`) 
				VALUES ('".$apellido."','".$nombre."','".$fechaNac."',
						'".$etapa."','".$comunidad."','".$sacramento."',
						'".$desicion."')";
		

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../mejinosMej.php");
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
		$idMejinos 	= $_POST['id'];
		$apellido 	= $_POST['mejinoApellido'];
		$nombre 	= $_POST['mejinoNombre'];
		$fechaNac 	= $_POST['mejinoFechaNac'];
		$etapa 		= $_POST['mejinoEtapa'];
		$comunidad 	= $_POST['mejinoComunidad'];
		$sacramento = $_POST['mejinoSacramento'];
		$desicion 	= $_POST['mejinoDesicion'];

		echo "$apellido";
		echo "$nombre";
		echo "$fechaNac";
		echo "$etapa";
		echo "$comunidad";
		echo "$sacramento";
		echo "$desicion";
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		//UPDATE `mejinos` SET
		// `mejinos_id`='[value-1]',
		//`espacioComunidad_nombre`='[value-2]' 
		//`mejinos_apellido`='[value-2]',`mejinos_nombre`='[value-3]',
		//`mejinos_fechaNac`='[value-4]',`mejinos_etapa`='[value-5]',
		//`mejinos_comunidad`='[value-6]',`mejinos_sacramento`='[value-7]',
		//`mejinos_desicion`='[value-8]' 
		//WHERE 1
		$sql = "UPDATE `mejinos` SET 
				`mejinos_apellido`	= '".$apellido."',
				`mejinos_nombre`	= '".$nombre."',
				`mejinos_fechaNac`	= '".$fechaNac."', 
				`mejinos_etapa`		= '".$etapa."', 
				`mejinos_comunidad`	= '".$comunidad."', 
				`mejinos_sacramento`= '".$sacramento."', 
				`mejinos_desicion`	= '".$desicion."'
				WHERE `mejinos_id` = '".$idMejinos."'";
				

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../mejinosGracias.php");
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
		$nombreMejinos = $_POST['nombreMejinos'];
		$idMejinos = $_POST['id'];
		
		echo "////////////ENTRE A GUARDAR LOS DATOS";
		echo "$idMejinos" . $idMejinos;
		//DELETE FROM espacio_comunidad WHERE = 1"
		//WHERE 1
		$sql = "DELETE FROM `mejinos` 
				WHERE `mejinos_id` = '".$idMejinos."'";

		$resultado = mysqli_query($conn,$sql);

		if($resultado !="" ){
			echo "corecctamente";
			
			//vuelvo a donde estaba
			header("Location:../mejinosGracias.php");
		}else{
			echo "error";
		}

		mysqli_close($conn);
	}else{
		echo "NO ENTRE AL IF";
	}


?>
