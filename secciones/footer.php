<?php
	//Este archivo representa el PIE DE PAGINA de todas las pantallas !!
?>

<div id="footer_wrapper">
	<h5><div id="footer">
		<?php
			switch ($_SESSION['cargo']){
				case 'root':
				//Para evitar cualquier "rotura" ..por defecto hago que sea MEJ SOLANO				
				if($_SESSION['ID_COMUNIDAD'] == 3){
					$_SESSION['ID_COMUNIDAD'] =1;	
				}
				
		?>
				<div id="footer_widget">
					<a href="./index.php">INICIO</a>::
					<a href="./espaciosMej.php?idProyecto=<?php echo $_SESSION['ID_COMUNIDAD']; ?>">ESPACIOS</a>::
					<a href="./etapasMej.php?idProyecto=<?php echo $_SESSION['ID_COMUNIDAD']; ?>">ETAPAS</a>::
					<a href="./mejinosMej.php?idProyecto=<?php echo $_SESSION['ID_COMUNIDAD']; ?>">MEJINOS</a>
				</div>
		<?php
				break;
				case 'lider':
				echo $_SESSION['cargo'] ;
		?>
				<div class="col one_third">
					<a href="">INICIO</a>::
					<a href="">PROYECTOS</a>::
					<a href="">AREAS</a>::
					<a href="">PANTALLAS</a>
				</div>
		<?php
				break;
				default :
				echo $_SESSION['cargo'] ;
		?>
				<div class="col one_third">
					<a href="index.php">INICIO</a>::
					<a href="">PROYECTOS</a>::
				</div>
		<?php
				break;
			}
		?>
        <div id="footer_widget">
            Copyright © 2025 <a href="" target="_new">MEJ</a>
        </div>

		<div class="cl"></div>
    </div></h5> 
</div>









