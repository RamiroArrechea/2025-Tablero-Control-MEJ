<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/
			
?>

		<li><?php
			$i1 = new Objeto;
			$i1->setId("1");
			$i1->setName('ESPACIOS');				
			$i1->setHref("./espaciosMej.php?idProyecto=".$_SESSION['MEJ_COMUNIDAD']);
			//$i2->setHref("./espaciosMej.php?");
			$i1->show();
			?>
		</li>
		<li><?php
			$i3 = new Objeto;
			$i3->setId("3");
			$i3->setName('ETAPAS');			
			$i3->setHref("./etapasMej.php?idProyecto=".$_SESSION['MEJ_COMUNIDAD']);
			//$i3->setHref('./etapasMej.php');
			$i3->show();
			?>
		</li>
		<li><?php
			$i4 = new Objeto;
			$i4->setId("4");
			$i4->setName('SACRAMENTOS');
			$i4->setHref("./sacramentosMej.php?idProyecto=".$_SESSION['MEJ_COMUNIDAD']);
			//$i4->setHref('./sacramentosMej.php');
			$i4->show();
			?>
		</li>
		<li><?php
			$i5 = new Objeto;
			$i5->setId("4");
			$i5->setName('MEJINOS');
			$i5->setHref("./mejinosMej.php?idProyecto=".$_SESSION['MEJ_COMUNIDAD']);
			//$i5->setHref('./mejinosMej.php');
			$i5->show();
			?>
		</li>
		<li><?php
			$i6 = new Objeto;
			$i6->setId("5");
			$i6->setName('VACIA');
			$i6->show();
			?>
		</li>
