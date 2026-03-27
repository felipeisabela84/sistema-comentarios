<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nombre     = trim($_POST['nombre'] ?? '');
$comentario = trim($_POST['comentario'] ?? '');

if (empty($nombre) || empty($comentario)) {
    header('Location: index.php?error=campos_vacios');
    exit;
}

$nuevoComentario = [
    'nombre'     => htmlspecialchars($nombre),
    'comentario' => htmlspecialchars($comentario),
    'fecha'      => date('d/m/Y H:i')
];

$archivo = 'comentarios.json';

if (file_exists($archivo)) {
    $contenido   = file_get_contents($archivo);
    $comentarios = json_decode($contenido, true) ?? [];
} else {
    $comentarios = [];
}

array_unshift($comentarios, $nuevoComentario);

file_put_contents($archivo, json_encode($comentarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: index.php');
exit;
?>

