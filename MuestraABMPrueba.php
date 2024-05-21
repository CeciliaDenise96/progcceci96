<html>
    <head>
        <link rel="stylesheet" href="estilo/style.css">
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php" class="a2">Página central de ABM</a>
        <a href="GRABAABM.PHP" class="a2">Aceptar validación</a>
        <a href="MuestraABMPrueba.php" class="a2">Modificación datos de ABM</a>
        <?php
        $Numero1 = $_POST['valor1'];
        $nombre = $_POST['nombre1'];
        $apellido = $_POST['apellido1'];
        $calle = $_POST['calle'];
        $Numero2 = $_POST['Numero'];
        $Localidad = $_POST['valor2'];
        $Eleccion1 = $_POST['valor3'];
        $Eleccion2 = $_POST['valor4'];
        $TipoDocumento = $_POST['valor7'];
        $NroDocumento = $_POST['valor6'];
        $Eleccion5 = $_POST['valor8']. '<br/>';
        $error = 0;
        echo '1';
        verificarDatos($Numero1,$nombre,$apellido,$calle,$Numero2,$NroDocumento,$error);    
        if ($error = 0){
        echo "<div class='cliente'>Su número de cliente es: </div>". "<div class=cliente>$Numero1</div>". '<br/>';
        echo "<div class='Nombre'>Su Nombre es: </div>". "<div class='Nombre'>$nombre</div>". "<div class='apellido'> Y su apellido es </div>". "<div class='apellido'>$apellido</div>" . '<br/>';
        echo "<div class='Direccion'> Su dirección de calle es :</div>". "<div class='Direccion'>$calle</div>"."<div class='Direccion'> Su Nro de calle es :</div>". "<div class='Direccion'>$Numero2</div>". '<br/>';
        echo "<div class='Localidad'> La dirección corresponde a la Localidad :</div>". "<div class='Localidad'>$Localidad</div>". '<br/>';
        echo "<div class='Eleccion1'>La dirección corresponde a la provincia: </div>"."<div class='Eleccion1'> $Eleccion1.</div>". '<br/>';
        echo "<div class='Eleccion2'>Indique a que país del Mercosur corresponde es :</div>". "<div class='Eleccion2'>$Eleccion2</div>". '<br/>';
        echo "<div class='TipoDocumento'>Indique el tipo de documento corresponiente es :</div>". "<div class=TipoDocumento> $TipoDocumento</div>". '<br/>';
        echo "<div class='NroDocumento'>Indique su Número de Documento: </div>". "<div class='NroDocumento'>$NroDocumento</div>". '<br/>';
        echo "<div class='genero'>Indique su género: </div>". "<div class='genero'>$Eleccion5</div>". '<br/>';
        }else{
            echo "Hay errores en los datos, vuelva al inicio";
        }
        function verificarDatos($Numero1,$nombre,$apellido,$calle,$Numero2,$NroDocumento,$error)
                {
                echo 'Antes del IF';
                    if($Numero1 < 1 || $Numero1 > 9999 ){
                        return TRUE;
                        echo $Numero1;
                        echo 'Su opción es inválida';
                        $error = 1;
                    }else{
                         echo 'No entro';
                        return FALSE;
                    } 
                    if($nombre == "" || $apellido == "" || $calle == "")
                        {
                        return TRUE;
                         echo 'Su nombre o apellido o la calle esta en blanco';
                        $error = 1;
                    }else{
                    return FALSE;
                    }
                     if($Numero2 < 1 || $Numero2 > 99999)
                         {
                         return TRUE;
                            echo 'Su Nro no es correcto';
                            $error = 1;
                    }else{
                     return FALSE;
                    }
                    if($NroDocumento < 1 || $NroDocumento > 99999999)
                        {
                     return TRUE;
                     echo 'Su Nro no es correcto';
                     $error = 1;
                    }else{
                     return FALSE;
                    }
                }
        ?>
        
    </body>
    
</html>
