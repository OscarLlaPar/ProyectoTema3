<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 24</title>
        <style>
            body{
                background-color: black;
                color: white;
                font-family: Calibri, sans-serif;
                height:100%;
            }
           /*button, input{
                font-family : inherit;
                font-size   : 100%;
              }
            h1{
                margin-top:25px;
                bargin-botton: 30px;
            }
            .contenedor{
                position: absolute;
                border: solid white 1px;
                width: 30%;
                height: 50%;
                left:35%;
                top: 20%;
            }*/
            footer{
                background-color: black;
                font-family: 'Times New Roman', Times, serif;
                font-size: 12px;
                position: relative;
                top: 90%;
                bottom: 0%;
                width: 99%;
                height: 100px;
                text-align: left;
                border-top: solid white 1px;
            }
            img{
                height: 20px;
		width: 20px;
            }
            /*form{
                position:absolute;
                left:10%;
                width:80%;
            }
            .item{
                margin:10px;
                height:40px;
            }*/
            #enviar{
                margin-top: 25px;
                margin-left: 10px;
                margin-bottom: 30px;
                
                
            }
            input{
                background-color: black;
                color: white;
                border-bottom: solid white 1px;
            }
            .cont{
                border: solid white 1px;
                position: relative;
                width:30%;
                left:35%;
                margin-top: 50px;
                margin-bottom: 300px;
            }
            .cont h1{
                text-align: center;
            }
            table,tr,th,td{
                border: solid white 1px;
                border-collapse: collapse;
            }
            table{
                position:relative;
                width:90%;
                left: 5%;
                margin-bottom:25px;
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
            * Ejercicio 24
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 24/10/2021
            */
            include "../core/210322ValidacionFormularios.php";
            //Inicialización de variables
            $entradaOK = true; //Inicialización de la variable que nos indica que todo va bien
            $aErrores = [
                'nombre'=>null,
                'altura'=>null,
                'fechanacimiento'=>null,
                'telefono'=>null,
                'ciclo'=>null,
                'modulos'=>null
            ];
            $aRespuestas = [
                'nombre'=>null,
                'altura'=>null,
                'fechanacimiento'=>null,
                'telefono'=>null,
                'ciclo'=>null,
                'modulos'=>null
            ];
            // Si ya se ha pulsado el boton "Enviar"
            if(!empty($_REQUEST['enviar'])){
                //realizar las validaciones. Si la respuesta está mal, la función carga la variable con un mensaje de error
                //si no, se queda vacía
                $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],30,2,1);
                
                $aErrores['altura']= validacionFormularios::comprobarEntero($_REQUEST['altura'],300,0,1);
                
                $aErrores['fechanacimiento']= validacionFormularios::validarFecha($_REQUEST['fechanacimiento'],'01/01/2200',"01/01/1900",1);
                
                $aErrores['telefono']= validacionFormularios::validarTelefono($_REQUEST['telefono'],1);
                
                $aErrores['ciclo']= validacionFormularios::validarElementoEnLista($_REQUEST['ciclo'],$aOpciones=['DAW1','DAW2']);
                
                $aErrores['modulos']= validacionFormularios::validarElementoEnLista($_REQUEST['modulos'],$aOpciones=[
                    'Entornos de desarrollo',
                    'Sistemas Informáticos',
                    'Programación',
                    'Formación y Orientación Laboral',
                    'Bases de Datos',
                    'Lenguajes de Marcas',
                    'Desarrollo Web en Entorno Servidor',
                    'Desarrollo Web en Entorno Cliente',
                    'Desarrollo de Interfaces Web',
                    'Despliegue de Aplicaciones Web',
                    'Empresa e Iniciativa Emprendedora']);
                //acciones correspondientes en caso de que haya algún error
                foreach($aErrores as $error){
                    //condición de que hay un error
                    if(($error)!=null){
                        //limpieza del campo para cuando vuelva a aparecer el formulario
                        $_REQUEST[key($error)]="";
                        $entradaOK=false;
                    }
                }
            }
            // Si no se ha enviado el formulario (= es la primera vez)
            else{
                $entradaOK=false;
            }
            // Si no hay errores
            if($entradaOK){
                //Tratamiento del formulario
                //recogida de valores
                $aRespuestas['nombre'] = $_REQUEST['nombre'];
                $aRespuestas['altura'] = $_REQUEST['altura'];
                $aRespuestas['fechanacimiento'] = $_REQUEST['fechanacimieno'];
                $aRespuestas['telefono'] = $_REQUEST['telefono'];
                $aRespuestas['ciclo'] = $_REQUEST['ciclo'];
                $aRespuestas['modulos'] = $_REQUEST['modulos'];
                //muestra de valores por pantalla
                echo "<div class=\"cont\">";
                echo "<h1 style=\"color:green\">Datos enviados</h1>";
                echo "<table>";
                foreach($aRespuestas as $nombreCampo => $respuesta){
                    echo "<tr>";
                    echo "<th>".$nombreCampo."</th>";
                    echo "<td>".$respuesta."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
        ?>
            <footer>
                <p>
                    Óscar Llamas Parra
                    <a href="https://github.com/OscarLlaPar/" target="__blank"><img src="../webroot/img/github.png" alt="Github"></img></a>
                </p>
                <p>
                    DAW 2
                </p>
                <p>
                    IES Los Sauces, Benavente 2021-2022
                </p>
                <div class="cuadro" id="abajo"></div>
            </footer>
        <?php
            }
            // Si hay errores (o es la primera vez)
            else{
        ?>
                <div class="contenedor">
                    <h1>Formulario del ejercicio 24</h1>
                    <form name="ejercicio24" action="ejercicio24.php" method="post">
                        <fieldset>
                            <legend>Datos personales: </legend>
                                <label for="nombre">Nombre<span style="color:red">*</span>:</label><br>
                                <input id="nombre" type="text" name="nombre" value="<?php echo $_REQUEST['nombre'];?>" >
        <?php
                if(!is_null($aErrores['nombre'])){
                    echo "<span style=\"color: red\">$aErrores[nombre]</span>";
                }
        ?>              
                        
                                <br>
                                <label for="altura">Altura (cm)<span style="color:red">*</span>:</label><br>
                                <input id="altura" type="text" name="altura" value="<?php echo $_REQUEST['altura'];?>" >  
        <?php
                if(!is_null($aErrores['altura'])){
                    echo "<span style=\"color: red\">$aErrores[altura]</span>";
                }
        ?>
                                <br>
                                <label for="fechanacimiento">Fecha de nacimiento<span style="color:red">*</span>:</label><br>
                                <input id="fechanacimiento" type="date" name="fechanacimiento" value="<?php echo $_REQUEST['fechanacimiento'];?>" >
        <?php
                if(!is_null($aErrores['fecha-nacimiento'])){
                    echo "<span style=\"color: red\">$aErrores[fechanacimiento]</span>";
                }
        ?>                      
                                <br>
                                <label for="telefono">Teléfono<span style="color:red">*</span>:</label><br>
                                <input id="telefono" type="tel" name="telefono" value="<?php echo $_REQUEST['telefono'];?>" >
        <?php
                if(!is_null($aErrores['telefono'])){
                    echo "<span style=\"color: red\">$aErrores[telefono]</span>";
                }
        ?>    
                        </fieldset>
                        <fieldset>
                            <legend>Cursos:</legend>
                                <label for="ciclo">Ciclo<span style="color:red">*</span>:</label><br>
                                <input id="DAW1" type="radio" name="ciclo" value="DAW1" <?php 
                                    if($_REQUEST['ciclo']==='DAW1'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="DAW1">DAW1</label><br>
                                
                                <input id="DAW2" type="radio" name="ciclo" value="DAW2" <?php 
                                    if($_REQUEST['ciclo']==='DAW2'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="DAW2">DAW2</label><br>
        <?php                   
                if(!is_null($aErrores['ciclo'])){
                    echo "<span style=\"color: red\">$aErrores[ciclo]</span>";
                }
        ?>
                                <br>
                                <label for="modulos">Módulos<span style="color:red">*</span>:</label><br>
                                <input id="EDD" type="checkbox" name="modulos" value="Entornos de Desarrollo" <?php 
                                    if($_REQUEST['modulos']==='Entornos de Desarrollo'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="EDD">Entornos de desarrollo</label><br>
                                
                                <input id="SINF" type="checkbox" name="modulos" value="Sistemas Informaticos" <?php 
                                    if($_REQUEST['modulos']==='Sistemas Informaticos'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="SINF">Sistemas Informáticos</label><br>
                                
                                <input id="PROG" type="checkbox" name="modulos" value="Programacion" <?php 
                                    if($_REQUEST['modulos']==='Programacion'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="PROG">Programación</label><br>
                                
                                <input id="FOL" type="checkbox" name="modulos" value="Formacion y Orientacion Laboral" <?php 
                                    if($_REQUEST['modulos']==='Formacion y Orientacion Laboral'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="FOL">Formación y Orientación Laboral</label><br>
                                
                                <input id="BBDD" type="checkbox" name="modulos" value="Bases de Datos" <?php 
                                    if($_REQUEST['modulos']==='Bases de Datos'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="BBDD">Bases de Datos</label><br>
                                
                                <input id="LMSGI" type="checkbox" name="modulos" value="Lenguajes de Marcas" <?php 
                                    if($_REQUEST['modulos']==='Lenguajes de Marcas'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="LMSGI">Lenguajes de Marcas</label><br>
                                
                                <input id="DWES" type="checkbox" name="modulos" value="Desarrollo Web en Entorno Servidor" <?php 
                                    if($_REQUEST['modulos']==='Desarrollo Web en Entorno Servidor'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="DWES">Desarrollo Web en Entorno Servidor</label><br>
                                
                                <input id="DWEC" type="checkbox" name="modulos" value="Desarrollo Web en Entorno Cliente" <?php 
                                    if($_REQUEST['modulos']==='Desarrollo Web en Entorno Cliente'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="DWEC">Desarrollo Web en Entorno Cliente</label><br>
                                
                                <input id="DIW" type="checkbox" name="modulos" value="Desarrollo de Interfaces Web" <?php 
                                    if($_REQUEST['modulos']==='Desarrollo de Interfaces Web'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="DIW">Desarrollo de Interfaces Web</label><br>
                                
                                <input id="DAW" type="checkbox" name="modulos" value="Despliegue de Aplicaciones Web" <?php 
                                    if($_REQUEST['modulos']==='Despliegue de Aplicaciones Web'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="DAW">Despliegue de Aplicaciones Web</label><br>
                                
                                <input id="EIE" type="checkbox" name="modulos" value="Empresa e Iniciativa Emprendedora" <?php 
                                    if($_REQUEST['modulos']==='Empresa e Iniciativa Emprendedora'){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="EIE">Empresa e Iniciativa Emprendedora</label><br>
        <?php
                if(!is_null($aErrores['modulos'])){
                    echo "<span style=\"color: red\">$aErrores[modulos]</span>";
                }
        ?>                            
                        </fieldset>
                        <input id="enviar" type="submit" value="Enviar" name="enviar"/>
                      
                    </form>
                </div>
                <footer>
                <p>
                    Óscar Llamas Parra
                                <a href="https://github.com/OscarLlaPar/" target="__blank"><img src="../webroot/img/github.png" alt="Github"></img></a>
                </p>
                <p>
                    DAW 2
                </p>
                <p>
                    IES Los Sauces, Benavente 2021-2022
                </p>
                <div class="cuadro" id="abajo"></div>
                </footer>
        <?php       
            }
        ?>

    </body>
</html>
