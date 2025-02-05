<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>
		<li>
			<?php
				$ini =0;
				while($ini <6){	
					$i = new Objeto;
					$i->setId('$i');
					$i->setClase("");
					$i->setName('');
					$i->show();
					$ini++;
				}
				?>
		</li>
	