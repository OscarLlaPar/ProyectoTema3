<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 14</title>
    </head>
    <body>
        <?php
            /*
            * Ejercicio 14
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * @version 1.0
            * Última modificación: 21/10/2021
            */
            //inculsión de la librería externa de funciones
            include "../core/funcionesEjercicio14.php";
            //declaración de variables
            $numero=2;
            $letra="a";
            $numero2=4;
            //uso de funciones
            echo "<p>El doble de $numero es ".elDoble($numero)."</p>";
            if(esPar($numero)){
                echo "<p>".$numero." es par</p>";
            }
            else{
                echo "<p>".$numero." es impar</p>";
            }
            echo "<p>$numero + $numero2 = ".sumar($numero, $numero2)."</p>";
            echo "<p>$numero - $numero2 = ".restar($numero, $numero2)."</p>";
            echo "<p>$numero x $numero2 = ".multiplicar($numero, $numero2)."</p>";
            echo "<p>$numero / $numero2 = ".dividir($numero, $numero2)."</p>";
            //declaración e inicialización de funciones
            function elDoble($numero){
                if(is_nan($numero)){
                    $resultado=null;
                }
                else{
                    $resultado=$numero*2;
                }
                return $resultado;
            }
            function esPar($numero){
                if($numero%2==0){
                    $resultado=true;
                }
                else{
                    $resultado=false;
                }
                return resultado;
            }
            
        ?>
    </body>
</html>
