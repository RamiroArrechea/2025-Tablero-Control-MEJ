<?php
session_start();
require_once "../conexion/conexionDB.php";

// Establecer cabeceras para JSON
header('Content-Type: application/json');

// Verificar si se recibieron datos
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

if (!$input || !isset($input['id'])) {
    echo json_encode(['success' => false, 'message' => 'No se recibió ID de evento']);
    exit;
}

try {
    // Obtener el ID de la comunidad de la sesión
    $id_comunidad = isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 0;
    
    // Sanitizar entradas
    $id = (int)$input['id'];
    
    // Verificar que el evento pertenece a la comunidad actual
    $check_sql = "SELECT id FROM mej_eventos WHERE id = ? AND id_comunidad = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ii", $id, $id_comunidad);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    if ($check_result->num_rows === 0) {
        echo json_encode(['success' => false, 'message' => 'No tienes permiso para eliminar este evento']);
        exit;
    }
    
    // Eliminar el evento de la base de datos
    $sql = "DELETE FROM mej_eventos WHERE id = ? AND id_comunidad = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $id, $id_comunidad);
    
    if ($stmt->execute()) {
        echo json_encode([
            'success' => true, 
            'message' => 'Evento eliminado correctamente'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al eliminar el evento: ' . $stmt->error]);
    }
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error al procesar la solicitud: ' . $e->getMessage()]);
}
?>