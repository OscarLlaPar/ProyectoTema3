<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 02</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            /*
            * Ejercicio 02
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 19/10/2021
            */
            $cadena=<<<micadena
                    SELECT name, price, warranty_available, exclusive_offer
                    FROM Products
                    UNION ALL
                    SELECT name, price, guarantee_available, exclusive_offer
                    FROM Services
                    ;
                    micadena;
            //Mostrar la cadena
            echo $cadena;
        ?>
    </body>
</html>