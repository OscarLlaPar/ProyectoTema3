<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Respuestas del formulario</h1>
        <?php
            $nombre = $_REQUEST['nombre'];
            $altura = $_REQUEST['altura'];
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Altura: $altura</p>";
            echo "<pre>";
            echo "<p>El contenido de \$_REQUEST es: </p>";
            print_r($_REQUEST);
            echo "</pre>";
        ?>
    </body>
</html>
