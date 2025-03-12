<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>
		<li><?php
			$i1 = new Objeto;
			$i1->setId("1");
			$i1->setName('No tiene');
			$i1->setHref('./sacramentosNoTiene.php');			
			$i1->show();
			?>
		</li>
		<li><?php
			$i2 = new Objeto;
			$i2->setId("2");
			$i2->setName('BAUTISMO');
			$i2->setHref('./sacramentosBautismo.php');
			$i2->show();
			?>
		</li>
		<li><?php
			$i3 = new Objeto;
			$i3->setId("3");
			$i3->setName('COMUNION');
			$i3->setHref('./sacramentosComunion.php');
			$i3->show();
			?>
		</li>
		<li><?php
			$i4 = new Objeto;
			$i4->setId("4");
			$i4->setName('CONFIRM.');
			$i4->setHref('./sacramentosConfirmacion.php');
			$i4->show();
			?>
		</li>
		<li><?php
			$i5 = new Objeto;
			$i5->setId("5");
			$i5->setName('');
			$i5->showDetalle();
			?>
		</li>
		<li><?php
			$i6 = new Objeto;
			$i6->setId("6");
			$i6->setName('Cant. Mejinos');
			$i6->showDetalle();
			?>
		</li>

