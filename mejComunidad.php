
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	# Establesco la conexion con la base de datos.
	//include "../conexion/conexionDB.php";
	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";

	//columnas	
	$_SESSION['ESPACIOS']		="false";
	$_SESSION['ETAPAS']			="false";
	$_SESSION['SACRAMENTOS']	="false";
	$_SESSION['MEJ_CUMPLEANIOS'] ="false";

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";

	if (isset($_GET['idProyecto'])) {
		$_SESSION['ID_COMUNIDAD'] = $_GET['idProyecto'];
	}

	switch($_SESSION['ID_COMUNIDAD']){
		case 1:	$_SESSION['MEJ_COMUNIDAD'] = "MEJ SOLANO";	break;
		case 2:	$_SESSION['MEJ_COMUNIDAD'] = "MEJ ITATI";	break;
		default:	$_SESSION['MEJ_COMUNIDAD']	= "otro";	break;
	}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
	require "./secciones/head.php";
?>

<body>
	<div id="wrapper">
		<?php
			require "./secciones/header.php";
		?>
		
		<!------------------------------------------------------------------------>
		<div id="menu">	    <!--  BARRA AZUL-->
			<ul id="navigation" class="nav-main"></ul>
		</div> 
		<!------------------------------------------------------------------------>
		<div id="table">	<!-- TABLA DETALLE DEL PROYECTO-->
			<div class="menu">
				<ul>
					<?php	//	Primer Tabla con descripcion del  PROYECTOS!!!		?>
					<b>	Comunidad: <?php echo $_SESSION['MEJ_COMUNIDAD']?> <br></b>
					Esta pantalla esta orientada para visualizar rapidamente datos importantes para nosotros.
				</ul>
			</div><!-- menu -->
			<div class="cl"></div>
		</div><br><!-- TABLA -->
		<!------------------------------------------------------------------------>
		<!-- CONTENIDO --> 
		<div id="table">	<!-- TABLA -->
			<div class="leftcolumn">
				<div id="navvy">
					<ul id="navvylist">
						<!-- Comentario de ser necesario!!! 	-->
						<li><?php
							$d0 = new Objeto;
							$d0->setName("<b>VOLVER</b>");
							$d0->setHref("./index.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
							$d0->show();
							?>
						</li>
						 
						<?php	require "./secciones/ComunidadColumnaItem.php";   ?>					
					</ul>
				</div>
			</div>

			<div class="rightcolumn">
				<div id="cajaLista">
					<ul id="cajaLista">
						<?php /*	Comentario, por esi es necesario del tablero !!! -
						*/?>
							<div class='logCenter'>Seleccion su pantalla</div>
					</ul>
				</div>
			</div>
			<div class="rightcolumn">
				<div id="cajaLista">
					<ul id="cajaLista">
						<!---------------TODOS-los-Renglones-------------------------->
						<?php	//include "./secciones/listaTableroSemaforo.php";   ?>
					</ul></b>
				</div>
			</div>

			<div class="cl"></div>
		</div> <!-- table -->
	</div><!-- wrapper -->

	<!------------------------------------------------------------------------>
	<?php 
		/*FOOTER*/
		require "./secciones/footer.php";
	?>
</body>
</html>












