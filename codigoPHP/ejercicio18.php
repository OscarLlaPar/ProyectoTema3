<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 18</title>
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
            th,td{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            /*
            * Ejercicio 22
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 21/10/2021
            */
            $aDistribucionButacas=[
                'fila1'=>["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"],
                'fila2'=>["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"],
                'fila3'=>["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"],
                'fila4'=>["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"],
                'fila5'=>["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"],
                'fila6'=>["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"],
                'fila7'=>["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"],
                'fila8'=>["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"],
                'fila9'=>["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"],
                'fila10'=>["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"],
                'fila11'=>["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"],
                'fila12'=>["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"],
                'fila13'=>["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"],
                'fila14'=>["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"],
                'fila15'=>["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"],
                'fila16'=>["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"],
                'fila17'=>["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"],
                'fila18'=>["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"],
                'fila19'=>["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"],
                'fila20'=>["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"],
            ];
            echo "<h1>Usando funciones</h1>";
            reset($aDistribucionButacas);
            echo "<table>";
            do{
                echo "<tr>";
                echo "<th>".key($aDistribucionButacas)."</th>";
                do{
                    echo "<td>".current($aDistribucionButacas[key($aDistribucionButacas)])."</td>";
                }while (next($aDistribucionButacas[key($aDistribucionButacas)]));
                echo "</tr>";
            }while(next($aDistribucionButacas));
            echo "</table>";
        ?>
    </body>
</html>
