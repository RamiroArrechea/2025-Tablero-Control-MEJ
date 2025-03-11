
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
		case 1:
			$_SESSION['MEJ_COMUNIDAD'] = "MEJ SOLANO";
			break;
		case 2:
			$_SESSION['MEJ_COMUNIDAD'] = "MEJ ITATI";
			break;
		default:
			$_SESSION['MEJ_COMUNIDAD']	= "otro";
			break;

	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
					*/
					?>
					<b>	Comunidad: <?php echo $_SESSION['MEJ_COMUNIDAD']?> <br></b>
					Esta pantalla esta orientada para la necesidad de asignar nuevos proyectos.
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
						<!-- Tabla izquierda con la lista de Item dentro del proyecto!!!
							De ser necesario, cambiar los datos desde el archivo columnaItem.
						-->
						<li><?php		# Item << Avance >>
							$d0 = new Objeto;
							$d0->setId("1");
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
						<?php /*	Comentario, por esi es necesario del tablero !!!
						*/?>
							<div class='logCenter'><b><u>Seleccion su pantalla</u></b></div>
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
	<!-- FOOTER -->
	<?php
		require "./secciones/piePagina.php";
	?>
</body>
</html>












