
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	# Establesco la conexion con la base de datos.
	//include "../conexion/conexionDB.php";
	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";

	$_SESSION['ID_COMUNIDAD'];
	$_SESSION['MEJ_COMUNIDAD'];

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";

	require "./conexion/conexionDB.php";
	require "./conexion/consultasMejinosEspacio.php";

		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
					Esta pantalla esta orientada para la necesidad de asignar nuevos proyectos.
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
						<?php	include "./secciones/ColumnaItem.php";   ?>
						
					</ul>
				</div>
			</div>

			<div class="rightcolumn">
				<div id="cajaLista">
					<ul id="cajaLista">
						<?php /*	Detalle de los Items en la parte superior del tablero !!!
								De ser necesario, cambiar los datos desde el archivo listaItem
						*/?>
						<?php	
							$_SESSION['DETALLE_ESPACIO'] = "true";
							include "./secciones/EspaciosListaItem.php";   
						?>
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
								while($filaJovenes = mysqli_fetch_assoc($resultadoJovenes)){
							?>
							<tr>
								<!-- <td> <?php //echo $filaJunior['mejinos_id'] ?> </td>--> 
								<td> <?php echo $filaJovenes['mejinos_apellido'] ?> </td>
								<td> <?php echo $filaJovenes['mejinos_nombre'] ?> 	</td>
								<td> <?php echo $filaJovenes['mejinos_fechaNac'] ?> </td>
								<td> <?php echo $filaJovenes['edad'] ?> </td> <!-- LINEA AGREGADA POR QUERY--> 
								<td> 
									<?php 
									//echo $filaJovenes['mejinos_etapa'] 
									switch ($filaJovenes['mejinos_etapa']){
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
									//echo $filaJovenes['mejinos_comunidad'] 
									switch ($filaJovenes['mejinos_comunidad']){
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
									//echo $filaJovenes['mejinos_sacramento'] 
									switch ($filaJovenes['mejinos_sacramento']){
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
					<?php 
					//mysqli_close($conn); ?>
				</div>
			</div>

			<div class="cl"></div>
		</div>
	</div>
	
	<!------------------------------------------------------------------------>
	<!-- FOOTER -->
	<?php
		require "./secciones/piePagina.php";
	?>
</body>
</html>












