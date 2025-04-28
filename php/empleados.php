<?php

    require('conexion.php');


$sql = "SELECT * FROM empleado";

$resultado = mysqli_query($conexion, $sql);


$empleados = [];

if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $empleados[] = $fila;
    }
}


echo json_encode($empleados);


mysqli_close($conexion);

?>