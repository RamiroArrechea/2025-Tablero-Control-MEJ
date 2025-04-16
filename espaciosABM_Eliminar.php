
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 

	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo']	= "root";
	

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";
	
	require "./conexion/conexionDB.php";

echo "estoy fuera";
	if(!isset($_POST['enviar']) ){
		echo "estoy dentro";
		$id= $_GET['id'];
					
		//$id= $_GET['id'];
	
		$sqlSelect = "SELECT * FROM `espacio` where espacio_id ='".$id."';";
		$resultadoSelect = mysqli_query($conn,$sqlSelect);

		$fila = mysqli_fetch_assoc($resultadoSelect);
		$nombre = $fila['espacio_nombre'];
	}

	
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
					<?php /* Mensajito de aclaracion */?>
					<b>	QUE HACES PERRITO:<br></b>
					Esta pantalla esta orientada para la necesidad de asignar nuevos proyectos.
				</ul>
			</div>
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
							$d1 = new Objeto;
							$d1->setId("1");
							$d1->setName("VOLVER");
							$d1->setHref("./espaciosMej.php");
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
						<div class='logCenter'><b><u> ESPACIOS MEJ</u></b></div>					
					</ul>
				</div>
					
				<div class="menu">
					<table>
						<thead>
							<tr>
								<th>ABM - Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><!----------FORMULARIO DE ENVIO ------------------------>
									<form method="post" action="./conexion/conexionEspaciosABM.php" >									
										<table >
											<tr>
												<td>
													<p>Espacio para Agregar-Modificar-Borrar (ABM).</p>
												</td>
											</tr>
											<tr>
												<td>
													<p>Elimine el nombre del Espacio:</p>
												</td>												
												<td>
													<input type= "text" name="nombreEspacio" required 
													value="<?php echo $nombre; ?>"
													oninput="let p=this.selectionStart;
													this.value=this.value.toUpperCase();
													this.setSelectionRange(p, p); " />

													<td><input type="hidden" name= "id" value="<?php echo $id; ?>" ></td>
												</td>
											</tr>
											<tr>
												<td><input type="submit" name= "eliminar" value="ELIMINAR" class="boton"></td>
												<td><input type="reset"  name= "borrar" value="BORRAR" class="boton"></td>
											</tr>
										</table> <br><br>
									</form>
								</td><!---------- FIN FORMULARIO DE ENVIO ------------------------>
							</tr>
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












