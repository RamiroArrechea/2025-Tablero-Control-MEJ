<?php

	////////////////////////////////////////////////////////////////////////
	// CONSUSLTAS para obtener los que cumplen en el mes que estamos cursando
	////////////////////////////////////////////////////////////////////////

		$sql = "SELECT  
					mejinos_nombre,
					mejinos_apellido,
					mejinos_fechaNac,
					DAY(mejinos_fechaNac) as cumple,
					TIMESTAMPDIFF(YEAR, mejinos_fechaNac, CURRENT_DATE()) as edad
				FROM mejinos
				WHERE MONTH(mejinos_fechaNac) = MONTH(CURRENT_DATE())
				AND mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."' 
				ORDER BY DAY(mejinos_fechaNac);";
	

		$resultadoCumple = mysqli_query($conn,$sql);
			

		if ($resultadoCumple!="") {
			//Compruebo qeu todo sea correcto
			//echo "ENTRE Cumple" ;
			
		}else{
			echo "error------ NO CUMPLE " ;
		}

		

?>
