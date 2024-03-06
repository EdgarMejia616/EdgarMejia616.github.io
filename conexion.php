<?php
$server = "localhost";
$user = "root";
$password = "123456";
$db = "bd_proyectofinal_g6";

$conexion = new mysqli($server, $user, $password, $db);

if ($conexion->connect_errno) {
    die("Conexión fallida: " . $conexion->connect_error);
}

return $conexion;
?>
