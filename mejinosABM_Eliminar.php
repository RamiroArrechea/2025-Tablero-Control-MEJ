
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 

	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo']	= "root";
	

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";
	
	require "./conexion/conexionDB.php";


	if(!isset($_POST['enviar']) ){
		$id= $_GET['id'];
					
		//$id= $_GET['id'];
	
		$sqlSelect = "SELECT * FROM `mejinos` where mejinos_id ='".$id."';";
		$resultadoSelect = mysqli_query($conn,$sqlSelect);

		$fila = mysqli_fetch_assoc($resultadoSelect);
			
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
					<b>	Comunidad: <?php echo $_SESSION['MEJ_COMUNIDAD']?> <br></b>
					Esta pantalla esta orientada para visualizar rapidamente datos importantes para nosotros.
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
							$d1->setHref("./mejinosMej.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
							$d1->show();
							?>
						</li>

						<?php	//  << 5 espacios vacios >>
							require "./secciones/VaciaColumnaItem.php";
						?>	
					</ul>
				</div>
			</div>

			<div class="rightcolumn">
					
				<div class="menu">
					<table>
					<thead>
							<tr>
								<th><h4>ELIMINAR</h4></th>
							</tr>
						</thead>						
						<tbody>
							<tr>
								<td><!----------FORMULARIO DE ENVIO ------------------------>
									<form method="post" action="./conexion/conexionMejinosABM.php" >									
										<table >
											<tr>
												<td><input type="hidden" name= "id" value="<?php echo $fila['mejinos_id']; ?>" ></td>
											</tr>
											<tr>
												<td>
													<p>Confirma que desea eliminar a :</p>
												</td>												
												<td>
													<input type= "text" name="nombreEspacio" required 
													value="<?php echo $fila['mejinos_apellido']; ?>" 
													disabled/>
												</td>
												<td>
													<input type= "text" name="nombreEspacio" required 
													value="<?php echo $fila['mejinos_nombre']; ?>" 
													disabled/>
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












