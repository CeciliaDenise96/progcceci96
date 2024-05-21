<html> 
    <head>
        <link rel="stylesheet" href="estilo/style.css">
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
        <body>
            <form method="POST" action="MuestraABMPrueba.php" class="form1">
                    <h3 class="text1">Indique su número de cliente:</h3>
                    <p class="text2"> Número de cliente: </p><input type="number" name="valor1"><br/>
                    <br/><p class="text3">Nombre : </p><input type="text" name="nombre1"><br/>
                    <p class="text4">Apellido : </p><input type="text" name="apellido1"><br/>
                    <h4 class="text5">Indique su dirección de domicilio: </h4><br/>
                    <p class="text6">Calle : </p><input type="text" name="calle"><br/>
                    <p class="text7">Numero : </p><input type="number" name="Numero"><br/>
                    <p class="text8">Indique su localidad : </p><select name="valor2" id="Localidad">
                <option value="Temperley">Temperley</option><br/>
                <option value="Lomas de zamora">Lomas de zamora</option><br/>
                <option value="Turdera">Turdera</option><br/>
                <option value="Banfield">Banfield</option><br/>
                <option value="Adrogue">Adrogue</option><br/>
                <option value="Guillón">Guillón</option><br/>
                <option value="Monte Grande">Monte Grande</option><br/>
                <option value="Burzaco">Burzaco</option><br/>
                        </select><br/>
                     <p class="text9">Indique su provincia: </p><select name="valor3" id="Provincia" ><br/>
                        <option value="Buenos Aires">Buenos Aires</option>
                        <option value="Entre Ríos">Entre Ríos</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="Corrientes">Corrientes</option>
                        <option value ="Misiones">Misiones</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Chaco">Chaco</option>
                        <option value="Formosa">Formosa</option>
                        <option value="Jujuy">Jujuy</option>
                        <option value="Salta">Salta</option>
                        <option value="Tucumán">Tucumán</option>
                        <option value="Santiago del Estero">Santiago del Estero</option>
                        <option value="Catamarca">Catamarca</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Luis">San Luis</option>
                        <option value="Mendoza">Mendoza</option>
                        <option value="La Pampa">La Pampa</option>
                        <option value="Neuquén">Neuquén</option>
                        <option value="Río Negro">Río Negro</option>
                        <option value="Chubut">Chubut</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Tierra del fuego">Tierra del fuego</option>
                        </select><br/>
                        <p class="text10"> Indique su País del Mercosur:</p> <select name="valor4" id="Pais">
                        <option value="Argentina">Argentina</option><br/>
                        <option value="Uruguay">Uruguay</option><br/>
                        <option value="Paraguay">Paraguay</option><br/>
                        <option value="Bolivia">Bolivia</option><br/>
                        <option value ="Brazil">Brasil</option><br/>
                        <option value="Venezuela">Venezuela</option><br/>
                        </select><br/>
                         <p class="text11">Tipo de Documento : </p><select name="valor7" id = 'tipdocumento'>
                            <option value='DNI'>DNI</option>
                            <option value='CI'>CI</option>
                            <option value='PTE'>PTE</option>
                            
                        </select><br/>
                     <p class="text12">Nro de documento : </p><input type="number" name="valor6"><br/>
                     <p class="text13">Género : </p><select name = 'valor8' id="genero"><br/>
                        <option value="Masculino">Masculino</option><br/>
                        <option value="Femenino">Femenino</option><br/>
                    </select>
                    <input type="submit" value="Enviar" class="input1"><br/>
                    
        </form>
        </body>
</html>
