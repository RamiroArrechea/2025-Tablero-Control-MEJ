<?php


	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS COUNT(*) DE SACRAMENTOS
	////////////////////////////////////////////////////////////////////////

	//SACRAMENTOS
	$totalBautismo = '1';
	$totalComunion 	= '2';
	$totalConfirmacion 	= '3';
	$totalMejinos 	= '4';
	$colorSemaforo ="";

		///////////////////////////////////////////////////
		//	BAUTISMO
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_sacramento = '".$totalBautismo."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalBautismo = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalBautismo: " . $totalBautismo;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////
		//	COMUNION
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_sacramento = '".$totalComunion."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalComunion = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalComunion es: " . $totalComunion;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////
		//	CONFIRMACION
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_sacramento = '".$totalConfirmacion."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalConfirmacion = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalConfirmacion es: " . $totalConfirmacion;
			
		}else{
			echo "error------ en tierraBuena";
		}


		///////////////////////////////////////////////////
		//	TOTAL MEJINOS
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos`
		WHERE mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";
		//WHERE mejinos_sacramento = '".$totalConfirmacion."'";*/
		

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalMejinos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El total es: " . $totalMejinos;
			
		}else{
			echo "error------ en tierraBuena";
		}
	



?>
