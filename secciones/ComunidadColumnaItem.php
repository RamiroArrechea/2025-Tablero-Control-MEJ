<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/
	
?>
		<li><?php
			$i1 = new Objeto;
			$i1->setId("5");
			$i1->setName('CALENDARIO ACTIVIDADES');
			$i1->setHref("./calendarioActividades.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$i1->show();
			?>
		</li>
		<li><?php
			$i2 = new Objeto;
			$i2->setId("1");
			$i2->setName('ESPACIOS');
			$i2->setHref("./espaciosMej.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$i2->show();
			?>
		</li>
		<li><?php
			$i3 = new Objeto;
			$i3->setId("3");
			$i3->setName('ETAPAS');
			$i3->setHref("./etapasMej.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$i3->show();
			?>
		</li>
		<li><?php
			$i4 = new Objeto;
			$i4->setId("4");
			$i4->setName('SACRAMENTOS');
			$i4->setHref("./sacramentosMej.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$i4->show();
			?>
		</li>
		<li><?php
			$i5 = new Objeto;
			$i5->setId("5");
			$i5->setName('CUMPLEAÑOS');
			$i5->setHref("./cumpleaniosMejinos.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$i5->show();
			?>
		</li>
		<li><?php
			$i6 = new Objeto;
			$i6->setId("4");
			$i6->setName('MEJINOS');
			$i6->setHref("./mejinosMej.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
			$i6->show();
			?>
		</li>
