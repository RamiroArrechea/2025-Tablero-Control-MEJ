<?php
#		Este archivo representa la COLUMNA IZQUIERDA DEL TABLERO DE CONTROL !!
#		Esta pensado para que en un futuro, cuando deban agregarse proyectos o modificar los 
#		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
		
#		Las variables $_SESSION[''] de los proyectos fueron creadas en  ../funcion/accesoPantalla.php

//siempre  INICIAMOS SESION
//echo "RAMA:" .$_SESSION['SEM_SACRAMENTOS'];
?>
		<li><?php
				//ESPACIOS";
				$sem1 = new Objeto;
				$sem1->setName($_SESSION['SEM_ESPACIOS']);
				$sem1->setClase("");
				$sem1->setHref("./asset/images/semaforos/");
				$sem1->showSemaforo();
			?>
		</li>
		<li><?php
				//ETAPAS";
				$sem2 = new Objeto;
				$sem2->setName($_SESSION['SEM_ETAPAS']);
				$sem2->setClase("");
				$sem2->setHref("./asset/images/semaforos/");
				$sem2->showSemaforo();
			?>
		</li>
		<li><?php
			//if($cant == 1){
				//SACRAMENTOS";
				$sem3 = new Objeto;
				$sem3->setName($_SESSION['SEM_SACRAMENTOS']);
				$sem3->setClase("");
				$sem3->setHref("./asset/images/semaforos/");
				$sem3->showSemaforo();
			/*}
			else{
				$sem3 = new Objeto;
				$sem3->setName('off');
				$sem3->setClase("");
				$sem3->setHref("./asset/images/semaforos/");
				$sem3->showSemaforo();
			}*/
			?>
		</li>
		<li><?php
			//if($cant == 1){
				//MEJINOS";
				$sem4 = new Objeto;
				$sem4->setName($_SESSION['SEM_MEJINOS']);
				$sem4->setClase("");
				$sem4->setHref("./asset/images/semaforos/");
				$sem4->showSemaforo();
			/*}
			else{
				$sem4 = new Objeto;
				$sem4->setName('off');
				$sem4->setClase("");
				$sem4->setHref("./asset/images/semaforos/");
				$sem4->showSemaforo();
			}*/
			?>
		</li>
		<li><?php
			//if($cant != ''){
				//CAMPO VACIO";
				$sem5 = new Objeto;
				$sem5->setName('off');
				$sem5->setClase("");
				$sem5->setHref("./asset/images/semaforos/");
				$sem5->showSemaforo();
			/*}
			else{
				$sem5 = new Objeto;
				$sem5->setName('azul');
				$sem5->setClase("");
				$sem5->setHref("./asset/images/semaforos/");
				$sem5->showSemaforo();
			}*/
			?>
		</li>









