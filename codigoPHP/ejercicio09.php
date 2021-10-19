<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 09</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            /*
            * Ejercicio 09
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 19/10/2021
            */
            /*El valor se encuentra en la variable (array) superglobal $_SERVER[].
            El índice 'SCRIPT_FILENAME' muestra la ruta ABSOLUTA del fichero actual.
            Otros índices como 'PHP_SELF' O 'REQUEST_URI' muestran la ruta RELATIVA.
             */
            echo "<h1>Ruta absuluta ('SCRIPT_FILENAME')</h1>";
            echo "El path del fichero actual es ".$_SERVER['SCRIPT_FILENAME'];
            echo "<h1>Rutas relativas</h1>";
            echo "<h2>'PHP_SELF'</h2>";
            echo "El path del fichero actual es ".$_SERVER['PHP_SELF'];
            echo "<h2>'REQUEST_URI'</h2>";
            echo "El path del fichero actual es ".$_SERVER['REQUEST_URI'];
        ?>
    </body>
</html>