<?php
session_start();
include("../include/db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $empresa = trim($_POST["empresa"]);
    $nombre   = trim($_POST["nombre"]);
    $dni      = trim($_POST["dni"]);
    $email    = trim($_POST["email"]);
    $usuario  = trim($_POST["usuario"]);
    $clave = password_hash($_POST["clave"], PASSWORD_DEFAULT);

    // 1. Manejo de imagen - CORRECCIÓN EN LA RUTA
    $imagen = null;
    $directorio_destino = "uploads/Foto.jpg"; // Asegúrate de que esta carpeta exista y tenga permisos de escritura.

    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        
        // CORRECCIÓN: Eliminar el asterisco (*) y concatenar el directorio con el nombre del archivo
        $nombre_archivo = basename($_FILES["imagen"]["name"]);
        $ruta = $directorio_destino . $nombre_archivo;
        
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta)) {
            $imagen = $ruta;
        }
    }
    
    // 2. Insertar nuevo usuario - CORRECCIÓN EN LA CONSULTA SQL Y bind_param
    // La consulta debe tener 7 columnas y 7 placeholders '?'
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, empresa, dni, email, usuario, clave, imagen) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    // CORRECCIÓN: Debe haber 7 tipos ('s' por string, 'i' si dni es entero) y 7 variables.
    // Asumo que DNI es de tipo string, por lo que uso 's' para todos.
    // CÓDIGO CORREGIDO (Todos como string, que es lo más seguro para datos de texto variable)
$stmt->bind_param("sssssss", $nombre, $empresa, $dni, $email, $usuario, $clave, $imagen);

    if ($stmt->execute()) {
        // Redirigir al login con un aviso
        header("Location: login.php?registro=ok");
        exit();
    } else {
        // Mostrar error de la base de datos
        echo "Error: ". $stmt->error;
    }
    
    $stmt->close();
}
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Registro</title>
</head>
<body>
    <?php
        include("../include/header.php");
    ?>
    <h2>Registro de Usuario</h2>
    <?php if(!empty($mensaje)) echo "<p style='color:red;'>$mensaje</p>"; ?>
    <form method="POST" enctype="multipart/form-data">
        <label>Nombre y Apellido:</label><br>
        <input type="text" name="nombre" required><br><br>

         <label>Nombre de la Empresa</label><br>
        <input type="text" name="empresa" required><br><br>

        <label>DNI:</label><br>
        <input type="text" name="dni" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="clave" required><br><br>

        <label>Imagen de perfil:</label><br>
        <input type="file" name="imagen" accept="image/*"><br><br>

        <button type="submit">Registrarse</button>
    </form>
    <br>
    <a href="login.php">¿Ya tienes cuenta? Inicia sesión aquí</a>
</body>
</html>
