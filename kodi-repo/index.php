<?php
// Forzar listado de archivos
header('Content-Type: text/html; charset=utf-8');

$files = scandir('.');
echo '<h1>Repositorio killerfran38</h1>';
echo '<ul>';
foreach ($files as $file) {
    // Ocultar archivos del sistema y este mismo
    if ($file != '.' && $file != '..' && $file != 'index.php' && $file != '.gitkeep') {
        // Si es .zip, mostrar enlace directo
        if (strpos($file, '.zip') !== false) {
            echo '<li><a href="' . $file . '">' . $file . '</a></li>';
        }
    }
}
echo '</ul>';
?>
