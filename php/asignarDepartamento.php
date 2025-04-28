<?php

require('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $departamento = $_POST['departamento'];
    $sql = "INSERT INTO departamento ( nombre, empleado) VALUES ('$departamento', '$id')";
    $resultado = mysqli_query($conexion, $sql);


    if ($resultado) {
        echo "<script>alert('Departamento asignado correctamente');</script>";
    } else {
        echo "<script>alert('Error al asignar departamento');</script>";
    }
    
}
    


?>