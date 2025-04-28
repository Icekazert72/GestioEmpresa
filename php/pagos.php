<?php
require 'conexion.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $empleadoId = $_POST['empleadoId'];
    $cantidad = $_POST['pagoMensual']; 

    $query = "INSERT INTO pagos (empleado, cantidad) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("id", $empleadoId, $cantidad);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Error al efectuar el pago"]);
    }

    $stmt->close();
}
?>