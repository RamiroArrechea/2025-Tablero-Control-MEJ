<?php
// Limpiar cualquier salida previa y activar buffer
ob_clean();
ob_start();

session_start();
require_once "../conexion/conexionDB.php";
// Establecer cabeceras para JSON
header('Content-Type: application/json');
try {
    // Obtener el ID de la comunidad de la sesión
    $id_comunidad = isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 0;
   
    // Consulta para obtener los eventos
    $sql = "SELECT id, id_comunidad, titulo, descripcion, fecha
            FROM mej_eventos
            WHERE id_comunidad = ?
            ORDER BY fecha ASC";
   
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_comunidad);
    $stmt->execute();
   
    $result = $stmt->get_result();
    $eventos = [];
   
    while ($row = $result->fetch_assoc()) {
        $eventos[] = $row;
    }
   
    // Limpiar buffer y enviar solo el JSON
    ob_end_clean();
    header('Content-Type: application/json');
    echo json_encode($eventos);
    exit;
   
} catch (Exception $e) {
    // Limpiar buffer y enviar solo el error en JSON
    ob_end_clean();
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Error al obtener eventos: ' . $e->getMessage()
    ]);
    exit;
}
?>
