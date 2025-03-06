<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>

		<li><?php
			$i2 = new Objeto;
			$i2->setId("2");
			$i2->setClase("");
			
			echo $_SESSION['COLUMNA_ACTIVADA'];

			if($_SESSION['ESPACIOS'] == "true"){ $i2->setName('ESPACIOS');
			}elseif($_SESSION['ETAPAS'] == "true"){ $i2->setName('ETAPAS');
			}elseif($_SESSION['SACRAMENTOS'] == "true"){ $i2->setName('SACRAMENTOS');}
					
			$i2->show();
			?>
		</li>
		<li><?php
			$i3 = new Objeto;
			$i3->setId("3");
			if($_SESSION['MEJ_CUMPLEANIOS'] == "true"){
				$i3->setName('');
			}
			else{
				$i3->setName('cant. Jovenes');
			}
			
			$i3->show();
			?>
		</li>
		<li><?php
			$i4 = new Objeto;
			$i4->setId("4");
			$i4->setName('');
			$i4->show();
			?>
		</li>
		<li><?php
			$i5 = new Objeto;
			$i5->setId("4");
			$i5->setName('');
			$i5->show();
			?>
		</li>
		<li><?php
			$i6 = new Objeto;
			$i6->setId("5");
			if($_SESSION['MEJ_CUMPLEANIOS'] == "true"){
				$i6->setName('');
			}
			else{
				$i6->setName('');
				//$i6->setName('ABM');
				//$i6->setHref('./espaciosABM.php');
			}
			$i6->show();
			?>
		</li>
