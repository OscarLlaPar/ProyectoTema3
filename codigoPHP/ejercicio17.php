<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 17</title>
        <style>
            td,th{
                border: solid black 3px;
                margin: 5px;
                border-radius: 10px;
                font-size: 14px;
                width:40px;
                height:40px;
            }
            th{
                background-color: grey;
            }
            th,td{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            /*
            * Ejercicio 17
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 27/10/2021
            */
            //declaración e inicialización del array
            $aDistribucionButacas=[
                'fila1'=>[" "," ","Piqué"," "," "," "," ","Puig","Pedri","de Jong"," "," "," ","Braithwaite"," "],
                'fila2'=>["Courtois"," "," ","Alaba"," ","Mendy"," "," "," "," "," ","Benzema"," ","Vinicius"," "],
                'fila3'=>["Oblak"," "," ","Felipe"," "," ","Vrsaljko"," ","Koke"," "," "," "," "," ","Correa"],
                'fila4'=>[" ","Navas"," "," "," ","Rakitic"," ","Jordán"," "," "," ","Mir"," ","En-Nesyri"," "],
                'fila5'=>["Stegen"," "," "," "," ","Mingueza"," "," "," "," ","Depay","Fati"," "," ","Agüero"],
                'fila6'=>[" "," "," "," ","Marcelo"," ","Kroos"," "," ","Camavinga"," "," ","Bale"," ","Rodrygo"],
                'fila7'=>[" ","Lodi"," "," ","Hermoso","Trippier"," "," "," ","Lemar","Llorente"," "," "," "," "],
                'fila8'=>["Bono","Navas"," ","Koundé"," "," "," "," "," ","Guidelj","Munir"," "," "," "," "],
                'fila9'=>[" ","Dest"," ","Araujo","Alba"," ","Busquets"," "," "," "," "," ","Dembélé"," "," "],
                'fila10'=>[" ","Carvajal","Militao"," "," "," ","Kroos","Modric"," "," ","Hazard"," "," "," "," "],
                'fila11'=>[" "," ","Savic"," "," "," "," ","Kondogbia"," "," "," ","Félix","Griezmann","Suárez"," "],
                'fila12'=>[" "," ","Carlos"," ","Acuña"," ","Gómez"," ","Torres"," "," "," ","Ocampos"," "," "],
                'fila13'=>[" "," "," "," "," "," "," ","Puig","Pedri","de Jong","Depay","Fati"," "," "," "],
                'fila14'=>[" "," "," ","Alaba"," ","Mendy","Kroos"," "," "," "," ","Benzema"," ","Vinicius"," "],
                'fila15'=>["Oblak","Lodi"," "," "," "," "," "," ","Koke"," ","Llorente","Félix"," "," "," "],
                'fila16'=>[" "," "," ","Koundé","Acuña"," "," ","Jordán"," "," "," "," ","Ocampos"," ","Lamela"],
                'fila17'=>["Stegen"," "," "," "," ","Mingueza"," "," "," "," ","Depay","Fati"," "," ","Agüero"],
                'fila18'=>[" "," "," "," ","Marcelo"," ","Kroos"," "," ","Camavinga"," "," ","Bale"," ","Rodrygo"],
                'fila19'=>[" ","Lodi"," "," ","Hermoso","Trippier"," "," "," ","Lemar","Llorente"," "," "," "," "],
                'fila20'=>["Bono","Navas"," ","Koundé"," "," "," "," "," ","Guidelj","Munir"," "," "," "," "]
            ];
            $contadorFilas=1; //para indicar el numero de la fila
            echo "<h1>Usando foreach</h1>";
            //tabla para ver datos
            echo "<table>";
            //uso del bucle foreach para mostrar el array
            foreach($aDistribucionButacas as $fila){
                echo "<tr>";
                echo "<th>$contadorFilas</th>";
                foreach($fila as $persona){
                    echo "<td>$persona</td>";
                }
                
                echo "</tr>";
                $contadorFilas++;
            }
            echo "</table>";
        ?>
    </body>
</html>
