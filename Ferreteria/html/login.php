<?php
// 1. Iniciar la sesión solo una vez al principio del script
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("../include/db.php");

$mensaje = ""; // Inicializar el mensaje

// Si viene desde registro exitoso
if (isset($_GET["registro"]) && $_GET["registro"] === "ok") {
    $mensaje = "✅ Registro exitoso. Ahora puedes iniciar sesión.";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recoger y limpiar los datos
    $empresa = trim($_POST["empresa"]);
    $usuario = trim($_POST["usuario"]);
    $clave_ingresada = trim($_POST["clave"]); // Renombramos para claridad

    // 1. Buscar usuario y empresa (sin la clave)
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND empresa = ?");
    // CORRECCIÓN: Usar "ss" para dos strings.
    $stmt->bind_param("ss", $usuario, $empresa); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // 2. El usuario y la empresa coinciden. Ahora, verificar la contraseña.
        // Usar la clave_ingresada contra la clave cifrada de la BD ($row["clave"])
        if (password_verify($clave_ingresada, $row["clave"])) {
            
            // INICIO DE SESIÓN EXITOSO: Establecer variables de sesión
            $_SESSION["empresa"] = $row["empresa"];
            $_SESSION["usuario"] = $row["usuario"];
            $_SESSION["imagen"] = $row["imagen"] ?? null;
            
            // Redirigir y salir
            header("Location: tienda.php");
            exit();
            
        } else {
            // Contraseña incorrecta
            // CORRECCIÓN: Cambiar el mensaje "Cyber" por algo más informativo
            $mensaje = "❌ Contraseña incorrecta.";
        }
    } else {
        // Usuario o empresa no encontrado/coincidente
        $mensaje = "❌ Usuario o Empresa no encontrado/a."; 
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/ingreso.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php
        // Es fundamental que el archivo header.php contenga la corrección de la ruta 
        // que te proporcioné antes (añadir "../") para que la imagen se vea.
        include("../include/header.php");
    ?>
    <h2>Iniciar Sesión</h2>
    <?php if(!empty($mensaje)) echo "<p style='color:red;'>$mensaje</p>"; ?>
    <form method="POST">
        <label>Empresa:</label><br>
        <input type="text" name="empresa" required><br><br>

        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="clave" required><br><br>

        <button type="submit">Entrar</button>
    </form>
    <br>
    <a href="registro.php">¿No tienes cuenta? Regístrate aquí</a>
</body>
</html>
