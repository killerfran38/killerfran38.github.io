<?php
// Fuerza a mostrar el listado de directorios
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<body>
<h1>Listado de archivos</h1>
<ul>
<?php
// Lista TODOS los archivos en el directorio actual
$files = scandir('.');
foreach ($files as $file) {
    if ($file != "." && $file != ".." && $file != "index.html" && $file != "index.php") {
        echo "<li><a href=\"$file\">$file</a></li>";
    }
}
?>
</ul>
</body>
</html>