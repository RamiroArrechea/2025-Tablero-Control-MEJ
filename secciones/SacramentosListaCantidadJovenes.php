<?php
#		Este archivo representa la COLUMNA IZQUIERDA DEL TABLERO DE CONTROL !!
#		Esta pensado para que en un futuro, cuando deban agregarse proyectos o modificar los 
#		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
		
#		Las variables $_SESSION[''] de los proyectos fueron creadas en  ../funcion/accesoPantalla.php
?>

		<li><?php
			//NO TIENE";
			if($totalNoSacramento > '0'){
				$per0 = new Objeto;
				$per0->setName($totalNoSacramento);
				$per0->setClase("");
				$per0->showDetalle();
			}
			else{
				$per0 = new Objeto;
				$per0->setName('--');
				$per0->setClase("");
				$per0->showDetalle();
			}
			?>
		</li>
		<li><?php
			//BAUTISMO";
			if($totalBautismo > '0'){
				$per1 = new Objeto;
				$per1->setName($totalBautismo);
				$per1->setClase("");
				$per1->showDetalle();
			}
			else{
				$per1 = new Objeto;
				$per1->setName('--');
				$per1->setClase("");
				$per1->showDetalle();
			}
			?>
		</li>
		<li><?php
			//COMUNION";
			if($totalComunion > '0'){
				$per2 = new Objeto;
				$per2->setName($totalComunion);
				$per2->setClase("");
				$per2->showDetalle();
			}
			else{
				$per2 = new Objeto;
				$per2->setName('--');
				$per2->setClase("");
				$per2->showDetalle();
			}
			?>
		</li>
		<li><?php
			//CONFIRMACION";
			if($totalConfirmacion > '0'){
				$per3 = new Objeto;
				$per3->setName($totalConfirmacion);
				$per3->setClase("");
				$per3->showDetalle();
			}
			else{
				$per3 = new Objeto;
				$per3->setName('--');
				$per3->setClase("");
				$per3->showDetalle();
			}
			?>
		</li>
		<li><?php
			//VACIO
			if(1){
				$per4 = new Objeto;
				$per4->setName('');
				$per4->setClase("");
				$per4->showDetalle();
			}
			?>
		</li>
		<li><?php
			//TOTAL MEJINOS;
			if($totalMejinos > '0'){
				$per5 = new Objeto;
				$per5->setName($totalMejinos);
				$per5->setClase("");
				$per5->showDetalle();
			}
			else{
				$per5 = new Objeto;
				$per5->setName('--');
				$per5->setClase("");
				$per5->showDetalle();
			}
			?>
		</li>









