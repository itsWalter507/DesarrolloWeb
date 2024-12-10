<?php
session_start();
require 'includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    if (strpos($correo, '@ciudad.artes') !== false) {
        // Estudiante validado
        $sql = "SELECT * FROM estudiantes WHERE correo = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('s', $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $_SESSION['usuario'] = $correo;
            header('Location: index.php');
        } else {
            echo "Credenciales incorrectas.";
        }
    } else {
        echo "No tienes permisos como estudiante.";
    }
}
?>