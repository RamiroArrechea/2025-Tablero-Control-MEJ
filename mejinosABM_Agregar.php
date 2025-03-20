
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 

	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo']	= "root";
	

	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";
	
	require "./conexion/conexionDB.php";

	
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
								<th><h4>AGREGAR</h4></th>
							</tr>
						</thead>						
						<tbody>
							<tr>
								<td><!----------FORMULARIO DE ENVIO ------------------------>
									<form method="post" action="./conexion/conexionMejinosABM.php" >			
										<table >
											<tr><!-----APELLIDO:------------------------>
												<td><p>APELLIDO:.</p></td>
												<td>
													<input type= "text" name="mejinoApellido" required oninput="let p=this.selectionStart;
													this.value=this.value.toUpperCase();this.setSelectionRange(p, p); " />
												</td>
											</tr>
											<tr><!-----NOMRBE:------------------------>
												<td><p>NOMBRE:</p></td>												
												<td>
													<input type= "text" name="mejinoNombre" required oninput="let p=this.selectionStart;
													this.value=this.value.toUpperCase();this.setSelectionRange(p, p); " />
												</td>
											</tr>
											<tr><!-----FECHA NACIMIENTO:------------------------>
												<td><p>FECHA NAC:</p></td>												
												<td>
													<input type= "date" name="mejinoFechaNac" />
												</td>
											</tr>
											<tr><!-----ETAPAS:------------------------>
												<td><p>ETAPAS:</p></td>												
												<td>
													<select id="etapas" name="mejinoEtapa">
														<option value="1">TIERRA BUENA</option>
														<option value="2">SEMILLA</option>
														<option value="3">AMIGOS</option>
														<option value="4">DISCIPULOS</option>
														<option value="5">APOSTOLES</option>
														<option value="6">TESTIGOS</option>
														<option value="7">MONITOR</option>
													</select>
												</td>	
											</tr>
											<tr><!-----COMUNIDAD:------------------------>
												<td><p>COMUNIDAD:</p></td>												
												<td>
													<select id="comunidad" required name="mejinoComunidad">
														<option value="0">-Seleccione una opcion</option>
														<option value="1">MEJ SOLANO</option>
														<option value="2">MEJ ITATI</option>
														<option value="3">ninguno</option>
													</select>
												</td>
											</tr>
											<tr><!-----SACRAMENTOS:------------------------>
												<td><p>SACRAMENTOS:</p></td>												
												<td>
													<select id="sacramento" required name="mejinoSacramento">
														<option value="1">BAUTISMO</option>
														<option value="2">COMUNION</option>
														<option value="3">CONFIRMACION</option>
														<option value="4">ninguno</option>
													</select>
												</td>
											</tr>										
											<tr><!-----DESICION PERSONAL:------------------------>
												<td><br><p>DESICION PERSONAL:</p></td>												
												<td>
													<input type="radio" id="1" name="mejinoDesicion" value="1" required>
													<label >Sigue</label>
												</td>
												<td>
													<input type="radio" id="2" name="mejinoDesicion" value="0" required>
													<label >No sigue</label>
												</td>
											</tr>
											
											<tr><!-----BOTONES:------------------------>
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
			</div>

			<div class="cl"></div>
		</div>
	</div>
	
	<!------------------------------------------------------------------------>
	<!-- FOOTER -->
	<?php
		require "./secciones/piePagina.php";
		mysqli_close($conn); 
	?>
</body>
</html>












