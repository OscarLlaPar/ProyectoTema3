<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 06</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            /*
            * Ejercicio 06
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * @version 1.0
            * Última modificación: 19/10/2021
            */
            $oFecha = new DateTime(); //creación del objeto DateTime para la fecha
            $oZona = new DateTimeZone("Europe/Madrid"); //objeto que establece la zona horaria
            $oFecha->setTimezone($oZona); //asignación de la zona horaria al objeto DateTime
            //suma de 60 días usando la función DateTime::add() y la clase DateInterval
            echo "La fecha actual es ".$oFecha->format("l\, d-m-Y").", y si le sumas 60 días es ".$oFecha->add(new DateInterval('P60D'))->format("l\, d-m-Y");
        ?>
    </body>
</html>