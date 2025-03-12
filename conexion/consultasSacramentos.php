<?php


	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS COUNT(*) DE SACRAMENTOS
	////////////////////////////////////////////////////////////////////////

	//SACRAMENTOS
	$totalBautismo		= '1';
	$totalComunion		= '2';
	$totalConfirmacion	= '3';
	$totalNoSacramento	= '4';
	$colorSemaforo	="";

		
		///////////////////////////////////////////////////
		//	NO TIENE
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_sacramento = '".$totalNoSacramento."'
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalNoSacramento = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalBautismo: " . $totalBautismo;
			
		}else{
			echo "error------ en tierraBuena";
		}


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
		//	DETALLE DE CADA CADA
		///////////////////////////////////////////////////
		$Bautismo		= '1';
		$Comunion		= '2';
		$Confirmacion	= '3';
		$NoSacramento	= '4';
		
		
		

		///////////////////////////////////////////////////
		//	NO TIENE
		///////////////////////////////////////////////////
		$sql = "SELECT *, 
			TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
		FROM mejinos
		WHERE mejinos_sacramento = $NoSacramento
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY mejinos_id;";
		
		$resultadoNoTiene = mysqli_query($conn,$sql);

		if ($resultadoNoTiene!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalBautismo: " . $totalBautismo;
			
		}else{
			echo "error------ en tierraBuena";
		}


		///////////////////////////////////////////////////
		//	Bautismo
		///////////////////////////////////////////////////
		$sql = "SELECT *, 
			TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
		FROM mejinos
		WHERE mejinos_sacramento = $Bautismo
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY mejinos_id;";
		
		$resultadoBautismo = mysqli_query($conn,$sql);

		if ($resultadoBautismo!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalBautismo: " . $totalBautismo;
			
		}else{
			echo "error------ en tierraBuena";
		}


		///////////////////////////////////////////////////
		//	Comunion
		///////////////////////////////////////////////////
		$sql = "SELECT *, 
			TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
		FROM mejinos
		WHERE mejinos_sacramento = $Comunion
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY mejinos_id;";
		
		$resultadoComunion = mysqli_query($conn,$sql);

		if ($resultadoComunion!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalBautismo: " . $totalBautismo;
			
		}else{
			echo "error------ en tierraBuena";
		}


		///////////////////////////////////////////////////
		//	Confirmacion
		///////////////////////////////////////////////////
		$sql = "SELECT *, 
			TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
		FROM mejinos
		WHERE mejinos_sacramento = $Confirmacion
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY mejinos_id;";
		
		$resultadoConfirmacion = mysqli_query($conn,$sql);

		if ($resultadoConfirmacion!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalBautismo: " . $totalBautismo;
			
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
