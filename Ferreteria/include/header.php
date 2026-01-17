<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
       header{
            display: flex;
            justify-content: space-evenly;
            background-color: gray;
            height:60px;
            padding-top: 10px;
            align-items: center;
        }
        a{
            text-decoration: none;
            font-family: cursive;
            font-size:15px;
            color: white;
        }
        h4{
            font-family: cursive;
            font-size:16px;
            color: white;
            margin: 0 10px;
        }
        .perfil{
            border: 2px solid white;
            border-radius:50%;
        }

    </style>

</head>
<body>
    <header>
        
        <?php
// Asegúrate de que la sesión esté iniciada ANTES de este include.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <?php if (isset($_SESSION["usuario"])) { ?>
        
        <h4>Bienvenido, <?php echo htmlspecialchars($_SESSION["usuario"]); ?></h4>

        <?php if (!empty($_SESSION["imagen"])) { 
            // SOLUCIÓN: Usar la ruta absoluta a partir de la raíz del proyecto. 
            // Asumiendo que la carpeta 'uploads' está en la raíz de tu proyecto (junto a 'html', 'css', etc.).
            // Si la ruta guardada en la BD es "uploads/nombre.jpg", esto funcionará.
        ?>
            <img class="perfil" 
                 src="../<?php echo htmlspecialchars($_SESSION["imagen"]); ?>" 
                 width="60px" 
                 height="60px" 
                 alt="Foto de Perfil">
        <?php } else { ?>
            <p style="font-size: 30px; margin: 0;">👻</p>
        <?php } ?>

        <a href="logout.php"><img src="../img/logout.png" width="35px" height="35px" alt="Salir"></a>
    <?php } else { ?>
        <a href="login.php"><img src="../img/enter.png" width="35px" height="35px" alt="Ingresar"></a>
    <?php } ?>
</header>
    </header>    
</body>
</html>