
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";
	
	//$_SESSION['ID_COMUNIDAD'];
	//$_SESSION['MEJ_COMUNIDAD'];

	//columnas	
	$_SESSION['ESPACIOS']		="false";
	$_SESSION['ESTAPAS']		="false";
	$_SESSION['SACRAMENTOS']	="false";
	$_SESSION['MEJ_CUMPLEANIOS'] ="false";
	
	# deprecado  
	require "./funciones/claseProyecto.php";   //(PARA EL RAMA: LUEGO HABILITAR)

	# Antes que nada, Conectamos la DB y a las funciones
	//require "./conexion/conexionDB.php";

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	require "./secciones/head.php";
?>

  	<!------	abm del ABM---------------->
    <link href="./css/styleCalendario.css"	type="text/css" rel="stylesheet" />

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
					<?php /* Primer Tabla con descripcion del  PROYECTOS!!!
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
			<!-- Reemplaza esta sección en tu código -->
			<div class="calendarcolumn">
				<!-- Primera fila: botón VOLVER y título -->
				<div class="calendar-top-row">
					<!-- Enlaces de navegación (botón VOLVER) -->
					<ul id="cajaListaCalendar">
						<li>
							<?php
							$d0 = new Objeto;
							$d0->setId("1");
							$d0->setName("<b>VOLVER</b>");
							$d0->setHref("./mejComunidad.php?idProyecto=".$_SESSION['ID_COMUNIDAD']);
							$d0->show();
							?>
						</li>
					</ul>

					<!-- Encabezado del calendario -->
					<div class='logCalendar'>
						<h2>Calendario de Actividades</h2>
					</div>
				</div>

				<!-- Segunda fila: controles del calendario -->
				<div class="calendar-header">
					<div class="calendar-controls">
						<button id="prev-month">Anterior</button>
						<span class="month-year" id="month-year"></span>
						<button id="next-month">Siguiente</button>
					</div>
					<button id="add-event-btn">Agregar Evento</button>
				</div>
			</div>

			<!-- Calendario -->
			<div class="calendar" id="calendar"></div>
    
            <!-- Modal para añadir eventos -->
            <div id="event-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 id="modal-title">Agregar Evento</h2>
                    <form id="event-form">
                        <div class="form-group">
                            <label for="event-date">Fecha:</label>
                            <input type="date" id="event-date" required>
                        </div>
                        <div class="form-group">
                            <label for="event-title">Título:</label>
                            <input type="text" id="event-title" placeholder="Título del evento" required>
                        </div>
                        <div class="form-group">
                            <label for="event-description">Descripción:</label>
                            <textarea id="event-description" placeholder="Descripción del evento" rows="3"></textarea>
                        </div>
                        <button type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        
            <!-- Modal para ver/editar detalles de evento -->
            <div id="event-details-modal" class="modal">
                <div class="modal-content">
                    <span class="close" id="details-close">&times;</span>
                    <h2 id="event-details-title"></h2>
                    <p><strong>Fecha:</strong> <span id="event-details-date"></span></p>
                    <div class="event-details">
                        <p id="event-details-description"></p>
                    </div>
                    <div class="event-actions">
                        <button id="edit-event-btn">Editar</button>
                        <button id="delete-event-btn" class="delete-btn">Eliminar</button>
                    </div>
                </div>
            </div>

			<div class="cl"></div>
        </div>
    </div>


<!-- LLAMADA A LAS BIBLIOTECAS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.0/themes/base/jquery-ui.min.css">


    <!-- LLAMADA AL JS -->
    <script src="./secciones/calendario.js"></script>
	
	<!------------------------------------------------------------------------>

</body>
</html>











