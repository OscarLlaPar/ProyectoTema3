<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES - Ejercicio 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            strong{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
        $cadena = "Cosas";
        $entero = 9;
        $decimal = 9.9;
        $bool = true;
        
        echo "<h2>Usando echo</h2>";
        echo "<p>La variable \$cadena tiene un valor de \"<strong>$cadena</strong>\" y es de tipo ".gettype($cadena)."</p>";
        echo "<p>La variable \$entero tiene un valor de <strong>$entero</strong> y es de tipo ".gettype($entero)."</p>";
        echo "<p>La variable \$decimal tiene un valor de <strong>$decimal</strong> y es de tipo ".gettype($decimal)."</p>";
        echo "<p>La variable \$bool tiene un valor de <strong>$bool</strong> y es de tipo ".gettype($bool)."</p>";
        
        print "<h2>Usando print</h2>";
        print "<div>La variable \$cadena tiene un valor de \"<strong>$cadena</strong>\" y es de tipo ".gettype($cadena)."</div>";
        print "<p>La variable \$entero tiene un valor de <strong>$entero</strong> y es de tipo ".gettype($entero)."</p>";
        print "<p>La variable \$decimal tiene un valor de <strong>$decimal</strong> y es de tipo ".gettype($decimal)."</p>";
        print "<p>La variable \$bool tiene un valor de <strong>$bool</strong> y es de tipo ".gettype($bool)."</p>";
             
        printf("<h2>Usando printf</h2>");
        printf("<p>La variable %s tiene un valor de \"<strong>%s</strong>\" y es de tipo %s</p>", '$cadena', $cadena, gettype($cadena));
        printf("<p>La variable %s tiene un valor de <strong>%s</strong> y es de tipo %s</p>", '$entero', $entero, gettype($entero));
        printf("<p>La variable %s tiene un valor de <strong>%s</strong> y es de tipo %s</p>", '$decimal', $decimal, gettype($decimal));
        printf("<p>La variable %s tiene un valor de <strong>%s</strong> y es de tipo %s</p>", '$bool', $bool, gettype($bool));
        
        print_r("<h2>Usando print_r</h2>");
        $resultado = print_r("<p>La variable \$cadena tiene un valor de \"<strong>$cadena</strong>\" y es de tipo ".gettype($cadena)."</p>", true);
        echo $resultado;
        print_r("<p>La variable \$entero tiene un valor de <strong>$entero</strong> y es de tipo ".gettype($entero)."</p>");
        print_r("<p>La variable \$decimal tiene un valor de <strong>$decimal</strong> y es de tipo ".gettype($decimal)."</p>");
        print_r("<p>La variable \$bool tiene un valor de <strong>$bool</strong> y es de tipo ".gettype($bool)."</p>");
        
        echo("<h2>Usando var_dump</h2>");
        echo "Variable \$cadena: ";
        var_dump($cadena);
        echo "<br>";
        echo "Variable \$entero: ";
        var_dump($entero);
        echo "<br>";
        echo "Variable \$decimal: ";
        var_dump($decimal);
        echo "<br>";
        echo "Variable \$bool: ";
        var_dump($bool);
        echo "<br>";
        echo "<br>";
        $cadena = "Pepe";
        $entero = "Pepe";
        $decimal = "Pepe";
        $bool = "Pepe";
        echo "Variable \$cadena: ";
        var_dump($cadena);
        echo "<br>";
        echo "Variable \$entero: ";
        var_dump($entero);
        echo "<br>";
        echo "Variable \$decimal: ";
        var_dump($decimal);
        echo "<br>";
        echo "Variable \$bool: ";
        var_dump($bool);
        echo "<br>";
        ?>
    </body>
</html>