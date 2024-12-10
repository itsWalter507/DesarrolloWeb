<?php
session_start();
require 'includes/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/script.js"></script>

</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="contenedor">
        <!-- Sección del Slider -->
        <section class="slider">
            <h2>Agendas culturales</h2>
            <div class="slider-contenido">
                <img src="AGENDA_CULTURAL.jpg" alt="Cultura 1">
                <img src="AGENDA_CULTURAL1.jpg" alt="Cultura 2">
                <img src="AGENDA_CULTURAL2.jpg" alt="Cultura 3">
                <img src="AGENDA_CULTURAL3.jpg" alt="Cultura 3">
                <img src="AGENDA_CULTURAL4.jpg" alt="Cultura 3">
                <img src="AGENDA_CULTURAL5.jpg" alt="Cultura 3">
            </div>
        </section>
        
        <!-- Sección de Nuevas Adquisiciones -->
        <section class="nuevas-adquisiciones">
            <h2>Nuevas Adquisiciones</h2>
            <div class="libros">
                <img src="libro1.png" alt="Libro 1">
                <img src="libro2.png" alt="Libro 2">
                <img src="libro3.png" alt="Libro 3">
                <img src="libro4.png" alt="Libro 4">
            </div>
        </section>

        <!-- Sección de Populares -->
        <section class="populares">
            <h2>Populares</h2>
            <div class="libros">
                <img src="popular1.png" alt="Libro Popular 1">
                <img src="popular2.png" alt="Libro Popular 2">
                <img src="popular3.png" alt="Libro Popular 3">
                <img src="popular4.png" alt="Libro Popular 4">
            </div>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>