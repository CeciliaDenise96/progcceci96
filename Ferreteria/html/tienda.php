<?php
include("../include/db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tienda.css">
    <title>Tienda</title>
</head>
<body>
    <?php
        include("../include/header.php");
    ?>
    <h1>Ferreteria Don Cacho</h1>
    <div class="productos">
    <?php
    $resultado = $conexion->query("SELECT * FROM productos");
    while ($row = $resultado->fetch_assoc()) {
      echo "<div class='producto'>";
      echo "<img src='../img/productos/{$row['imagen']}' >";
      echo "<h2>{$row['nombre']}</h2>";
      echo "<p>{$row['descripcion']}</p>";
      echo "<p><strong>Precio:</strong> $" . number_format($row['precio'], 2) . "</p>";
      echo "<p><strong>Stock:</strong> {$row['stock']}</p>";
      echo "<form action='../html/agregar_carro.php' method='POST'>";
      echo "<input type='hidden' name='id' value='{$row['id']}'>";
      echo "<input type='number' name='cantidad' value='1' min='1' max='{$row['stock']}'><br><hr>";
      echo "<button type='submit'>Agregar al carrito</button>";
      echo "</form></div>";
    }
    ?>
  </div>
  <a href="../html/carrito.php">Ver carrito</a>


    
</body>
</html>