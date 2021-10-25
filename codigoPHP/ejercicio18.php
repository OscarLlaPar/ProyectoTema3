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
            $aDistribucionButacas['fila1']=["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"];
            $aDistribucionButacas['fila2']=["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"];
            $aDistribucionButacas['fila3']=["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"];
            $aDistribucionButacas['fila4']=["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"];
            $aDistribucionButacas['fila5']=["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"];
            $aDistribucionButacas['fila6']=["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"];
            $aDistribucionButacas['fila7']=["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"];
            $aDistribucionButacas['fila8']=["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"];
            $aDistribucionButacas['fila9']=["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"];
            $aDistribucionButacas['fila10']=["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"];
            $aDistribucionButacas['fila11']=["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"];
            $aDistribucionButacas['fila12']=["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"];
            $aDistribucionButacas['fila13']=["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"];
            $aDistribucionButacas['fila14']=["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"];
            $aDistribucionButacas['fila15']=["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"];
            $aDistribucionButacas['fila16']=["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"];
            $aDistribucionButacas['fila17']=["Stegen","Dest","Piqué","Araujo","Alba","Mingueza","Busquets","Puig","Pedri","de Jong","Depay","Fati","Dembélé","Braithwaite","Agüero"];
            $aDistribucionButacas['fila18']=["Courtois","Carvajal","Militao","Alaba","Marcelo","Mendy","Kroos","Modric","Casemiro","Camavinga","Hazard","Benzema","Bale","Vinicius","Rodrygo"];
            $aDistribucionButacas['fila19']=["Oblak","Lodi","Savic","Felipe","Hermoso","Trippier","Vrsaljko","Kondogbia","Koke","Lemar","Llorente","Félix","Griezmann","Suárez","Correa"];
            $aDistribucionButacas['fila20']=["Bono","Navas","Carlos","Koundé","Acuña","Rakitic","Gómez","Jordán","Torres","Guidelj","Munir","Mir","Ocampos","En-Nesyri","Lamela"];
            $contadorFilas=1; //para indicar el numero de la fila
            echo "<h1>Usando funciones</h1>";
            /*print_r(current($aDistribucionButacas));*/
            echo "<table>";
            /*while(current($aDistribucionButacas)!=null){
                echo "<tr>";
                echo "<th>". key($aDistribucionButacas)."</th>";
                while(current($aDistribucionButacas[key($aDistribucionButacas)])!=null){
                    echo "<td>".current($aDistribucionButacas[key($aDistribucionButacas)])."</td>";
                    next($aDistribucionButacas[key($aDistribucionButacas)]);
                }
                echo "</tr>";
                next($aSueldoPorDias);
            }*/
            echo "</table>";
        ?>
    </body>
</html>
