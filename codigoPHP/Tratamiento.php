<?php
    /*
    * Ejercicio 21 - Tratamiento de datos
    * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
    * @version 1.0
    * Última modificación: 21/10/2021
    */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Respuestas del formulario</h1>
        <?php
            //recogida de los datos a través de $_REQUEST
            $nombre = $_REQUEST['nombre'];
            $altura = $_REQUEST['altura'];
            //mostrado de los datos
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Altura: $altura</p>";
            //mostrado del contenido de $_REQUEST
            echo "<pre>";
            echo "<p>El contenido de \$_REQUEST es: </p>";
            print_r($_REQUEST);
            echo "</pre>";
        ?>
    </body>
</html>
