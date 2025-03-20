
	<!--Este archivo es la COLUMNA IZQUIERDA DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
		
		Las variables $_SESSION[''] de los proyectos fueron creadas en  ../conexio/querys en general.
	-->

		<li><?php
			$d1 = new Objeto;
			$d1->setId("1");
			$d1->setName("Mej Solano");
				$_SESSION['ID_COMUNIDAD']=1;
			$d1->setHref("../mejComunidad.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$d1->show();
			?>
		</li>
		<li><?php
			$d2 = new Objeto;
			$d2->setId("2");
			$d2->setName("Mej Itati");
				$_SESSION['ID_COMUNIDAD']= 2;
			$d2->setHref("../mejComunidad.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$d2->show();
			?>
		</li>
		<li><?php
			$d3 = new Objeto;
			$d3->setId("3");
			$d3->setName("Futura Comunidad MEj");
				$_SESSION['ID_COMUNIDAD']= 3;
			//$d3->setHref("../mejComunidad.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$d3->show();
			?>
		</li>
		<?php











