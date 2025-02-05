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

		///////////////////////////////////////////////////
		//	TOTAL MEJINOS
		///////////////////////////////////////////////////
		$sql = "SELECT count(*) as 'total' FROM `mejinos`
		WHERE mejinos_comunidad = '".$_SESSION['MEJ_COMUNIDAD']."'";
		//WHERE mejinos_sacramento = '".$totalConfirmacion."'";*/
		

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalMejinos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			echo "El total es: " . $totalMejinos;
			
		}else{
			echo "error------ en tierraBuena";
		}
	


	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS para obtener personas por rango de edades
	////////////////////////////////////////////////////////////////////////
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



		//SETEO EL COLOR DEl SEMAFORO ESPACIO en INDEX.PHP
		$colorSemEspacios = "";
		
		switch($totalMejinos){
			case $totalMejinos == ($totalAdultos + $totalJovenes):
				$colorSemEspacios ="verde";
				break;
			case $totalMejinos > 0 && $totalAdo>0:
				$colorSemEspacios ="verde";
				break;
			case $totalMejinos > 0 && $totalPre=0:
				$colorSemEspacios ="amarillo";
				break;
			default: $colorSemEspacios ="amarillo";
		}


		//SETEO EL COLOR DEl SEMAFORO ETAPAS en INDEX.PHP
		$colorSemEtapas = "";
	
		switch($totalMejinos){
			case $totalMejinos >0 && ($totalMonitores >5):
				$colorSemEtapas ="verde";
				break;
			case $totalMejinos > 0 && ($totalTierraBuena && $totalSemilla >0):
				$colorSemEtapas ="verde";
				break;
			default: $colorSemEtapas ="amarillo";
		}


		//SETEO EL COLOR DEL SEMAFORO SACRAMENTO de index.php
		$colorSemSacrameto = "";

		switch($totalMejinos){
			case $totalMejinos == $totalConfirmacion:
				$colorSemSacrameto ="verde";
				break;
			case $totalMejinos > 0 && $totalConfirmacion>0:
				$colorSemSacrameto ="verde";
				break;
			default: $colorSemSacrameto ="amarillo";
		}

		
		//SETEO EL COLOR DEL SEMAFORO MEJINOS de index.php
		$colorSemMejinos ="";

		switch($totalMejinos){
			case $totalMejinos >10:
				$colorSemMejinos ="verde";
				break;
			case $totalMejinos ==0:
				$colorSemMejinos ="rojo";
				break;
			default: $colorSemMejinos ="amarillo";
		}

?>
