<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>

	<?php
	if($_SESSION['DETALLE_ESPACIO'] != "true")
	{?>
		<li><?php		
		
			$i2 = new Objeto;
			$i2->setClase("");
							
			if($_SESSION['ESPACIOS'] == "true"){ $i2->setName('ESPACIOS');
			}elseif($_SESSION['ETAPAS'] == "true"){ $i2->setName('ETAPAS');
			}elseif($_SESSION['SACRAMENTOS'] == "true"){ $i2->setName('SACRAMENTOS');}
			
			$i2->showDetalle();
		?>
		</li><?php
	}?>
		
	<?php
	if($_SESSION['MEJ_CUMPLEANIOS'] == "true" || $_SESSION['DETALLE_ESPACIO'] == "true" ){}
	else{?>
		<li><?php
				$i3 = new Objeto;
				$i3->setName('');
				$i3->setName('cant. Jovenes');
				$i3->showDetalle();
		?>
		</li><?php
	}?>
		
	<?php
	if( $_SESSION['DETALLE_ESPACIO'] == "true" )
	{
		/* el "+1" es porque agrego el titulo de la tabla*/
		$numFilasTotales = $_SESSION['NUM_MEJINOS'] + 1; 
		//echo "Número de filas: " . $_SESSION['NUM_MEJINOS'];
		for($numFilas =1; $numFilas <= ($numFilasTotales/2); $numFilas++ )
		{?>
			<li><?php
			//ECHO  "ESTOY" . $numFilas;
				$e[$numFilas] = new Objeto;	
				$e[$numFilas]->setName('');
				$e[$numFilas]->setId('');
				$e[$numFilas]->showDetalle();
				?>		
			</li>
		<?php
		}?>
		
	<?php
	}?>
		
	