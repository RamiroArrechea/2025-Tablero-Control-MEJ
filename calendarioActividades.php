
<?php
	
	# Antes que nada, inicializamos una sesion
	session_start(); 
	session_id(); 
	
	//$_SESSION['usuario'] = "Rama";
	$_SESSION['cargo'] = "root";
	
	$_SESSION['ID_COMUNIDAD'];
	$_SESSION['MEJ_COMUNIDAD'];

	//columnas	
	$_SESSION['ESPACIOS']		="false";
	$_SESSION['ESTAPAS']		="false";
	$_SESSION['SACRAMENTOS']	="false";
	$_SESSION['MEJ_CUMPLEANIOS'] ="false";
	
	# Antes que nada, Conectamos la DB y a las funciones
	require "./funciones/claseProyecto.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	require "./secciones/head.php";
?>

  	<!------	abm del ABM---------------->
    <link href="../../../css/styleCalendario.css"	type="text/css" rel="stylesheet" />

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
					Esta pantalla esta orientada para la necesidad de asignar nuevos proyectos.
				</ul>
			</div><!-- menu -->
			<div class="cl"></div>
		</div><br>
		<!------------------------------------------------------------------------>
		<!-- CONTENIDO --> 
		<div id="table">	<!-- TABLA -->
			<div class="calendarcolumn">
				<div id="cajaListaCalendar">
				<!-- Enlaces de navegación -->
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
						<h2>Calendario de Eventos</h2>
					</div>
			
					<!-- Resto del contenido del calendario -->
				</div>
			</div>
            

            <div class="calendar-header">
                <div class="calendar-controls">
					<button id="prev-month">Anterior</button>
                    <span class="month-year" id="month-year"></span>
                    <button id="next-month">Siguiente</button>
                </div>

                <button id="add-event-btn">Agregar Evento</button>
            </div>
    
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

    <!-- LLAMADA AL JS -->
    <script src="./secciones/calendario.js"></script>
	
	<!------------------------------------------------------------------------>

</body>
</html>











