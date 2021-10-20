<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 13</title>
    </head>
    <body>
        <?php
            /*
            * Ejercicio 13
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 20/10/2021
            */
            function contadorVisitas()
            {
                $fichero=fopen("ejercicio13.php", "r");
                if($fichero){
                    $contador=fread($fichero,filesize($fichero));
                    $contador=$contador+1;
                    fclose($fichero);
                }
                $fichero=fopen("ejercicio13.php", "w+");
                if($fichero){
                    fwrite($fichero,$contador);
                    fclose($fichero);
                }
                return $contador;
            }
            echo contadorVisitas();
        ?>
    </body>
</html>