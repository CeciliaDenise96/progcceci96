<?php
$conexion=new mysqli("localhost","root","mysql","ferreteria");
if($conexion->connect_error){
    die("Error de conexion:". $conexion->connect_error);
}
?>
