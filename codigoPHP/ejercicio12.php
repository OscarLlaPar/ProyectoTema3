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
            * @version 1.0
            * Última modificación: 22/10/2021
            */
            /*Las variables superglobales son arrays asociativos que se pueden mostrar
            recorriendolas con "foreach" o usando "print_r"
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
            echo "<h3>Variable \$_COOKIE</h3>";
            echo "<table>";
            foreach($_COOKIE as $categoria=>$valor){
                echo "<tr>";
                echo "<th>".$categoria."</th><td>".$valor."</d>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<h3>Variable \$_FILES</h3>";
            echo "<table>";
            foreach($_FILES as $categoria=>$valor){
                echo "<tr>";
                echo "<th>".$categoria."</th><td>".$valor."</d>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<h3>Variable \$_SESSION</h3>";
            echo "<table>";
            foreach($_SESSION as $categoria=>$valor){
                echo "<tr>";
                echo "<th>".$categoria."</th><td>".$valor."</d>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<h3>Variable \$_REQUEST</h3>";
            echo "<table>";
            foreach($_REQUEST as $categoria=>$valor){
                echo "<tr>";
                echo "<th>".$categoria."</th><td>".$valor."</d>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<h3>Variable \$_ENV</h3>";
            echo "<table>";
            foreach($_ENV as $categoria=>$valor){
                echo "<tr>";
                echo "<th>".$categoria."</th><td>".$valor."</d>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo "<h2>Usando print_r()</h2>";
            echo "<pre>";
            print_r($_SERVER);
            print_r($_COOKIE);
            print_r($_FILES);
            print_r($_SESSION);
            print_r($_REQUEST);
            print_r($_ENV);
            echo "</pre>";
            
        ?>
    </body>
</html>