<?php

include ('conexion.php');

$nombre = $_POST['nom'];
$apellidos = $_POST['apell'];
$nomina = $_POST['nomina'];
$fal = $_POST['fal'];
$destino = '../img/imgPost/';
$dirTemp = $_FILES['img']['tmp_name'];
$imagen = $_FILES['img']['name'];

if ( move_uploaded_file($dirTemp, $destino.$imagen)) {

    $sql = "INSERT INTO empleado (nombre, apellidos, nomina, fecha_alta, imagen) VALUES (
        '$nombre', '$apellidos', '$nomina', '$fal', '$imagen'
    )";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        echo 1;
    }

}

mysqli_close($conexion);

?>