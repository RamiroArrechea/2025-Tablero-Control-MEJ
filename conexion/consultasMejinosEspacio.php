<?php

	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS para obtener personas por rango de edades
	////////////////////////////////////////////////////////////////////////

		//JUNIOR: EDAD DE ENTRE 9 -11 AÑOS
		
		//Esta Query trae todos los datos de los PRE, tal cual aparece en la base de datos
		/*$sql = "SELECT *
				FROM mejinos
				WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 9 AND 11
				ORDER BY mejinos_id;";
		*/

		//Esta Query trae todos los datos de los PRE, tal cual aparece en la base de datos
		//Y AGREGA UNA COLUMNA "EDAD" , para mayor claridad a la hora de mostrar los datos
		$sql = "SELECT *, 
					TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
				FROM mejinos
				WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 9 AND 11
				AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
				ORDER BY mejinos_id;";

		$resultadoJunior = mysqli_query($conn,$sql);			

		if ($resultadoJunior!="") {
			//Compruebo qeu todo sea correcto
			//echo "ENTRE A resultadoJunior " ;
			
		}else{
			echo "error------ A resultadoJunior " ;
		}

		//////////////////////////////////////////////////////////////////////////////
		//PRE ADOLESCENTES: EDAD DE ENTRE 12 -14 AÑOS
		$sql = "SELECT *, 
					TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
				FROM mejinos
				WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 12 AND 14
				AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
				ORDER BY mejinos_id;";

		$resultadoPre = mysqli_query($conn,$sql);
			

		if ($resultadoPre!="") {
			//Compruebo qeu todo sea correcto
			//echo "ENTRE A resultadoPre " ;
			
		}else{
			echo "error------ A resultadoPRE " ;
		}

		//////////////////////////////////////////////////////////////////////////////
		//ADOLESCENTES: EDAD DE ENTRE 15 -17 AÑOS
		$sql = "SELECT *, 
					TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
				FROM mejinos
				WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 15 AND 17
				AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
				ORDER BY mejinos_id;";

		$resultadoAdo = mysqli_query($conn,$sql);


		if ($resultadoAdo!="") {
			//Compruebo qeu todo sea correcto
			//echo "ENTRE A resultadoPre " ;

		}else{
		echo "error------ A resultadoADO " ;
		}

		//////////////////////////////////////////////////////////////////////////////
		//JOVENES: EDAD DE ENTRE 18 - 22 AÑOS
		$sql = "SELECT *, 
					TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
				FROM mejinos
				WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 18 AND 22
				AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
				ORDER BY mejinos_id;";

		$resultadoJovenes = mysqli_query($conn,$sql);


		if ($resultadoJovenes!="") {
			//Compruebo qeu todo sea correcto
			//echo "ENTRE A resultadoJovenes " ;

		}else{
		echo "error------ A  " ;
		}


		//ADULTOS: EDAD DE ENTRE 23 - 99 AÑOS
		$sql = "SELECT m.*,
					TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad
				FROM mejinos m
				WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 23 AND 99
				AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
				ORDER BY mejinos_id;";

		$resultadoAdultos = mysqli_query($conn,$sql);


		if ($resultadoAdultos!="") {
			//Compruebo qeu todo sea correcto
			//echo "ENTRE A resultadoJovenes " ;

		}else{
		echo "error------ A  " ;
		}


?>
