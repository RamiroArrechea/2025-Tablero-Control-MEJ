
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 

	$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo']	= "root";
	

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";
	
	require "./conexion/conexionDB.php";

echo "estoy fuera";
	if(!isset($_POST['enviar']) ){
		echo "estoy dentro";
		$id= $_GET['id'];
					
		//$id= $_GET['id'];
	
		$sqlSelect = "SELECT * FROM `mejinos` where mejinos_id ='".$id."';";
		$resultadoSelect = mysqli_query($conn,$sqlSelect);

		$fila = mysqli_fetch_assoc($resultadoSelect);
	
		
		echo "etapa de pepe alonso=" . $fila['mejinos_etapa']; 
	}


	
	

	
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
						<?php /*	MENSAJE ACLARATIO SI ES NECESARIO*/?>
						<div class='logCenter'><b><u> - ABM -</u></b></div>					
					</ul>
				</div>
					
				<div class="menu">
					<table>
						<thead>
							<tr>
								<th>MODIFICAR</th>
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
											<tr><!-----APELLIDO:------------------------>
												<td><p>APELLIDO:.</p></td>
												<td>
													<input type= "text" name="mejinoApellido" required 
													value="<?php echo $fila['mejinos_apellido']; ?>"
													oninput="let p=this.selectionStart;
													this.value=this.value.toUpperCase();this.setSelectionRange(p, p); " />
												</td>
											</tr>
											<tr><!-----NOMRBE:------------------------>
												<td><p>NOMBRE:</p></td>
												<td>
													<input type= "text" name="mejinoNombre" required 
													value="<?php echo $fila['mejinos_nombre']; ?>"
													oninput="let p=this.selectionStart;
													this.value=this.value.toUpperCase();this.setSelectionRange(p, p); " />
												</td>
											</tr>
											<tr><!-----FECHA NACIMIENTO:------------------------>
												<td><p>FECHA NAC:</p></td>												
												<td>
													<input type= "date" name="mejinoFechaNac" required 
													value="<?php echo $fila['mejinos_fechaNac']; ?>"/>
												</td>
											</tr>
											<tr><!-----ETAPAS:------------------------>
												<td><p>ETAPAS:</p></td>												
												<td>
													<select id="etapas" name="mejinoEtapa" required >
														<?php $valor = $fila['mejinos_etapa'];?> 
														<option value="1" <?php echo ($valor == '1') ? 'selected' : ''; ?>>TIERRA BUENA</option>
														<option value="2" <?php echo ($valor == '2') ? 'selected' : ''; ?>>SEMILLA</option>
														<option value="3" <?php echo ($valor == '3') ? 'selected' : ''; ?>>AMIGOS</option>
														<option value="4" <?php echo ($valor == '4') ? 'selected' : ''; ?>>DISCIPULOS</option>
														<option value="5" <?php echo ($valor == '5') ? 'selected' : ''; ?>>APOSTOLES</option>
														<option value="6" <?php echo ($valor == '6') ? 'selected' : ''; ?>>TESTIGOS</option>
														<option value="7" <?php echo ($valor == '7') ? 'selected' : ''; ?>>MONITOR</option>
													</select>
												</td>
											</tr>
											<tr><!-----COMUNIDAD:------------------------>
												<td><p>COMUNIDAD:</p></td>												
												<td>
													<select id="comunidad" name="mejinoComunidad" required >
														<?php $valor = $fila['mejinos_comunidad'];?> 
														<option value="1" <?php echo ($valor == '1') ? 'selected' : ''; ?>>MEJ SOLANO</option>
														<option value="2" <?php echo ($valor == '2') ? 'selected' : ''; ?>>MEJ ITATI</option>
														<option value="3" <?php echo ($valor == '3') ? 'selected' : ''; ?>>ninguno</option>
													</select>
												</td>
											</tr>
											<tr><!-----SACRAMENTOS:------------------------>
												<td><p>SACRAMENTOS:</p></td>												
												<td>
													<select id="sacramento" name="mejinoSacramento" required  value="<?php echo $fila['mejinos_sacramento']; ?>" selected>
													<?php $valor = $fila['mejinos_sacramento'];?> 
														
														<option value="1" <?php echo ($valor == '1') ? 'selected' : ''; ?>>BAUTISMO</option>
														<option value="2" <?php echo ($valor == '2') ? 'selected' : ''; ?>>COMUNION</option>
														<option value="3" <?php echo ($valor == '3') ? 'selected' : ''; ?>>CONFIRMACION</option>
														<option value="4" <?php echo ($valor == '4') ? 'selected' : ''; ?>>ninguno</option>
													</select>
												</td>
											</tr>
											<tr><!-----DESICION PERSONAL:------------------------>
												<td><p>DESICION PERSONAL:</p></td>				
												<?php $valor = $fila['mejinos_desicion'];?> 								
												<td>
													<input type="radio" id="2" required name="mejinoDesicion" value="1" <?php echo ($valor == '1') ? 'checked' : ''; ?>>
													<label >Sigue</label>
												</td>
												<td>
												 	<input type="radio" id="2" required name="mejinoDesicion" value="0" <?php echo ($valor == '0') ? 'checked' : ''; ?>>
												 	<label >No sigue</label>
												</td>
											</tr>

											//////////////////////////////
											<tr>
												<td><input type="submit" name= "actualizar" value="ACTUALIZAR" class="boton"></td>
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
	<!-- FOOTER -->
	<?php
		require "./secciones/piePagina.php";
		//mysqli_close($conn); 
	?>
</body>
</html>












