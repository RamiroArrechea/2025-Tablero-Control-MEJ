
<?php

	/* ////////////////////////////////////////////////////
		TABLERO DE CONTROL: MEJ
	Se realiza la creación y puesta funcional de la primer versión
	de este tablero de control.

	autor: RAMIRO ARRECHEA
	fecha: 01-01-2005

	version: 1.0.0

	*///////////////////////////////////////////////////////

	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	
	$_SESSION['usuario'] = "Hola Mej";
	$_SESSION['cargo'] = "root";

	# Antes que nada, Conectamos la DB y a las funciones
	require "./conexion/conexionDB.php";
	require "./funciones/claseProyecto.php";

	
	//require "./conexion/consultasMejinos.php";
	require "./conexion/consultasColorSemaforos.php";

	//CREAMOS VARIABLES, que se van a usar para los semafors:	
	$_SESSION['idComunidad'] = 0;
	$_SESSION['totalMejinos'] = 0;
	$_SESSION['SEM_ESPACIOS'] = "off";
	$_SESSION['SEM_ETAPAS'] 	= "off";
	$_SESSION['SEM_SACRAMENTOS'] = "off";

	
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
					<?php 
					/*	Primer Tabla con descripcion del  PROYECTOS!!!
					*/			
					?>
					<b>	Descripcion:<br></b>
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
						<li><?php
							$d0 = new Objeto;
							$d0->setId("1");
							$d0->setName("<b>Comunidad</b>");
							$d0->setHref("");
							$d0->show();
							?>
						</li>
						<?php	include "./secciones/IndexColumnaItem.php";   

						?>
					</ul>
				</div>
			</div>

			<div class="rightcolumn">
				<div id="cajaLista">
					<ul id="cajaLista">
						<?php /*	Detalle de los Items en la parte superior del tablero !!!
								De ser necesario, cambiar los datos desde el archivo listaItem
						*/?>
						<?php	include "./secciones/IndexListaItem.php";   ?>
						<div class='logCenter'></div>
					</ul>
				</div>
			</div> 
			
			<div class="rightcolumn">
				<div id="cajaLista">
						<ul id="cajaLista">
							<!---------------TODOS-los-Renglones-------------------------->
							<?php 
								//echo "ramiro - " . $cantComunidades['total'];
								//echo "ramiro - " . $cantComu;
								$cantComu = obtenerCantidadComunidad();
								
								for($cant = 1; $cant<= $cantComu; $cant++)
								{	
									$cantMejinos = obtenerCantidadMejinos($cant);
									$_SESSION['SEM_ESPACIOS']	= obtenerSemaforoEspacio($cantMejinos);
									$_SESSION['SEM_ETAPAS']		= obtenerSemaforoEtapas($cantMejinos);
									$_SESSION['SEM_SACRAMENTOS']= obtenerSemaforoSacramentos($cantMejinos);
									$_SESSION['SEM_MEJINOS']	= obtenerSemaforoMejinos($cantMejinos);
									
									//Pinto la pantalla con los colores.
									require "./secciones/IndexTableroSemaforo.php";   
								}
							?>
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








