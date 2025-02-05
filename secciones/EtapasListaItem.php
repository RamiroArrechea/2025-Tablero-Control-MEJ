<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>
		<li><?php
			$i1 = new Objeto;
			$i1->setId("1");
			//$i1->setClase("");
			$i1->setName('TIERRA BUENA');
			//$i1->setHref('');
			$i1->showDetalle();
			?>
		</li>
		<li><?php
			$i2 = new Objeto;
			$i2->setId("2");
			$i2->setName('SEMILLA');
			$i2->showDetalle();
			?>
		</li>
		<li><?php
			$i3 = new Objeto;
			$i3->setId("3");
			$i3->setName('AMIGOS');
			$i3->showDetalle();
			?>
		</li>
		<li><?php
			$i4 = new Objeto;
			$i4->setId("4");
			$i4->setName('DISCIPULOS');
			$i4->showDetalle();
			?>
		</li>
		<li><?php
			$i5 = new Objeto;
			$i5->setId("5");
			$i5->setName('APOSTOLES');
			$i5->showDetalle();
			?>
		</li>
		<li><?php
			$i6 = new Objeto;
			$i6->setId("6");
			$i6->setName('TESTIGOS');
			$i6->showDetalle();
			?>
		</li>
