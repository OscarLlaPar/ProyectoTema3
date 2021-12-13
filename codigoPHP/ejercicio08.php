<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 08</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            /*
            * Ejercicio 08
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * @version 1.0
            * Última modificación: 19/10/2021
            */
            /*El valor se encuentra en la variable (array) superglobal $_SERVER[].
            El índice 'REMOTE_ADDR' muestra la IP del equipo que ejecuta el fichero.
             */
            echo "Tu dirección IP es ".$_SERVER['REMOTE_ADDR'];
        ?>
    </body>
</html>