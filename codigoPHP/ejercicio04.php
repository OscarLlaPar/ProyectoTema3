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
            * Última modificación: 19/10/2021
            */
            $oFechaHora = new DateTime(); //objeto de la fecha
            $oZona = new DateTimeZone("Europe/Lisbon"); //objeto que establece la zona horaria
            $oFechaHora->setTimezone($oZona); //asignación de la zona a la fecha
            //setlocale(LC_ALL, 'pt_PT');
            //muestra de la fecha y la hora
            echo "<p>La fecha y hora en Oporto (Portugal) es: ".$oFechaHora->format("d-m-Y h:i:s a")."</p>";
            
        ?>
    </body>
</html>

