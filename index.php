<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset= "UTF-8">
        <title>Comentarios</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="estilos.css">

</head>
<body class="bg-light">

<nav class ="navbar navarbar-expand-lg navbar-light bg-white shadow-sm">
    <div class= "container">
        <a class="navbar-brand text-danger fw-bold" href="#">Inicio</a>
        <div>
        <a class="nav-link d-inline" href="#">Tiendas</a>
      <a class="nav-link d-inline" href="#">Categorías</a>
      <a class="nav-link d-inline" href="#">Ofertas</a>
      <a class="nav-link d-inline" href="#">Contactos</a>
    </div>
  </div>
</nav>
<div class="container mt-4">
<div class="container mt-4">

<h2 class="fw-bold">Su opinión es importante</h2>

<form action="guardar.php" method="POST" class="mt-3">
    <label>Su nombre</label>
    <input type="text" name="nombre" class="form-control mb-3" placeholder="Su nombre">

    <label>Comentario</label>
    <textarea name="comentario" class="form-control mb-3" rows="4"></textarea>

    <button class="btn btn-primary">Enviar</button>
</form>

<span class="badge bg-secondary mt-3">Comentarios</span>

<h5 class="mt-3 fw-bold">Comentarios recibidos</h5>

<?php
if(file_exists("comentarios.txt")){
    $lineas = file("comentarios.txt");
    foreach($lineas as $linea){
        echo "<div class='comentario-box'>$linea</div>";
    }
}
?>

</div>

</body>
</html>