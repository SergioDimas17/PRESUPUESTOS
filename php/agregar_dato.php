<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $valor = $_POST["valor"];

    $query = "INSERT INTO transacciones (tipo, descripcion, valor) VALUES ('$tipo', '$descripcion', $valor)";
    $result = $conexion->query($query);

    if ($result) {
        echo "Dato agregado exitosamente a la base de datos";
    } else {
        echo "Error al agregar el dato a la base de datos: " . $conexion->error;
    }
}

$conexion->close();
?>
