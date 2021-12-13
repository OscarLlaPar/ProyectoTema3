<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 04</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            /*
            * Ejercicio 04
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * @version 1.0
            * Última modificación: 22/10/2021
            */
            //cambio de locales a portugués de Portugal
            setlocale(LC_TIME, "pt_PT.utf8");
            //muestra de la fecha y la hora
            echo "<h1>Portugués</h1>";
            echo strftime('%A, %e %B, %Y, %T');
            //cambio de locales a árabe de Marruecos
            setlocale(LC_TIME, "ar_MA.utf8");
            //muestra de la fecha y la hora
            echo "<h1>Árabe de Marruecos</h1>";
            echo strftime('%A, %e %B, %Y, %T');
            //cambio de locales a árabe de Marruecos
            setlocale(LC_TIME, "fr_FR.utf8");
            //muestra de la fecha y la hora
            echo "<h1>Francés</h1>";
            echo strftime('%A, %e %B, %Y, %T');
            
        ?>
    </body>
</html>

