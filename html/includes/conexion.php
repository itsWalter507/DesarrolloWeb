<?php
// Datos de conexión
$host = 'localhost';
$usuario = 'root'; // Usuario predeterminado en XAMPP
$contrasena = '';  // Contraseña predeterminada en XAMPP es vacía
$base_datos = 'biblioteca_prueba';

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa";
?>