<?php
session_start();
require_once "../conexion/conexionDB.php";

// Establecer cabeceras para JSON
header('Content-Type: application/json');

// Verificar si se recibieron datos
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

if (!$input) {
    echo json_encode(['success' => false, 'message' => 'No se recibieron datos']);
    exit;
}

try {
    // Obtener el ID de la comunidad de la sesión
    $id_comunidad = isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 0;
    
    // Verificar y validar datos recibidos
    if (empty($input['id']) || empty($input['titulo']) || empty($input['fecha'])) {
        echo json_encode(['success' => false, 'message' => 'El ID, título y fecha son obligatorios']);
        exit;
    }
    
    // Sanitizar entradas
    $id = (int)$input['id'];
    $titulo = htmlspecialchars($input['titulo']);
    $descripcion = htmlspecialchars($input['descripcion'] ?? '');
    $fecha = $input['fecha'];
    
    // Validar formato de fecha
    $fecha_obj = DateTime::createFromFormat('Y-m-d', $fecha);
    if (!$fecha_obj || $fecha_obj->format('Y-m-d') !== $fecha) {
        echo json_encode(['success' => false, 'message' => 'Formato de fecha inválido']);
        exit;
    }
    
    // Verificar que el evento pertenece a la comunidad actual
    $check_sql = "SELECT id FROM mej_eventos WHERE id = ? AND id_comunidad = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ii", $id, $id_comunidad);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    if ($check_result->num_rows === 0) {
        echo json_encode(['success' => false, 'message' => 'No tienes permiso para editar este evento']);
        exit;
    }
    
    // Actualizar el evento en la base de datos
    $sql = "UPDATE mej_eventos SET titulo = ?, descripcion = ?, fecha = ? WHERE id = ? AND id_comunidad = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssii", $titulo, $descripcion, $fecha, $id, $id_comunidad);
    
    if ($stmt->execute()) {
        echo json_encode([
            'success' => true, 
            'message' => 'Evento actualizado correctamente'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al actualizar el evento: ' . $stmt->error]);
    }
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error al procesar la solicitud: ' . $e->getMessage()]);
}
?>