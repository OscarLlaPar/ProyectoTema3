<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 22</title>
    </head>
    <body>
        <h1>Formulario del ejercicio 22</h1>
        <form name="ejercicio21" action="ejercicio22.php" method="post">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </div>
            <div>
            <label for="altura">Altura (cm):</label>
            <input type="number" name="altura">
            </div>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
        if(!empty($_REQUEST['enviar'])){    
            $nombre = $_REQUEST['nombre'];
            echo "Nombre: $nombre";
            echo "<pre>";
            echo "<p>El contenido de \$_REQUEST es: </p>";
            print_r($_REQUEST);
            echo "</pre>";
        }
        ?>
    </body>
</html>
