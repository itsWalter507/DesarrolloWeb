<!DOCTYPE html>
<html lang="es">
<head>
    <title>Biblioteca Virtual</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        /* Estilo del contenedor del modelo 3D */
        #biblioteca-virtual {
            width: 80%; /* Ajusta el ancho como desees */
            height: 500px; /* Ajusta la altura del contenedor */
            margin: 30px auto; /* Centra el contenedor */
            position: relative; /* Para asegurar que el modelo no se solape */
            background-color: #f8f8f8; /* Fondo del contenedor (opcional) */
            border-radius: 15px; /* Bordes redondeados opcionales */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra opcional para el contenedor */
            z-index: 1; /* Asegura que el modelo no quede debajo de otros elementos */
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <h2>Biblioteca Virtual</h2>
    <div id="biblioteca-virtual"></div> <!-- Contenedor para el modelo 3D -->

    <script>
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer();

        // Ajustar el tamaño del renderer al tamaño del contenedor
        const container = document.getElementById('biblioteca-virtual');
        renderer.setSize(container.offsetWidth, container.offsetHeight);
        container.appendChild(renderer.domElement);

        const geometry = new THREE.BoxGeometry();
        const material = new THREE.MeshBasicMaterial({ color: 0x0077ff });
        const cube = new THREE.Mesh(geometry, material);
        scene.add(cube);

        camera.position.z = 5;

        function animate() {
            requestAnimationFrame(animate);
            cube.rotation.x += 0.01;
            cube.rotation.y += 0.01;
            renderer.render(scene, camera);
        }

        animate();

        // Redimensionar el canvas al cambiar el tamaño de la ventana
        window.addEventListener('resize', () => {
            renderer.setSize(container.offsetWidth, container.offsetHeight);
            camera.aspect = container.offsetWidth / container.offsetHeight;
            camera.updateProjectionMatrix();
        });
    </script>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
