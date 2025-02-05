<?php
#		Este archivo representa la COLUMNA IZQUIERDA DEL TABLERO DE CONTROL !!
#		Esta pensado para que en un futuro, cuando deban agregarse proyectos o modificar los 
#		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
		
#		Las variables $_SESSION[''] de los proyectos fueron creadas en  ../funcion/accesoPantalla.php
?>
		<li><?php
			//JUNIOR
			if($totalJunior > '0'){
				$sem1 = new Objeto;
				$sem1->setName('verde');
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
			//PRE ADOLESCENTES
			if($totalPre > '0'){
				$sem2 = new Objeto;
				$sem2->setName('verde');
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
			//ADOLESCENTES
			if($totalAdo > '0'){
				$sem3 = new Objeto;
				$sem3->setName('verde');
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
			//JOVENES
			if($totalJovenes > '0'){
				$sem4 = new Objeto;
				$sem4->setName('verde');
				$sem4->setClase("");
				$sem4->setHref("./asset/images/semaforos/");
				$sem4->showSemaforo();
			}
			else{
				$sem4 = new Objeto;
				$sem4->setName('off');
				$sem4->setClase("");
				$sem4->setHref("./asset/images/semaforos/");
				$sem4->showSemaforo();
			}
			?>
		</li>
		<li><?php
			//ADULTOS
			if($totalAdultos > '0'){
				$sem5 = new Objeto;
				$sem5->setName('verde');
				$sem5->setClase("");
				$sem5->setHref("./asset/images/semaforos/");
				$sem5->showSemaforo();
			}
			else{
				$sem5 = new Objeto;
				$sem5->setName('off');
				$sem5->setClase("");
				$sem5->setHref("./asset/images/semaforos/");
				$sem5->showSemaforo();
			}
			?>
		</li>









