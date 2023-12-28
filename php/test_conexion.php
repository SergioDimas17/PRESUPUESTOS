<?php
$host = "localhost"; // Reemplaza con tu host (generalmente "localhost" si está en el mismo servidor)
$usuario = "sdimas17"; // Reemplaza con tu nombre de usuario
$contrasena = "Andromeda17."; // Reemplaza con tu contraseña
$base_datos = "presupuesto_app"; // Reemplaza con el nombre de tu base de datos

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "¡Conexión exitosa!";
$conexion->close();
?>
