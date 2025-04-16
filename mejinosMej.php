
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
	// Como la llamada es esta sola, la escribi acá, para no hacer otro archivo
	// pero toda las llamadas deberian estar en CONEXION 

	$filtro = "";
	if(isset($_POST['buscador']) && $_POST['buscador'] != "") {
		$buscadorSanitizado = mysqli_real_escape_string($conn, $_POST['buscador']);
		$filtro = " AND `mejinos_apellido` LIKE '%".$buscadorSanitizado."%'";
	}
	
	$sqlSelect = "SELECT * FROM `mejinos` 
				  WHERE mejinos_comunidad = '".$_SESSION['ID_COMUNIDAD']."'".$filtro;
	
	$resultado = mysqli_query($conn, $sqlSelect);
	////////////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
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
		<div id="menu_abm">	    <!--  BARRA AZUL-->
			<h1 class="title"><center>MEJINOS</center></h1>
			
		</div>

		<div class="fila-acciones">
			<div class="accion-izquierda">
				<span>Cargar mejino nuevo: -</span>
				<?php echo "<a href='./mejinosABM_Agregar.php'>AGREGAR</a>"; ?>
			</div>

			<div class="contenedor-buscador">
				<form action="" method="POST">
					<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="boton-limpiar">Ver todos</a>	
					<input type="text" name="buscador" id="buscar-mejinos" 
						placeholder="Buscar x apellido..." class="input-buscador"
						value="<?php echo isset($_POST['buscador']) ? htmlspecialchars($_POST['buscador']) : ''; ?>"
						required oninput="let p=this.selectionStart;
						this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
					/>					
					<button type="submit" class="boton-buscar">Buscar</button>					
				</form>
			</div>

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
		<!--<div id="table">	<!-- Tabla -->
				<!-- Tabla central con la lista de ABM de cada Item por cada  PROYECTOS!!!
					De ser necesario, cambiar los datos desde el archivo listaProyecto
				-->
			<!--<div id ="block"></div>
			<div class="container">
				<div id="popupbox"></div>
				<div id="content">
					<?php //include_once ($view->contentTemplate); // incluyo el template que corresponda ?>
				</div>
			</div>
			<div class="cl"></div>
		</div> <!-- table -->
		<!------------------------------------------------------------------------>


	</div><!-- abmTotal -->

	<!------------------------------------------------------------------------>
	<!-- FOOTER -->
	<?php
		require "./secciones/footerAbm.php";
		mysqli_close($conn); 
	?>
	
</body>
</html>










