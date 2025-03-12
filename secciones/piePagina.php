<?php
	//Este archivo representa el PIE DE PAGINA de todas las pantallas !!
?>

<div id="footer_wrapper">
<h5><div id="footer">
		<?php
			switch ($_SESSION['cargo']){
				case 'root':
				//echo $_SESSION['cargo'] ;
		?>
				<div class="col one_third">
					<a href="./index.php">INICIO</a>::
					<a href="./espaciosMej.php">ESPACIOS</a>::
					<a href="./etapasMej.php">ETAPAS</a>::
					<a href="./mejinosMej.php">MEJINOS</a>
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
        <div class="col one_third no_margin_right">
            Copyright © 2025 <a href="" target="_new">MEJ</a>
        </div>

		<div class="cl"></div>
    </div></h5> 









