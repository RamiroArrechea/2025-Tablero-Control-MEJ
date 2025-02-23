<?php


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

		//////////////////////////////////////////////////////////////////////////////
		//JUNIOR: EDAD DE ENTRE 9 -11 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS JUNIOR
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 9 AND 11
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalJunior = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totaljJunior es: " . $totalJunior;
			
		}else{
			echo "error------ en totalPre";
		}

		//////////////////////////////////////////////////////////////////////////////
		//PRE ADOLESCENTES: EDAD DE ENTRE 12 -14 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS PRE
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 12 AND 14
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalPre = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalPre es: " . $totalPre;
			
		}else{
			echo "error------ en totalPre";
		}

		//////////////////////////////////////////////////////////////////////////////
		//ADOLESCENTES: EDAD DE ENTRE 15 -17 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS ADO
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 15 AND 17
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalAdo = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalAdo es: " . $totalAdo;
			
		}else{
			echo "error------ en adolescentes";
		}

		//////////////////////////////////////////////////////////////////////////////
		//JOVENES: EDAD DE ENTRE 18 -22 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS ADO
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 18 AND 22
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalJovenes = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalJovenes es: " . $totalJovenes;
			
		}else{
			echo "error------ en adolescentes";
		}

		//////////////////////////////////////////////////////////////////////////////
		//ADULTOS: EDAD DE ENTRE 23 -99 AÑOS
		$sql = "SELECT count(*) AS total,
		TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) AS edad,
		CASE 
			WHEN TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) >= 18 THEN 'Mayor de edad'
			ELSE 'Menor de edad'
		END AS ADO
		FROM mejinos
		WHERE TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURDATE()) BETWEEN 23 AND 99
		AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
		ORDER BY edad";

		$resultado = mysqli_query($conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$totalAdultos = $fila['total'];
			

		if ($resultado!="") {
			//Compruebo qeu todo sea correcto
			//echo "El totalAdultos es: " . $totalAdultos;
			
		}else{
			echo "error------ en adolescentes";
		}



?>
