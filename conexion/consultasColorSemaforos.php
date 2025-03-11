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

	

?>

