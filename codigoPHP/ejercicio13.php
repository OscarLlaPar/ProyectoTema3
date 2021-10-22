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
            * Última modificación: 22/10/2021
            */
            // Add correct path to your countlog.txt file.
            $filename = "../tmp/contadorVisitas.txt";// the text file to store count
            // Open the file foe reading current count
            $fp = fopen($filename, 'r');

            //Get exiting count
            $count = fread($fp, filesize($filename));

            //close file
            fclose($fp);

            //Add 1 to the existing count
            $count = $count +1;

            //Display the number of hits
            echo "<p>$count</p>";

            //Reopen to modify content
            $fp = fopen($filename, 'w');

            //write the new count to file
            fwrite($fp, $count);

            //close file
            fclose($fp);
        ?>
    </body>
</html>