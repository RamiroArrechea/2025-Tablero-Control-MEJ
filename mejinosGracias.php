
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	
	$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo']	= "root";
	
	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";

	
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
					<b>	QUE HACES PERRITO:<br></b>
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
							$d1 = new Objeto;
							$d1->setId("1");
							$d1->setName("Volver");
							$d1->setHref("./mejinosMej.php");
							$d1->show();
							?>
						</li>
						<?php			//  << 5 espacios vacios >>
							require "./secciones/VaciaColumnaItem.php";
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
						<div class='logCenter'><b><u> MEJINOS MEJ</u></b></div>
						
					</ul>
				</div>
			</div>
			<div class="rightcolumn">
				<div id="cajaLista">
					<div class='logCenter'>
						<h5> LA OPERACION HA SIDO CARGADO EXITOSAMENTE.
							<br>
							<br>
							<br>
							<br>
							Por Favor, volver a la pagina anterior para continuar.
						</h5>
							


						<!----------AGRADECIMIENTO ------------------------>		
	
					</div>
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












