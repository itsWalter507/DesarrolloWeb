<?php
require 'includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios_generales (nombre, apellido, correo, password, fecha_nacimiento, telefono)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('ssssss', $nombre, $apellido, $correo, $password, $fecha_nacimiento, $telefono);

    if ($stmt->execute()) {
        echo "<p class='success'>Registro exitoso. Ahora puedes iniciar sesión.</p>";
    } else {
        echo "<p class='error'>Error al registrar: " . $conexion->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="form-container">
        <h2>Registro de Usuario</h2>
        <form method="POST" action="registro.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" id="correo" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" required>
            </div>

            <button type="submit" class="btn-submit">Registrarse</button>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
