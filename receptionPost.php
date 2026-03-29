<?php
$usuario = $_POST['user'];
$password = $_POST['pwd'];
echo "usuario: ". $usuario. "<br/>";
echo "Contraseña: " . $password ."<br/>";

function verificaDatos ($usuario, $contraseña){
    if($usuario == "alicia15" && $contraseña == "casa15"){
        return true;
    } else {
        return false;
    }
}
$resultado = verificaDatos($usuario, $password);
if($resultado){
    echo "Bienvenido";
}else {
    echo "Datos incorrectos";
}
?>
