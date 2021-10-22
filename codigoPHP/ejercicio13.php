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
            * Última modificación: 21/10/2021
            */
            //  La función que ejecutara las visitas
            function contadorVisitas(){
                $archivo = "../tmp/contadorVisitas.txt"; //el archivo que contiene en numero
                $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
                if($f)
                {
                    $contador = intval(fread($f, filesize($archivo))); //leemos el archivo
                    $contador = $contador + 1; //sumamos +1 al contador
                    fclose($f);
                }
                $f = fopen($archivo, "w+");
                if($f)
                {
                    fwrite($f, $contador);
                    fclose($f);
                }
                return $contador;
            }
            echo contadorVisitas();
        ?>
    </body>
</html>