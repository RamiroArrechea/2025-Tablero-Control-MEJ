
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	# Establesco la conexion con la base de datos.
	//include "../conexion/conexionDB.php";
	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";

	if (isset($_GET['idProyecto'])) {
		$_SESSION['ID_COMUNIDAD'] = $_GET['idProyecto'];
	}

	switch($_SESSION['ID_COMUNIDAD']){
		case 1:	$_SESSION['MEJ_COMUNIDAD'] = "MEJ SOLANO";	break;
		case 2:	$_SESSION['MEJ_COMUNIDAD'] = "MEJ ITATI";	break;
		default:	$_SESSION['MEJ_COMUNIDAD']	= "otro";	break;
	}

	//columnas	
	$_SESSION['ESPACIOS']		="false";
	$_SESSION['ESTAPAS']		="false";
	$_SESSION['SACRAMENTOS']	="false";
	$_SESSION['MEJ_CUMPLEANIOS'] ="false";
	$_SESSION['DETALLE_ESPACIO'] = "false";

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";

	require "./conexion/conexionDB.php";
	require "./conexion/consultasMejinosEtapas.php";

	
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
					<?php /*Primer Tabla con descripcion del  PROYECTOS!!!
							De ser necesario, cambiar los datos desde el archivo descripcionProyecto
					*/?>
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
						<li><?php
							$d0 = new Objeto;
							$d0->setId("1");
							$d0->setName("<b>VOLVER</b>");
							$d0->setHref("./mejComunidad.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
							$d0->show();
							?>
						</li>
						
						<?php	
							$_SESSION['ETAPAS'] = "true";
							include "./secciones/ColumnaItem.php";   ?>
						
					</ul>
				</div>
			</div>

			<div class="rightcolumn">
				<div id="cajaLista">
					<ul id="etapasLista">
						<?php /*	Detalle de los Items en la parte superior del tablero !!!
								De ser necesario, cambiar los datos desde el archivo listaItem
						*/?>
						<?php	include "./secciones/EtapasListaItem.php";   ?>
						<div class='logCenter'></div>
					</ul>
				</div>
			</div>
			<div class="rightcolumn">
				<div id="cajaLista">
					<ul id="etapasLista">
						<!---------------TODOS-los-Renglones-------------------------->
						<?php	include "./secciones/EtapasTableroSemaforo.php";   ?>
					</ul>
					<ul id="etapasLista">
						<?php	include "./secciones/EtapasListaCantidadJovenes.php";   ?>
					</ul>
				</div>
			</div>

			<div class="cl"></div>
		</div>
	</div>
	
	<!------------------------------------------------------------------------>
	<?php 
		/*FOOTER*/
		require "./secciones/footer.php";
	?>
	
</body>
</html>












