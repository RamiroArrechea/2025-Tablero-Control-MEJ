<?php

///EL DIA DE MAÑANA MEJORARLO
//QUIZAS HACIENDO TODO DENRTO DE UINA CLASE!
$_SESSION['conexion'] = $conn;
$_SESSION['totalMejinos'] = 0;

	///////////////////////////////////////////////////
	//	obtenerCantidadComunidad() 
	function obtenerCantidadComunidad() 
	{
		$cantComunidades= "0";
		$sql = "SELECT COUNT(DISTINCT `mejinos_comunidad`) as total 
		FROM `mejinos`";

				
		$resultado = mysqli_query($_SESSION['conexion'],$sql);
		$cantComunidades = mysqli_fetch_assoc($resultado);
		//$cantComunidades = $cant['mejinos_comunidad'];

		
		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El cantComunidades es: " . $cantComunidades['total'];
			return $cantComunidades['total'];
		}else{
			echo "error------ en adolescentes";
		}

	}

	///////////////////////////////////////////////////
	//	TOTAL MEJINOS
	function obtenerCantidadMejinos($idComunidad)
	{
		//Devuelve un "entero"
		$_SESSION['MEJ_COMUNIDAD'] = $idComunidad;

		$sql = "SELECT count(*) as 'total' FROM `mejinos`
		WHERE mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";
		//WHERE mejinos_sacramento = '".$totalConfirmacion."'";*/
		
		$resultado = mysqli_query($_SESSION['conexion'],$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalMejinos = $fila['total'];

		if ($resultado!="") {
		//Compruebo qeu todo sea correcto
		//echo "El totalMejinos es: " . $totalMejinos;
			return $totalMejinos;
		}else{
		//echo "error------ en tierraBuena";
		}
	}

	///////////////////////////////////////////////////
	//	A partir de acá, se dan todos los select para determinar los colores de los semaforos
	function obtenerSemaforoEspacio($totalMejinos)
	{
		//RECIBE UN ENTERO

		$colorSemEspacios = "off";
		//Compruebo qeu todo sea correcto
		switch($totalMejinos){
			case $totalMejinos > 15:
				$colorSemEspacios ="verde";
				break;
			case $totalMejinos > 0 && $totalMejinos <15:
				$colorSemEspacios ="amarillo";
				break;
			case $totalMejinos < 3 :
				$colorSemEspacios ="rojo";
				break;
		}
		return $colorSemEspacios;
		
	}

	function obtenerSemaforoEtapas($totalMejinos)
	{
		//RECIBE UN ENTERO

		$colorSemEtapas = "";
		//Compruebo qeu todo sea correcto
		switch($totalMejinos){
			case $totalMejinos > 15:
				$colorSemEtapas ="verde";
				break;
			case $totalMejinos > 0 && $totalMejinos <15:
				$colorSemEtapas ="amarillo";
				break;
			case $totalMejinos < 3 :
				$colorSemEtapas ="rojo";
				break;
		}

		return $colorSemEtapas;
		
	}

	function obtenerSemaforoSacramentos($totalMejinos)
	{
		//RECIBE UN ENTERO

		$colorSemSacrameto = "";
		//Compruebo qeu todo sea correcto
		switch($totalMejinos){
			case $totalMejinos > 15:
				$colorSemSacrameto ="verde";
				break;
			case $totalMejinos > 0 && $totalMejinos <15:
				$colorSemSacrameto ="amarillo";
				break;
			case $totalMejinos < 3 :
				$colorSemSacrameto ="rojo";
				break;
		}

		return $colorSemSacrameto;

	}

	function obtenerSemaforoMejinos($totalMejinos)
	{
		//RECIBE UN ENTERO

		$colorSemMejinos = "";
		//Compruebo qeu todo sea correcto
		switch($totalMejinos){
			case $totalMejinos > 15:
				$colorSemMejinos ="verde";
				break;
			case $totalMejinos > 0 && $totalMejinos <15:
				$colorSemMejinos ="amarillo";
				break;
			case $totalMejinos < 3 :
				$colorSemMejinos ="rojo";
				break;
		}

		return $colorSemMejinos;

	}

	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS COUNT(*) DE ETAPAS
	////////////////////////////////////////////////////////////////////////
	/*function obtenerCantidadPorEtapas()
	{
		//ETAPA
		$totalTierraBuena = '1';
		$totalSemilla 	= '2';
		$totalAmigos 	= '3';
		$totalDiscipulos = '4';
		$totalApostoles = '5';
		$totalTestigos 	= '6';
		$totalMonitores = '7';

		$_SESSION['MEJ_COMUNIDAD'] = 
		//	TIERRA BUENA
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalTierraBuena."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";


		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalTierraBuena = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El total es: " . $totalTierraBuena;
			
		}else{
			echo "error------ en tierraBuena";
		}

		//	SEMILLA
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalSemilla."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalSemilla = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalSemilla es: " . $totalSemilla;
			
		}else{
			echo "error------ en tierraBuena";
		}

		//	AMIGO
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalAmigos."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalAmigos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalAmigos es: " . $totalAmigos;
			
		}else{
			echo "error------ en tierraBuena";
		}

		//	DISCIPULO
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalDiscipulos."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalDiscipulos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalDiscipulos es: " . $totalDiscipulos;
			
		}else{
			echo "error------ en tierraBuena";
		}

		//	APOSTOL
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalApostoles."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalApostoles = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalApostoles es: " . $totalApostoles;
			
		}else{
			echo "error------ en tierraBuena";
		}
	
		//	TESTIGOs
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalTestigos."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalTestigos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalTestigos es: " . $totalTestigos;
			
		}else{
			echo "error------ en tierraBuena";
		}

		//	MONITORES
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_etapa = '".$totalMonitores."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$$totalMonitores = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El total es: " . $$totalMonitores;
			
		}else{
			echo "error------ en tierraBuena";
		}

	}
	
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
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalBautismo = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalBautismo: " . $totalBautismo;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////
		//	COMUNION
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_sacramento = '".$totalComunion."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalComunion = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalComunion es: " . $totalComunion;
			
		}else{
			echo "error------ en tierraBuena";
		}

		///////////////////////////////////////////////////
		//	CONFIRMACION
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos` 
		WHERE mejinos_sacramento = '".$totalConfirmacion."'
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalConfirmacion = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalConfirmacion es: " . $totalConfirmacion;
			
		}else{
			echo "error------ en tierraBuena";
		}



	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS para obtener personas por rango de edades
	////////////////////////////////////////////////////////////////////////
	function obtenerCantidadPorEspacios()
	{
		/* si es menor de edad
		$sql = "SELECT 
			*,
			TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
			CASE 
				WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
				ELSE 'Menor de edad'
			END AS estado_edad
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) < 18`";*/
/*

		//JUNIOR: EDAD DE ENTRE 9 -11 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS JUNIOR
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 9 AND 11
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalJunior = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totaljJunior es: " . $totalJunior;
			
		}else{
			echo "error------ en totalPre";
		}

		//PRE ADOLESCENTES: EDAD DE ENTRE 12 -14 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS PRE
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 12 AND 14
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalPre = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalPre es: " . $totalPre;
			
		}else{
			echo "error------ en totalPre";
		}


		//ADOLESCENTES: EDAD DE ENTRE 15 -17 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS ADO
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 15 AND 17
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalAdo = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalAdo es: " . $totalAdo;
			
		}else{
			echo "error------ en adolescentes";
		}


		//JOVENES: EDAD DE ENTRE 18 -23 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS ADO
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 18 AND 22
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalJovenes = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalJovenes es: " . $totalJovenes;
			
		}else{
			echo "error------ en adolescentes";
		}


		//ADULTOS: EDAD DE ENTRE 23 -99 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS ADO
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 23 AND 99
		AND mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalAdultos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El totalAdultos es: " . $totalAdultos;
			
		}else{
			echo "error------ en adolescentes";
		}

	}



	



*/
?>

