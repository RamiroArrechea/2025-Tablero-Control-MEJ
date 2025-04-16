<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>

		<li><?php
			$i2 = new Objeto;
			$i2->setClase("");
			
			if($_SESSION['DETALLE_ESPACIO'] == "true"){
				$i2->setName('');
			}else{
				if($_SESSION['ESPACIOS'] == "true"){ $i2->setName('ESPACIOS');
				}elseif($_SESSION['ETAPAS'] == "true"){ $i2->setName('ETAPAS');
				}elseif($_SESSION['SACRAMENTOS'] == "true"){ $i2->setName('SACRAMENTOS');}
			}	

			$i2->showDetalle();
			?>
		</li>
		<li><?php
			$i3 = new Objeto;
			if($_SESSION['MEJ_CUMPLEANIOS'] == "true" || $_SESSION['DETALLE_ESPACIO'] == "true" ){
				$i3->setName('');
			}
			else{
				$i3->setName('cant. Jovenes');
			}
			
			$i3->showDetalle();
			?>
		</li>
	