<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 12</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, td,th{
                border: solid black 1px;
            }
            table{
                border-collapse: collapse;
            }
            th{
                background-color: grey;
            }
        </style>
    </head>
    <body>
        <?php
            /*
            * Ejercicio 12
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 19/10/2021
            */
            echo "<h2>Usando foreach</h2>";
            echo "<h3>Variable \$_SERVER</h3>";
            echo "<table>";
            foreach($_SERVER as $categoria=>$valor){
                echo "<tr>";
                echo "<th>".$categoria."</th><td>".$valor."</d>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<h2>Usando print_r()</h2>";
            echo "<pre>";
            print_r($_SERVER);
            echo "</pre>";
        ?>
    </body>
</html>