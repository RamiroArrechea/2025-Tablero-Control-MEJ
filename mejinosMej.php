﻿
<?php

	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	/* Incluyo la referencia a la clase.*/	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";

	$_SESSION['ID_COMUNIDAD'];
	$_SESSION['MEJ_COMUNIDAD'];
	
	/* Incluyo la referencia a la clase.*/
	require "./funciones/claseProyecto.php";

	require "./conexion/conexionDB.php";

	///////////////////////////////////////////////////////////////////////////
	// Como la llamada es esta sola, la escribi aca, para no hacer otro archivo
	// pero toda las llamadas deberian estar en CONEXION 
	$sqlSelect = "SELECT * FROM `mejinos`
	where mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'";
	
	$resultado = mysqli_query($conn,$sqlSelect);
	////////////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	require "./secciones/head.php";
?>

	<!------	abm del ABM---------------->
    <link href="../../../css/screenAbm.css"	type="text/css" rel="stylesheet" />
    <link href="../../../css/styleAbm.css"	type="text/css" rel="stylesheet" />

	<!------	scrip del ABM---------------->
	<script src="../../../jquery-ui-1.9.0.custom/js/jquery-1.7.1.min.js"type="text/javascript" ></script>
	<script src="../../../jquery-ui-1.9.0.custom/js/functionsAbm.js"	type="text/javascript" ></script>

<body>

	<div id="abmTotal">

		<?php	
			require "./secciones/header.php";		
		?>
		
		<!------------------------------------------------------------------------>
		<div id="menu">	    <!--  BARRA AZUL-->
			<h1 class="title"><center>MEJINOS</center></h1>
			<div class="cl"></div>
		</div>
		<!--------->
		<div >	
			<table>
				<tbody>
					<tr>Cargar mejino nuevo: - 
						<?php echo "<a href='./mejinosABM_Agregar.php'>AGREGAR</a>"; ?>
					</tr>
				</tbody>
			</table>
		</div>
		<!------------------------------------------------------------------------>
		<div id="table">	<!-- TABLA DESCRIPCION DEL PROYECTO-->
			<div class="menu">
				<table>
					<thead>
						<tr>
							<th>#N°</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Fecha Nac.</th>
							<th>Etapa</th>
							<th>Comunidad</th>
							<th>Sacramento</th>
							<th>ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php	
							while($filas = mysqli_fetch_assoc($resultado)){
						?>
						<tr>
							<td> <?php echo $filas['mejinos_id'] ?> 		</td>
							<td> <?php echo $filas['mejinos_apellido'] ?> 	</td>
							<td> <?php echo $filas['mejinos_nombre'] ?> 	</td>
							<td> <?php echo $filas['mejinos_fechaNac'] ?> 	</td>
							<td> 
								<?php 
								//echo $filas['mejinos_etapa'] 
								switch ($filas['mejinos_etapa']){
									case 1:	echo "TB.";			break;
									case 2:	echo "Semilla.";		break;
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
								//echo $filas['mejinos_comunidad'] 
								switch ($filas['mejinos_comunidad']){
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
								//echo $filas['mejinos_sacramento'] 
								switch ($filas['mejinos_sacramento']){
									case 1:	echo "BAUTISMO";		break;
									case 2:	echo "Comunión.";		break;
									case 3:	echo "Confirmación.";	break;
									default:	
										echo "NO TIENE";
								}
								?> 
							</td>
												
							<td>
								<?php 
								echo "<a href='./mejinosABM_Modificar.php?id=".$filas['mejinos_id']."'>EDITAR</a>"; ?>
								-
								<?php 
								echo "<a href='./mejinosABM_Eliminar.php?id=".$filas['mejinos_id']."'>ELIMINAR</a>"; ?>
								
							</td>

						</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php 
				//mysqli_close($conn); ?>
			</div>
			

			<div class="cl"></div>
		</div><br><!-- TABLA -->
		<!------------------------------------------------------------------------>
		<!-- CONTENIDO --> 	<!-- TABLA CENTRAL DE LA PANTALLA -->
		<div id="table">	<!-- Tabla -->
				<!-- Tabla central con la lista de ABM de cada Item por cada  PROYECTOS!!!
					De ser necesario, cambiar los datos desde el archivo listaProyecto
				-->
			<div id ="block"></div>
			<div class="container">
				<div id="popupbox"></div>
				<div id="content">
					<?php //include_once ($view->contentTemplate); // incluyo el template que corresponda ?>
				</div>
			</div>
			<div class="cl"></div>
		</div> <!-- table -->
		<!------------------------------------------------------------------------>
		<div id="table">	<!-- 3º TABLA  DEL PROYECTO-->
			<div class="menu">
				<ul>
					<!-- Ultima Tabla con Acceso a la carga del PROYECTOS!!!-->
					
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>

					<div class='logDer'>
						<?php  echo "<a href='./mejinosABM_Agregar.php'>AGREGAR</a>"; ?>
					</div>
					
					<div class="cl"></div>
					
				</ul>
			</div>	<!-- menu -->
			<div class="cl"></div>
		</div><br> <!-- table -->

	</div><!-- abmTotal -->

	<!------------------------------------------------------------------------>
	<!-- FOOTER -->
	<div id="footer_wrapper">
		<h5><div id="footer_abmTotal">

			<?php
				switch ($_SESSION['cargo']){
					case 'root':
					echo $_SESSION['cargo'] ;
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
				Copyright © 2024 <a href="" target="_new">MEJ</a>
			</div>

		<div class="cl"></div>
    </div></h5> 

</body>
</html>










