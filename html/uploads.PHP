// Permitir subida de archivos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $upload_dir = 'uploads/';
    $file = $upload_dir . basename($_FILES['archivo']['name']);

    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $file)) {
        echo "El archivo se subió correctamente.";
    } else {
        echo "Error al subir el archivo.";
    }
}