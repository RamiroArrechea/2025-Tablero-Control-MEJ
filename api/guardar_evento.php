<?php

// Activar reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Limpiar cualquier salida previa y activar buffer
ob_clean();
ob_start();

// Activar reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Escribir a un archivo de log para depuración
file_put_contents('api_debug.log', "=== " . date('Y-m-d H:i:s') . " ===\n", FILE_APPEND);
file_put_contents('api_debug.log', "Archivo ejecutado: " . __FILE__ . "\n", FILE_APPEND);

session_start();
file_put_contents('api_debug.log', "Sesión iniciada\n", FILE_APPEND);

// Intentar incluir el archivo de conexión
try {
    require_once "../conexion/conexionDB.php";
    file_put_contents('api_debug.log', "Archivo de conexión incluido\n", FILE_APPEND);
    file_put_contents('api_debug.log', "Estado de conexión: " . ($conn->connect_error ? "Error: ".$conn->connect_error : "Conectado") . "\n", FILE_APPEND);
} catch (Exception $e) {
    file_put_contents('api_debug.log', "Error al incluir archivo de conexión: " . $e->getMessage() . "\n", FILE_APPEND);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Error de conexión: ' . $e->getMessage()]);
    exit;
}

// Establecer cabeceras para JSON
header('Content-Type: application/json');

// Verificar si se recibieron datos
$inputJSON = file_get_contents('php://input');
file_put_contents('api_debug.log', "Datos JSON recibidos: " . $inputJSON . "\n", FILE_APPEND);

$input = json_decode($inputJSON, TRUE);
file_put_contents('api_debug.log', "Datos decodificados: " . print_r($input, true) . "\n", FILE_APPEND);

if (!$input) {
    file_put_contents('api_debug.log', "No se recibieron datos JSON válidos\n", FILE_APPEND);
    echo json_encode(['success' => false, 'message' => 'No se recibieron datos o formato JSON inválido']);
    exit;
}

try {
    // Obtener el ID de la comunidad
    $id_comunidad = isset($_SESSION['ID_COMUNIDAD']) ? $_SESSION['ID_COMUNIDAD'] : 1;  // Valor por defecto para pruebas
    file_put_contents('api_debug.log', "ID_COMUNIDAD: " . $id_comunidad . "\n", FILE_APPEND);
    
    // Verificar datos recibidos
    if (empty($input['titulo']) || empty($input['fecha'])) {
        file_put_contents('api_debug.log', "Datos incompletos: falta título o fecha\n", FILE_APPEND);
        echo json_encode(['success' => false, 'message' => 'El título y la fecha son obligatorios']);
        exit;
    }
    
    // Sanitizar entradas
    $titulo = $input['titulo'];
    $descripcion = $input['descripcion'] ?? '';
    $fecha = $input['fecha'];
    
    file_put_contents('api_debug.log', "Preparando para insertar: ID_COM=$id_comunidad, TIT=$titulo, FECHA=$fecha\n", FILE_APPEND);
    
    // Insertar el evento
    $sql = "INSERT INTO mej_eventos (id_comunidad, titulo, descripcion, fecha) VALUES (?, ?, ?, ?)";
    file_put_contents('api_debug.log', "SQL: $sql\n", FILE_APPEND);
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception("Error en prepare: " . $conn->error);
    }
    file_put_contents('api_debug.log', "Prepare exitoso\n", FILE_APPEND);
    
    $stmt->bind_param("isss", $id_comunidad, $titulo, $descripcion, $fecha);
    file_put_contents('api_debug.log', "Bind_param ejecutado\n", FILE_APPEND);
    
    $result = $stmt->execute();
    if (!$result) {
        throw new Exception("Error en execute: " . $stmt->error);
    }
    
    file_put_contents('api_debug.log', "Execute exitoso. ID insertado: " . $conn->insert_id . "\n", FILE_APPEND);

    // Limpiar buffer y enviar solo el JSON
    ob_end_clean();
    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'message' => 'Evento guardado correctamente',
        'id' => $conn->insert_id
    ]);
    exit;
    
} catch (Exception $e) {
    file_put_contents('api_debug.log', "Excepción: " . $e->getMessage() . "\n", FILE_APPEND);
    // Limpiar buffer y enviar solo el JSON
    ob_end_clean();
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Error al procesar la solicitud: ' . $e->getMessage()]);
    exit;
}
?>