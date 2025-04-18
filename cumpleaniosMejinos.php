
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";

	$_SESSION['ID_COMUNIDAD'];
	$_SESSION['MEJ_COMUNIDAD'];

	//columnas	
	$_SESSION['ESPACIOS']		="false";
	$_SESSION['ESTAPAS']		="false";
	$_SESSION['SACRAMENTOS']	="false";
	$_SESSION['MEJ_CUMPLEANIOS'] ="false";
	
	
	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";

	require "./conexion/conexionDB.php";
	require "./conexion/consultasCumpleaniosMejinos.php";
		
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	require "./secciones/head.php";
?>

		<!------	abm del ABM---------------->
		<link href="../../../css/screenAbm.css"	type="text/css" rel="stylesheet" />


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
		</div><br>
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
							$_SESSION['MEJ_CUMPLEANIOS'] = "true";
							include "./secciones/ColumnaItem.php";   
						?>
						
					</ul>
				</div>
			</div>

			<div class="rightcolumn">
				<div id="cajaLista">
					<ul id="cajaLista">
						<?php /*	COMENTARIO		*/?>
							<div class='logCenter'><b>CUMPLEN AÑOS ESTE MES:</b></div>
					</ul>
				</div>
			</div>
			<div class="rightcolumn">
				<div class="menu">
					<table>
						<thead>
							<tr>
								<!-- <th>#N°</th>-->
								<th>Apellido</th>
								<th>Nombre</th>
								<th>Fecha Nac.</th>
								<th>Cumpleaños.</th>
							</tr>
						</thead>
						<tbody>
							<?php	
								while($fila = mysqli_fetch_assoc($resultadoCumple)){
							?>
							<tr>
								<!-- <td> <?php //echo $filaJunior['mejinos_id'] ?> </td>--> 
								<td> <?php echo $fila['mejinos_apellido'] ?> </td>
								<td> <?php echo $fila['mejinos_nombre'] ?> 	</td>
								<td> <?php echo $fila['mejinos_fechaNac'] ?> </td>
								<td> <?php echo $fila['edad'] ?> </td> <!-- LINEA AGREGADA POR QUERY--> 
													
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="cl"></div>
		</div>
	</div>
	
	<!------------------------------------------------------------------------>
	<?php 
		/*FOOTER*/
		require "./secciones/footer.php";
		mysqli_close($conn); 
	?>

</body>
</html>












