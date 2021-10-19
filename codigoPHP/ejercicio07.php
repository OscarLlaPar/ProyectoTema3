<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 07</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            /*
            * Ejercicio 07
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 19/10/2021
            */
            /*El valor se encuentra en la variable (array) superglobal $_SERVER[].
            El índice 'PHP_SELF' muestra la ruta actual pero si solo se quiere mostrar
            el nombre del fichero se puede extraer mediante la función basename(), que
            recibe la ruta de un archivo
             */
            echo "El fichero actual es ".basename($_SERVER['PHP_SELF']);
        ?>
    </body>
</html>