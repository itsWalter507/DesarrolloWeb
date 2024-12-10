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

</head>
<body>
    <?php include 'includes/header-biblioteca.php'; ?>

    <div class="contenedor">
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

    <!-- Sección de historial -->
    <section class="Historial">
            <h2>Historial</h2>
            <div class="libros">
                <img src="hist1.jpg" alt="Libro 1">
                <img src="hist2.jpg" alt="Libro 2">
                <img src="hist3.jpg" alt="Libro 3">
                <img src="hist4.jpg" alt="Libro 4">
            </div>
        </section>

            <!-- Sección de audio libros -->
    <section class="audio-libros">
            <h2>Audio Libros</h2>
            <div class="libros">
                <img src="audio1.jpg" alt="Libro 1">
                <img src="audio2.jpg" alt="Libro 2">
                <img src="audio3.jpg" alt="Libro 3">
                <img src="audio4.jpg" alt="Libro 4">
            </div>
        </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>