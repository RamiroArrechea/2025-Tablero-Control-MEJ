<?php


	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS COUNT(*) DE ETAPAS
	////////////////////////////////////////////////////////////////////////
	//ETAPA
	$totalTierraBuena = '1';
	$totalSemilla 	= '2';
	$totalAmigos 	= '3';
	$totalDiscipulos = '4';
	$totalApostoles = '5';
	$totalTestigos 	= '6';
	$totalMonitores = '7';

		///////////////////////////////////////////////////////////////////
		//	TIERRA BUENA
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalTierraBuena."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";


		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalTierraBuena = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El total es: " . $totalTierraBuena;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////////////////////
		//	SEMILLA
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalSemilla."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalSemilla = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalSemilla es: " . $totalSemilla;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////////////////////
		//	AMIGO
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalAmigos."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalAmigos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalAmigos es: " . $totalAmigos;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////////////////////
		//	DISCIPULO
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalDiscipulos."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalDiscipulos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalDiscipulos es: " . $totalDiscipulos;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////////////////////
		//	APOSTOL
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalApostoles."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalApostoles = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalApostoles es: " . $totalApostoles;
			
		}else{
			echo "error------ en tierraBuena";
		}
	
		///////////////////////////////////////////////////////////////////
		//	TESTIGOs
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalTestigos."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalTestigos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalTestigos es: " . $totalTestigos;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////////////////////
		//	MONITORES
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalMonitores."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$$totalMonitores = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El total es: " . $$totalMonitores;
			
		}else{
			echo "error------ en tierraBuena";
		}



?>
