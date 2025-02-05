<?php
#		Este archivo representa la COLUMNA IZQUIERDA DEL TABLERO DE CONTROL !!
#		Esta pensado para que en un futuro, cuando deban agregarse proyectos o modificar los 
#		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
		
#		Las variables $_SESSION[''] de los proyectos fueron creadas en  ../funcion/accesoPantalla.php
?>

		<li><?php	
			//TIERRA BUENA";
			if($totalTierraBuena > '0'){
				$per1 = new Objeto;
				$per1->setName($totalTierraBuena);
				$per1->setClase("");
				$per1->showDetalle();
			}
			else{
				$per1 = new Objeto;
				$per1->setName('off');
				$per1->setClase("");
				$per1->showDetalle();
			}
			?>
		</li>
		<li><?php
			//SEMILLA";
			if($totalSemilla > '0'){
				$per2 = new Objeto;
				$per2->setName($totalSemilla);
				$per2->setClase("");
				$per2->showDetalle();
			}
			else{
				$per2 = new Objeto;
				$per2->setName('off');
				$per2->setClase("");
				$per2->showDetalle();
			}
			?>
		</li>
		<li><?php
			//AMIGOS";
			if($totalAmigos > '0'){				
				$per3 = new Objeto;
				$per3->setName($totalAmigos);
				$per3->setClase("");
				$per3->showDetalle();
			}
			else{
				$per3 = new Objeto;
				$per3->setName('off');
				$per3->setClase("");
				$per3->showDetalle();
			}
			?>
		</li>
		<li><?php
			//DISCIPULOS";
			if($totalDiscipulos > '0'){				
				$per4 = new Objeto;
				$per4->setName($totalDiscipulos);
				$per4->setClase("");
				$per4->showDetalle();
			}
			else{
				$per4 = new Objeto;
				$per4->setName('off');
				$per4->setClase("");
				$per4->showDetalle();
			}
			?>
		</li>
		<li><?php
			//APOSTOLES";
			if($totalApostoles > '0'){
				$per5 = new Objeto;
				$per5->setName($totalApostoles);
				$per5->setClase("");
				$per5->showDetalle();
			}
			else{
				$per5 = new Objeto;
				$per5->setName('off');
				$per5->setClase("");
				$per5->showDetalle();
			}
			?>
		</li>
		<li><?php
			//TESTIGOS";
			if($totalTestigos > '0'){				
				$per6 = new Objeto;
				$per6->setName($totalTestigos);
				$per6->setClase("");
				$per6->showDetalle();
			}
			else{
				$per6 = new Objeto;
				$per6->setName('off');
				$per6->setClase("");
				$per6->showDetalle();
			}
			?>
		</li>








