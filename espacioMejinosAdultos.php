
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";

	$_SESSION['ID_COMUNIDAD'];
	$_SESSION['MEJ_COMUNIDAD'];
	$_SESSION['NUM_MEJINOS'] =0;

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";

	require "./conexion/conexionDB.php";
	require "./conexion/consultasMejinosEspacio.php";

	$_SESSION['NUM_MEJINOS'] = mysqli_num_rows($resultadoAdultos);
		
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
					<?php /*Primer Tabla con descripcion del  PROYECTOS!!!
					*/?>
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
						<?php /* Mensajito de aclaracion */?>
						<li><?php		//
							$d0 = new Objeto;
							$d0->setId("1");
							$d0->setName("<b>VOLVER</b>");
							$d0->setHref("./espaciosMej.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
							$d0->show();
							?>
						</li>
						<?php	
							$_SESSION['DETALLE_ESPACIO'] = "true";
							include "./secciones/ColumnaItem.php";   
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
						<?php	include "./secciones/EspaciosListaItem.php";   ?>
						<div class='logCenter'></div>
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
								<th>Edad.</th>
								<th>Etapa</th>
								<th>Comunidad</th>
								<th>Sacramento</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($filaAdultos = mysqli_fetch_assoc($resultadoAdultos)){
							?>
							<tr>
								<!-- <td> <?php //echo $filaAdultos['mejinos_id'] ?> </td>--> 
								<td> <?php echo $filaAdultos['mejinos_apellido'] ?> </td>
								<td> <?php echo $filaAdultos['mejinos_nombre'] ?> 	</td>
								<td> <?php echo $filaAdultos['mejinos_fechaNac'] ?> </td>
								<td> <?php echo $filaAdultos['edad'] ?> </td> <!-- LINEA AGREGADA POR QUERY--> 
								<td> 
									<?php 
									//echo $filaAdultos['mejinos_etapa'] 
									switch ($filaAdultos['mejinos_etapa']){
										case 1:	echo "TB.";			break;
										case 2:	echo "Semilla.";	break;
										case 3:	echo "Amigos.";		break;
										case 4:	echo "Disc.";		break;
										case 5:	echo "Apo.";		break;
										case 6:	echo "Testigos.";	break;
										default:
											echo "Monitor";
									}
									?>
								</td>
								<td> 
									<?php 
									//echo $filaAdultos['mejinos_comunidad'] 
									switch ($filaAdultos['mejinos_comunidad']){
										case 1:	echo "Solano";		break;
										case 2:	echo "Itatí";		break;
										case 3:	echo "B.Pastor";	break;
										default:	
											echo "NO TIENE";
									}
									?> 	
								</td>
								<td> 
									<?php 
									//echo $filaAdultos['mejinos_sacramento'] 
									switch ($filaAdultos['mejinos_sacramento']){
										case 1:	echo "BAUTISMO";		break;
										case 2:	echo "Comunión.";		break;
										case 3:	echo "Confirmación.";	break;
										default:	
											echo "NO TIENE";
									}
									?> 
								</td>
													
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












