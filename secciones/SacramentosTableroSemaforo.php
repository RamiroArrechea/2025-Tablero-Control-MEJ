<?php
#		Este archivo representa la COLUMNA IZQUIERDA DEL TABLERO DE CONTROL !!
#		Esta pensado para que en un futuro, cuando deban agregarse proyectos o modificar los 
#		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
		
#		Las variables $_SESSION[''] de los proyectos fueron creadas en  ../funcion/accesoPantalla.php
?>
<?php
	$setName ="";
	switch($totalMejinos)
	{
		case $totalMejinos == $totalConfirmacion:
			$setName = "verde";
			break;
		/*case $totalMejinos == $totalConfirmacion:
			//code block;
			break;
		case label3:
			//code block
			break;
		default:
			//code block*/
		  
		  
	}
?>
		<li><?php
			//BAUTISMO";
			if($setName == "verde" || $totalBautismo > '0'){
				$sem1 = new Objeto;
				$sem1->setName("verde");
				$sem1->setClase("");
				$sem1->setHref("./asset/images/semaforos/");
				$sem1->showSemaforo();
			}
			else{
				$sem1 = new Objeto;
				$sem1->setName('off');
				$sem1->setClase("");
				$sem1->setHref("./asset/images/semaforos/");
				$sem1->showSemaforo();
			}
			?>
		</li>
		<li><?php
			//COMUNION";
			if($setName == "verde" || $totalComunion > '0'){
				$sem2 = new Objeto;
				$sem2->setName("verde");
				$sem2->setClase("");
				$sem2->setHref("./asset/images/semaforos/");
				$sem2->showSemaforo();
			}
			else{
				$sem2 = new Objeto;
				$sem2->setName('off');
				$sem2->setClase("");
				$sem2->setHref("./asset/images/semaforos/");
				$sem2->showSemaforo();
			}
			?>
		</li>
		<li><?php
			//CONFIRMACION";
			if($setName == "verde" || $totalConfirmacion > '0'){
				$sem3 = new Objeto;
				$sem3->setName("verde");
				$sem3->setClase("");
				$sem3->setHref("./asset/images/semaforos/");
				$sem3->showSemaforo();
			}
			else{
				$sem3 = new Objeto;
				$sem3->setName('off');
				$sem3->setClase("");
				$sem3->setHref("./asset/images/semaforos/");
				$sem3->showSemaforo();
			}
			?>
		</li>
		<li><?php
			//VACIO
			if(1){
				$sem4 = new Objeto;
				$sem4->setName('');
				$sem4->setClase("");
				$sem4->setHref("");
				$sem4->show();
			}
			?>
		</li>
		<li><?php
			//TOTAL MEJINOS;
			if($totalMejinos > '0'){
				$sem5 = new Objeto;
				$sem5->setName('');
				$sem5->setClase("");
				$sem5->setHref("");
				$sem5->show();
			}
			else{
				$sem5 = new Objeto;
				$sem5->setName('');
				$sem5->setClase("");
				$sem5->setHref("");
				$sem5->show();
			}
			?>
		</li>








