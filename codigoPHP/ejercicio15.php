<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 15</title>
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
            * Ejercicio 14
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 21/10/2021
            */
            //declaración e inicialización del array
            $aSueldoPorDias=array("lunes"=>100.00, "martes"=>200.00, "miercoles"=>300.00, "jueves"=>400.00, "viernes"=>500.00, "sabado"=>600.00, "domingo"=>2.00);
            echo "<h1>Sueldo por días</h1>";
            //tabla para ver datos
            echo "<table>";
            //uso del bucle foreach para mostrar el array
            foreach($aSueldoPorDias as $dia=>$sueldo){
                echo "<tr>";
                echo "<th>$dia</th>";
                echo "<td>$sueldo</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>
