<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>


<li><?php
			$i2 = new Objeto;
			$i2->setId("2");
			$i2->setClase("");
			$i2->setName('JUNIOR');
			$i2->setHref('./espacioMejinosJunior.php');
			$i2->show();
			?>
		</li>
		<li><?php
			$i3 = new Objeto;
			$i3->setId("3");
			$i3->setName('PRE-ADO');
			$i3->setHref('./espacioMejinosPre.php');
			$i3->show();
			?>
		</li>
		<li><?php
			$i4 = new Objeto;
			$i4->setId("4");
			$i4->setName('ADOLESCENTES');
			$i4->setHref('./espacioMejinosAdo.php');
			$i4->show();
			?>
		</li>
		<li><?php
			$i5 = new Objeto;
			$i5->setId("4");
			$i5->setName('JOVENES');
			$i5->setHref('./espacioMejinosJovenes.php');
			$i5->show();
			?>
		</li>
		<li><?php
			$i6 = new Objeto;
			$i6->setId("5");
			$i6->setName('ADULTOS');
			$i6->setHref('./espacioMejinosAdultos.php');
			$i6->show();
			?>
		</li>

