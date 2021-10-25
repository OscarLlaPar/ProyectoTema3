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
            * Última modificación: 25/10/2021
            */
            session_start();  //inicia una sesión
            //se crea un contador en $_SESSION en caso de que no esté creado, sería la visita número uno
            if ( !isset( $_SESSION['contador'] ) ){ 
            $_SESSION['contador'] = 1;
            
            }
            //si no es la visita número uno, será la siguiente, y la siguiente, y la siguiente...
            else {
            $_SESSION['contador']++;
            }
            //muestra por pantalla
            echo "Esta página ha sido visitada ".$_SESSION['contador']." veces";
        ?>
    </body>
</html>