
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 

	$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo']	= "root";
	
	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";
	
	require "./conexion/conexionDB.php";

	$sqlSelect = "SELECT * FROM `sacramento`;";
	
	$resultadoSelect = mysqli_query($conn,$sqlSelect);

	
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
					<b>	Detalle:<br></b>
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
						<?php /* Mensajito de aclaracion */?>
						<li><?php		//
							$d1 = new Objeto;
							$d1->setId("1");
							$d1->setName("VOVLER");
							$d1->setHref("./sacramentosMej.php");
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
						<?php /*	MENSAJE ACLARATIO SI ES NECESARIO*/?>
						<div class='logCenter'><b><u> SACRAMENTOS MEJ</u></b></div>
					</ul>
				</div>
			
				<div class="menu">
					<table>
						<thead>
							<tr>
								<th>ETAPAS</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php	
								while($filas = mysqli_fetch_assoc($resultadoSelect)){	
							?>
								<tr> <!--Cada TR es una fila en la tabla -->
									<td> <?php echo $filas['sacramento_nombre'] ?> </td>
									
									<td>
										<?php echo "<a href>EDITAR</a>"; ?>
										-
										<?php echo "<a href>ELIMINAR</a>"; ?>												
									</td>
								</tr>
							
							<?php } ?>
						</tbody>
					</table>
				</div>

				<table>
					<tbody>
						<tr>
							<td><!----------FORMULARIO DE ENVIO ------------------------>
								<form method="post" action="./conexion/conexionSacramentosABM.php" >			
									<table >
										<tr>
											<td>
												<p>Espacio para Agregar-Modificar-Borrar (ABM).</p>
											</td>
										</tr>
										<tr>
											<td>
												<p>Nombre de la ETAPA nueva:</p>
											</td>												
											<td>
												<input type= "text" name="nombreSacramento" required oninput="let p=this.selectionStart;
												this.value=this.value.toUpperCase();this.setSelectionRange(p, p); " />
											</td>
										</tr>
										<tr>
											<td><input type="submit" name= "enviar" value="ENVIAR" class="boton"></td>
											<td><input type="reset"  name= "borrar" value="BORRAR" class="boton"></td>
										</tr>
									</table> <br><br>
								</form>
							</td><!---------- FIN FORMULARIO DE ENVIO ------------------------>
						</tr>
					</tbody> 
				</table>
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












