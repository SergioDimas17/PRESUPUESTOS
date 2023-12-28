<?php
$host = "localhost"; // generalmente "localhost" si está en el mismo servidor
$usuario = "sdimas17";
$contrasena = "Andromeda17.";
$base_datos = "presupuesto_app"; // el nombre de tu base de datos

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
