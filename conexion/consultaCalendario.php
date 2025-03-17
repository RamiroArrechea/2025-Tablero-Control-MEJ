<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Asegurarse de que la conexión a la base de datos está disponible
if (!isset($conn) && file_exists("./conexionDB.php")) {
    require_once "./conexionDB.php";
} else if (!isset($conn) && file_exists("../conexion/conexionDB.php")) {
    require_once "../conexion/conexionDB.php";
}

// Verificar si hay una petición AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    switch ($action) {
        case 'getEvents':
            getEvents();
            break;
        case 'addEvent':
            addEvent();
            break;
        case 'updateEvent':
            updateEvent();
            break;
        case 'deleteEvent':
            deleteEvent();
            break;
        default:
            sendResponse(false, 'Acción no reconocida');
            break;
    }
}

/**
 * Obtener eventos de un mes específico
 */
function getEvents() {
    global $conn;
    
    // Obtener parámetros
    $year = isset($_POST['year']) ? intval($_POST['year']) : date('Y');
    $month = isset($_POST['month']) ? intval($_POST['month']) : date('m');
    $id_comunidad = isset($_POST['id_comunidad']) ? intval($_POST['id_comunidad']) : (isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 0);
    
    // Validar que el ID de comunidad existe
    if (!$id_comunidad) {
        sendResponse(false, 'ID de comunidad no válido');
        return;
    }
    
    // Construir consulta para obtener eventos del mes seleccionado
    $start_date = "$year-$month-01";
    $end_date = date('Y-m-t', strtotime($start_date)); // Último día del mes
    
    try {
        $query = "SELECT id, id_comunidad, titulo, descripcion, fecha, fecha_creacion 
                  FROM mej_eventos 
                  WHERE id_comunidad = ? AND fecha BETWEEN ? AND ?
                  ORDER BY fecha ASC";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iss", $id_comunidad, $start_date, $end_date);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $events = [];
        
        while ($row = $result->fetch_assoc()) {
            $events[] = $row;
        }
        
        sendResponse(true, 'Eventos obtenidos correctamente', ['events' => $events]);
    } catch (Exception $e) {
        sendResponse(false, 'Error al obtener eventos: ' . $e->getMessage());
    }
}

/**
 * Añadir un nuevo evento
 */
function addEvent() {
    global $conn;
    
    // Obtener parámetros
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $id_comunidad = isset($_POST['id_comunidad']) ? intval($_POST['id_comunidad']) : (isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 0);
    
    // Validar datos
    if (!$titulo || !$fecha || !$id_comunidad) {
        sendResponse(false, 'Faltan datos requeridos');
        return;
    }
    
    try {
        $query = "INSERT INTO mej_eventos (id_comunidad, titulo, descripcion, fecha) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("isss", $id_comunidad, $titulo, $descripcion, $fecha);
        
        if ($stmt->execute()) {
            sendResponse(true, 'Evento añadido correctamente', ['id' => $stmt->insert_id]);
        } else {
            sendResponse(false, 'Error al añadir evento: ' . $stmt->error);
        }
    } catch (Exception $e) {
        sendResponse(false, 'Error al añadir evento: ' . $e->getMessage());
    }
}

/**
 * Actualizar un evento existente
 */
function updateEvent() {
    global $conn;
    
    // Obtener parámetros
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $id_comunidad = isset($_POST['id_comunidad']) ? intval($_POST['id_comunidad']) : (isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 0);
    
    // Validar datos
    if (!$id || !$titulo || !$fecha || !$id_comunidad) {
        sendResponse(false, 'Faltan datos requeridos');
        return;
    }
    
    try {
        // Verificar que el evento pertenece a la comunidad correcta
        $check_query = "SELECT id FROM mej_eventos WHERE id = ? AND id_comunidad = ?";
        $check_stmt = $conn->prepare($check_query);
        $check_stmt->bind_param("ii", $id, $id_comunidad);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows === 0) {
            sendResponse(false, 'No tiene permisos para modificar este evento');
            return;
        }
        
        // Actualizar evento
        $query = "UPDATE mej_eventos SET titulo = ?, descripcion = ?, fecha = ? WHERE id = ? AND id_comunidad = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssii", $titulo, $descripcion, $fecha, $id, $id_comunidad);
        
        if ($stmt->execute()) {
            sendResponse(true, 'Evento actualizado correctamente');
        } else {
            sendResponse(false, 'Error al actualizar evento: ' . $stmt->error);
        }
    } catch (Exception $e) {
        sendResponse(false, 'Error al actualizar evento: ' . $e->getMessage());
    }
}

/**
 * Eliminar un evento
 */
function deleteEvent() {
    global $conn;
    
    // Obtener parámetros
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $id_comunidad = isset($_POST['id_comunidad']) ? intval($_POST['id_comunidad']) : (isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 0);
    
    // Validar datos
    if (!$id || !$id_comunidad) {
        sendResponse(false, 'Faltan datos requeridos');
        return;
    }
    
    try {
        // Verificar que el evento pertenece a la comunidad correcta
        $check_query = "SELECT id FROM mej_eventos WHERE id = ? AND id_comunidad = ?";
        $check_stmt = $conn->prepare($check_query);
        $check_stmt->bind_param("ii", $id, $id_comunidad);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows === 0) {
            sendResponse(false, 'No tiene permisos para eliminar este evento');
            return;
        }
        
        // Eliminar evento
        $query = "DELETE FROM mej_eventos WHERE id = ? AND id_comunidad = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $id, $id_comunidad);
        
        if ($stmt->execute()) {
            sendResponse(true, 'Evento eliminado correctamente');
        } else {
            sendResponse(false, 'Error al eliminar evento: ' . $stmt->error);
        }
    } catch (Exception $e) {
        sendResponse(false, 'Error al eliminar evento: ' . $e->getMessage());
    }
}

/**
 * Enviar respuesta JSON
 */
function sendResponse($success, $message, $data = []) {
    $response = array_merge([
        'success' => $success,
        'message' => $message
    ], $data);
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

/**
 * Clase Objeto para compatibilidad con el código existente
 */
class Objeto {
    private $id;
    private $name;
    private $href;
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setHref($href) {
        $this->href = $href;
    }
    
    public function show() {
        echo '<a href="' . $this->href . '">' . $this->name . '</a>';
    }
}