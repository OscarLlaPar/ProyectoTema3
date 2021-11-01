<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 25</title>
        <style>
            body{
                background-color:#202020;
                color: white;
                font-family: Roboto, sans-serif;
                font-size:16px;
            }
            fieldset{
                background-color:#444444;
                border-radius: 10px;
                margin:0;
            }
            legend{
                margin:0;
                font-weight:bold;
                background-color: darkorchid;
                border: solid #AAAAAA 2px;
                border-radius: 5px;
                padding:5px;
                font-size:20px;
            }
            h1{
                text-align: center;
            }
            input, label, select, textarea{
                margin:5px 5px 5px 30px;
            }
            input[type=text]{
                background-color: inherit;
                border: none;
                border-bottom: solid white 2px;
                color: white;
                font-size:16px;
                padding: 5px;
            }
            footer{
                font-size:14px;
                background-color: #333333;
                color:#AAAAAA;
                border-top: solid #AAAAAA 1px;
                width: 100%;
                margin:0;
                margin-top:20px;
                padding-bottom:20px;
                
            }
            #enviar, #vaciar{
                background-color: #202020;
                color:white;
                width: 100px;
                height: 50px;
                border: solid white 2px;
                margin:30px 0px 10px 50px;
            }
            #enviar:hover{
                background-color:darkorchid;
            }
            #vaciar:hover{
                background-color:hotpink;
            }
            .contenedor{
                margin:0;
                padding:0;
            }
            .titulo{
                background-color: #333333;
                border-bottom: solid #AAAAAA 1px;
                margin-bottom: 20px;
                padding:0;
            }
        </style>
    </head>
    <body>
        <?php
            /*
            * Ejercicio 25
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 21/10/2021
            */
            //Inicialización de variables
            include "../core/210322ValidacionFormularios.php";
            //Inicialización de variables
            $entradaOK = true; //Inicialización de la variable que nos indica que todo va bien
            $aErrores = [
                'alfabeticoObligatorio'=>null,
                'alfabeticoOpcional'=>null,
                'alfanumericoObligatorio'=>null,
                'alfanumericoOpcional'=>null,
                'dniObligatorio'=>null,
                'dniOpcional'=>null,
                'decimalObligatorio'=>null,
                'decimalOpcional'=>null,
                'numericoObligatorio'=>null,
                'numericoOpcional'=>null,
                'fechaObligatorio'=>null,
                'fechaOpcional'=>null,
                'telefonoObligatorio'=>null,
                'telefonoOpcional'=>null,
                'codigopostalObligatorio'=>null,
                'codigopostalOpcional'=>null,
                'urlObligatorio'=>null,
                'urlOpcional'=>null,
                'emailObligatorio'=>null,
                'emailOpcional'=>null,
                'fechahoraObligatorio'=>null,
                'fechahoraOpcional'=>null,
                'textolargoObligatorio'=>null,
                'textolargoOpcional'=>null,
                'radioObligatorio'=>null,
                'radioOpcional'=>null,
                /*'checkboxObligatorio'=>null,*/
                'rangoObligatorio'=>null,
                'rangoOpcional'=>null,
                'listaObligatorio'=>null,
                'listaOpcional'=>null,
                'ficheroObligatorio'=>null,
                'ficheroOpcional'=>null
            ];
            $aRespuestas = [
                'alfabeticoObligatorio'=>null,
                'alfabeticoOpcional'=>null,
                'alfanumericoObligatorio'=>null,
                'alfanumericoOpcional'=>null,
                'dniObligatorio'=>null,
                'dniOpcional'=>null,
                'decimalObligatorio'=>null,
                'decimalOpcional'=>null,
                'numericoObligatorio'=>null,
                'numericoOpcional'=>null,
                'fechaObligatorio'=>null,
                'fechaOpcional'=>null,
                'telefonoObligatorio'=>null,
                'telefonoOpcional'=>null,
                'codigopostalObligatorio'=>null,
                'codigopostalOpcional'=>null,
                'urlObligatorio'=>null,
                'urlOpcional'=>null,
                'emailObligatorio'=>null,
                'emailOpcional'=>null,
                'fechahoraObligatorio'=>null,
                'fechahoraOpcional'=>null,
                'textolargoObligatorio'=>null,
                'textolargoOpcional'=>null,
                'radioObligatorio'=>null,
                'radioOpcional'=>null,
                /*'checkboxObligatorio'=>null,*/
                'rangoObligatorio'=>null,
                'rangoOpcional'=>null,
                'listaObligatorio'=>null,
                'listaOpcional'=>null,
                'ficheroObligatorio'=>null,
                'ficheroOpcional'=>null
            ];
            // Si ya se ha pulsado el boton "Enviar"
            if(!empty($_REQUEST['enviar'])){
                //realizar las validaciones. Si la respuesta está mal, la función carga la variable con un mensaje de error
                //si no, se queda vacía
                $aErrores['alfabeticoObligatorio']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'],30,2,1);
                
                $aErrores['alfabeticoOpcional']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOpcional'],30,2,0);
                
                $aErrores['alfanumericoObligatorio']= validacionFormularios::comprobarAlfanumerico($_REQUEST['alfanumericoObligatorio'],30,2,1);
                
                $aErrores['alfanumericoOpcional']= validacionFormularios::comprobarAlfanumerico($_REQUEST['alfanumericoOpcional'],30,2,0);
                
                $aErrores['dniObligatorio']= validacionFormularios::validarDni($_REQUEST['dniObligatorio'],1);
                
                $aErrores['dniOpcional']= validacionFormularios::validarDni($_REQUEST['dniOpcional'],0);
                
                $aErrores['decimalObligatorio']= validacionFormularios::comprobarFloat($_REQUEST['decimalObligatorio'],10,0,1);
                
                $aErrores['decimalOpcional']= validacionFormularios::comprobarFloat($_REQUEST['decimalOpcional'],10,0,0);
                
                $aErrores['numericoObligatorio']= validacionFormularios::comprobarEntero($_REQUEST['numericoObligatorio'],300,0,1);
                
                $aErrores['numericoOpcional']= validacionFormularios::comprobarEntero($_REQUEST['numericoOpcional'],300,0,0);
                
                $aErrores['fechaObligatorio']= validacionFormularios::validarFecha($_REQUEST['fechaObligatorio'],'01/01/2200',"01/01/1900",1);
                
                $aErrores['fechaOpcional']= validacionFormularios::validarFecha($_REQUEST['fechaOpcional'],'01/01/2200',"01/01/1900",0);
                
                $aErrores['telefonoObligatorio']= validacionFormularios::validarTelefono($_REQUEST['telefonoObligatorio'],1);
                
                $aErrores['telefonoOpcional']= validacionFormularios::validarTelefono($_REQUEST['telefonoOpcional'],0);
                
                $aErrores['codigopostalObligatorio']= validacionFormularios::validarCp($_REQUEST['codigopostalObligatorio'],1);
                
                $aErrores['codigopostalOpcional']= validacionFormularios::validarCp($_REQUEST['codigopostalOpcional'],0);
                
                $aErrores['urlObligatorio']= validacionFormularios::validarURL($_REQUEST['urlObligatorio'],1);
                
                $aErrores['urlOpcional']= validacionFormularios::validarURL($_REQUEST['urlOpcional'],0);
                
                $aErrores['emailObligatorio']= validacionFormularios::validarEmail($_REQUEST['emailObligatorio'],1);
                
                $aErrores['emailOpcional']= validacionFormularios::validarEmail($_REQUEST['emailOpcional'],0);
                
                $aErrores['fechahoraObligatorio']= validacionFormularios::comprobarNoVacio($_REQUEST['fechahoraObligatorio']);
                
                $aErrores['textolargoObligatorio']= validacionFormularios::comprobarNoVacio($_REQUEST['textolargoObligatorio']);
                
                $aErrores['radioObligatorio']= validacionFormularios::validarElementoEnLista($_REQUEST['radioObligatorio'],$aOpciones=['opcion1','opcion2']);
                
                /*$aErrores['checkboxObligatorio']= validacionFormularios::validarElementoEnLista($_REQUEST['checkboxObligatorio'],$aOpciones=[
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
                    'Empresa e Iniciativa Emprendedora']);*/
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
                $aRespuestas['alfabeticoObligatorio'] = $_REQUEST['alfabeticoObligatorio'];
                $aRespuestas['alfabeticoOpcional'] = $_REQUEST['alfabeticoOpcional'];
                $aRespuestas['alfanumericoObligatorio'] = $_REQUEST['alfanumericoObligatorio'];
                $aRespuestas['alfanumericoOpcional'] = $_REQUEST['alfanumericoOpcional'];
                $aRespuestas['dniObligatorio'] = $_REQUEST['dniObligatorio'];
                $aRespuestas['dniOpcional'] = $_REQUEST['dniOpcional'];
                $aRespuestas['decimalObligatorio'] = $_REQUEST['decimalObligatorio'];
                $aRespuestas['decimalOpcional'] = $_REQUEST['decimalOpcional'];
                $aRespuestas['numericoObligatorio'] = $_REQUEST['numericoObligatorio'];
                $aRespuestas['numericoOpcional'] = $_REQUEST['numericoOpcional'];
                $aRespuestas['fechaObligatorio'] = $_REQUEST['fechaObligatorio'];
                $aRespuestas['fechaOpcional'] = $_REQUEST['fechaOpcional'];
                $aRespuestas['telefonoObligatorio'] = $_REQUEST['telefonoObligatorio'];
                $aRespuestas['telefonoOpcional'] = $_REQUEST['telefonoOpcional'];
                $aRespuestas['codigopostalObligatorio'] = $_REQUEST['codigopostalObligatorio'];
                $aRespuestas['codigopostalOpcional'] = $_REQUEST['codigopostalOpcional'];
                $aRespuestas['urlObligatorio'] = $_REQUEST['urlObligatorio'];
                $aRespuestas['urlOpcional'] = $_REQUEST['urlOpcional'];
                $aRespuestas['emailObligatorio'] = $_REQUEST['emailObligatorio'];
                $aRespuestas['emailOpcional'] = $_REQUEST['emailOpcional'];
                $aRespuestas['fechahoraObligatorio'] = $_REQUEST['fechahoraObligatorio'];
                $aRespuestas['fechahoraOpcional'] = $_REQUEST['fechahoraOpcional'];
                $aRespuestas['textolargoObligatorio'] = $_REQUEST['textolargoObligatorio'];
                $aRespuestas['textolargoOpcional'] = $_REQUEST['textolargoOpcional'];
                $aRespuestas['radioObligatorio'] = $_REQUEST['radioObligatorio'];
                $aRespuestas['radioOpcional'] = $_REQUEST['radioOpcional'];
                /*$aRespuestas['checkboxObligatorio'] = $_REQUEST['checkboxObligatorio'];*/
                $aRespuestas['rangoObligatorio'] = $_REQUEST['rangoObligatorio'];
                $aRespuestas['rangoOpcional'] = $_REQUEST['rangoOpcional'];
                $aRespuestas['listaObligatorio'] = $_REQUEST['listaObligatorio'];
                $aRespuestas['listaOpcional'] = $_REQUEST['listaOpcional'];
                $aRespuestas['ficheroObligatorio'] = $_REQUEST['ficheroObligatorio'];
                $aRespuestas['ficheroOpcional'] = $_REQUEST['ficheroOpcional'];
                //muestra de valores por pantalla
                echo "<div class=\"cont\">";
                echo "<h1 style=\"color:green\">Datos enviados</h1>";
                echo "<table class=\"respuestas\">";
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
                    <div class="titulo">
                        <h1>Plantilla de formularios</h1>
                    </div>
                    <form name="ejercicio25" action="ejercicio25.php" method="post">
                        <fieldset>
                            <legend>Título: </legend>
                                    
                                    
                                    <label for="alfabeticoObligatorio">Alfabético obligatorio<span style="color:red">*</span>:</label>
                                    <input id="alfabeticoObligatorio" type="text" name="alfabeticoObligatorio" value="<?php echo (isset($_REQUEST['alfabeticoObligatorio']))?$_REQUEST['alfabeticoObligatorio']:"";?>" >
                                
                                    <?php
                echo (!is_null($aErrores['alfabeticoObligatorio']))?"<span style=\"color: red\">$aErrores[alfabeticoObligatorio]</span>":"";
        ?>              
                                    <br>
                                    <label for="alfabeticoOpcional">Alfabético opcional:</label>
                                    <input id="alfabeticoOpcional" type="text" name="alfabeticoOpcional" value="<?php echo (isset($_REQUEST['alfabeticoOpcional']))?$_REQUEST['alfabeticoOpcional']:"";?>" >
                                
                                    <?php
                echo (!is_null($aErrores['alfabeticoObligatorio']))?"<span style=\"color: red\">$aErrores[alfabeticoObligatorio]</span>":"";
        ?>      
                                    <br>
                                    <label for="alfanumericoObligatorio">Alfanumérico obligatorio<span style="color:red">*</span>:</label>
                                    <input id="alfanumericoObligatorio" type="text" name="alfanumericoObligatorio" value="<?php echo (isset($_REQUEST['alfanumericoObligatorio']))?$_REQUEST['alfanumericoObligatorio']:"";?>" >
                                   
        <?php
                echo (!is_null($aErrores['alfanumericoObligatorio']))?"<span style=\"color: red\">$aErrores[alfanumericoObligatorio]</span>":"";
        ?>  
                                    <br>
                                    <label for="alfanumericoOpcional">Alfanumérico opcional:</label>
                                    <input id="alfanumericoOpcional" type="text" name="alfanumericoOpcional" value="<?php echo (isset($_REQUEST['alfanumericoOpcional']))?$_REQUEST['alfanumericoOpcional']:"";?>" >
                                
        <?php
                echo (!is_null($aErrores['alfabeticoObligatorio']))?"<span style=\"color: red\">$aErrores[alfabeticoObligatorio]</span>":"";
        ?>     
                                    <br>
                                    <label for="dniObligatorio">DNI obligatorio<span style="color:red">*</span>:</label>
                                    <input id="dniObligatorio" type="text" name="dniObligatorio" value="<?php echo (isset($_REQUEST['dniObligatorio']))?$_REQUEST['dniObligatorio']:"";?>" >
                                
        <?php
                echo (!is_null($aErrores['dniObligatorio']))?"<span style=\"color: red\">$aErrores[dniObligatorio]</span>":"";
        ?>  
                                    <br>
                                    <label for="dniOpcional">DNI opcional:</label>
                                    <input id="dniOpcional" type="text" name="dniOpcional" value="<?php echo (isset($_REQUEST['dniOpcional']))?$_REQUEST['dniOpcional']:"";?>" >
                                
        <?php
                echo (!is_null($aErrores['dniOpcional']))?"<span style=\"color: red\">$aErrores[dniOpcional]</span>":"";
        ?>  
                                        <br>
                                        <label for="decimalObligatorio">Decimal obligatorio<span style="color:red">*</span>:</label>
                                        <input id="decimalObligatorio" type="text" name="decimalObligatorio" value="<?php echo (isset($_REQUEST['decimalObligatorio']))?$_REQUEST['decimalObligatorio']:"";?>" >  
                                          
        <?php
                echo (!is_null($aErrores['decimalObligatorio']))?"<span style=\"color: red\">$aErrores[decimalObligatorio]</span>":"";
        ?>
                                        <br>
                                        <label for="decimalOpcional">Decimal opcional:</label>
                                        <input id="decimalOpcional" type="text" name="decimalOpcional" value="<?php echo (isset($_REQUEST['decimalOpcional']))?$_REQUEST['decimalOpcional']:"";?>" >  
                                          
        <?php
                echo (!is_null($aErrores['decimalOpcional']))?"<span style=\"color: red\">$aErrores[decimalOpcional]</span>":"";
        ?>
                                        <br>
                                        <label for="numericoObligatorio">Numérico obligatorio<span style="color:red">*</span>:</label>       
                                        <input id="numericoObligatorio" type="text" name="numericoObligatorio" value="<?php echo (isset($_REQUEST['numericoObligatorio']))?$_REQUEST['numericoObligatorio']:"";?>" > 
                                
        <?php
                echo (!is_null($aErrores['numericoObligatorio']))?"<span style=\"color: red\">$aErrores[numericoObligatorio]</span>":"";
        ?>
                                        <br>
                                        <label for="numericoOpcional">Numérico opcional:</label>       
                                        <input id="numericoOpcional" type="text" name="numericoOpcional" value="<?php echo (isset($_REQUEST['numericoOpcional']))?$_REQUEST['numericoOpcional']:"";?>" > 
                                
        <?php
                echo (!is_null($aErrores['numericoOpcional']))?"<span style=\"color: red\">$aErrores[numericoOpcional]</span>":"";
        ?>
                                        <br>
                                        <label for="fechaObligatorio">Fecha obligatoria<span style="color:red">*</span>:</label>
                                        <input id="fechaObligatorio" type="text" name="fechaObligatorio" value="<?php echo (isset($_REQUEST['fechaObligatorio']))?$_REQUEST['fechaObligatorio']:"";?>" >
                                
        <?php
                echo (!is_null($aErrores['fechaObligatorio']))?"<span style=\"color: red\">$aErrores[fechaObligatorio]</span>":"";
        ?>                  
                                        <br>
                                        <label for="fechaOpcional">Fecha opcional:</label>
                                        <input id="fechaOpcional" type="text" name="fechaOpcional" value="<?php echo (isset($_REQUEST['fechaOpcional']))?$_REQUEST['fechaOpcional']:"";?>" >
                                
        <?php
                echo (!is_null($aErrores['fechaOpcional']))?"<span style=\"color: red\">$aErrores[fechaOpcional]</span>":"";
        ?>           
                                        <br>
                                    <label for="telefonoObligatorio">Teléfono obligatorio<span style="color:red">*</span>:</label>
                                    <input id="telefonoObligatorio" type="text" name="telefonoObligatorio" value="<?php echo (isset($_REQUEST['telefonoObligatorio']))?$_REQUEST['telefonoObligatorio']:"";?>" >
        <?php
                echo (!is_null($aErrores['telefonoObligatorio']))?"<span style=\"color: red\">$aErrores[telefonoObligatorio]</span>":"";
        ?>
                                    <br>
                                    <label for="telefonoOpcional">Teléfono opcional:</label>
                                    <input id="telefonoOpcional" type="text" name="telefonoOpcional" value="<?php echo (isset($_REQUEST['telefonoOpcional']))?$_REQUEST['telefonoOpcional']:"";?>" >
        <?php
                echo (!is_null($aErrores['telefonoOpcional']))?"<span style=\"color: red\">$aErrores[telefonoOpcional]</span>":"";
        ?>
                                <br>
                                <label for="codigopostalObligatorio">Código postal obligatorio<span style="color:red">*</span>:</label>
                                <input id="codigopostalObligatorio" type="text" name="codigopostalObligatorio" value="<?php echo (isset($_REQUEST['codigopostalObligatorio']))?$_REQUEST['codigopostalObligatorio']:"";?>" >
        <?php
                echo (!is_null($aErrores['codigopostalObligatorio']))?"<span style=\"color: red\">$aErrores[codigopostalObligatorio]</span>":"";
        ?>    
                                <br>
                                <label for="codigopostalOpcional">Código postal opcional:</label>
                                <input id="codigopostalOpcional" type="text" name="codigopostalOpcional" value="<?php echo (isset($_REQUEST['codigopostalOpcional']))?$_REQUEST['codigopostalOpcional']:"";?>" >
        <?php
                echo (!is_null($aErrores['codigopostalOpcional']))?"<span style=\"color: red\">$aErrores[codigopostalOpcional]</span>":"";
        ?>    
                                <br>
                                <label for="urlObligatorio">URL obligatoria<span style="color:red">*</span>:</label>
                                <input id="urlObligatorio" type="text" name="urlObligatorio" value="<?php echo (isset($_REQUEST['urlObligatorio']))?$_REQUEST['urlObligatorio']:"";?>" >
        <?php
                echo (!is_null($aErrores['urlObligatorio']))?"<span style=\"color: red\">$aErrores[urlObligatorio]</span>":"";
        ?>   
                                <br>
                                <label for="urlOpcional">URL opcional:</label>
                                <input id="urlOpcional" type="text" name="urlOpcional" value="<?php echo (isset($_REQUEST['urlOpcional']))?$_REQUEST['urlOpcional']:"";?>" >
        <?php
                echo (!is_null($aErrores['urlOpcional']))?"<span style=\"color: red\">$aErrores[urlOpcional]</span>":"";
        ?>   
                                <br>
                                <label for="emailObligatorio">E-mail obligatorio<span style="color:red">*</span>:</label>
                                <input id="emailObligatorio" type="text" name="emailObligatorio" value="<?php echo (isset($_REQUEST['emailObligatorio']))?$_REQUEST['emailObligatorio']:"";?>" >
        <?php
                echo (!is_null($aErrores['emailObligatorio']))?"<span style=\"color: red\">$aErrores[emailObligatorio]</span>":"";
        ?>   
                                <br>
                                <label for="emailOpcional">E-mail opcional:</label>
                                <input id="emailOpcional" type="text" name="emailOpcional" value="<?php echo (isset($_REQUEST['emailOpcional']))?$_REQUEST['emailOpcional']:"";?>" >
        <?php
                echo (!is_null($aErrores['emailOpcional']))?"<span style=\"color: red\">$aErrores[emailOpcional]</span>":"";
        ?>   
                                <br>
                                <label for="fechahoraObligatorio">Fecha y hora obligatorias<span style="color:red">*</span>:</label>
                                <input id="fechahoraObligatorio" type="text" name="fechahoraObligatorio" value="<?php echo (isset($_REQUEST['fechahoraObligatorio']))?$_REQUEST['fechahoraObligatorio']:"";?>" >
        <?php
                echo (!is_null($aErrores['fechahoraObligatorio']))?"<span style=\"color: red\">$aErrores[fechahoraObligatorio]</span>":"";
        ?> 
                                <br>
                                <label for="fechahoraOpcional">Fecha y hora opcionales:</label>
                                <input id="fechahoraOpcional" type="text" name="fechahoraOpcional" value="<?php echo (isset($_REQUEST['fechahoraOpcional']))?$_REQUEST['fechahoraOpcional']:"";?>" >
                                <br>
                                <label for="textolargoObligatorio">Texto largo obligatorio<span style="color:red">*</span>:</label>
                                <textarea id="textolargoObligatorio" name="textolargoObligatorio"><?php echo (isset($_REQUEST['textolargoObligatorio']))?$_REQUEST['textolargoObligatorio']:"";?></textarea>
        <?php
                echo (!is_null($aErrores['textolargoObligatorio']))?"<span style=\"color: red\">$aErrores[textolargoObligatorio]</span>":"";
        ?> 
                                <br>
                                <label for="textolargoOpcional">Texto largo opcional:</label>
                                <textarea id="textolargoOpcional" name="textolargoOpcional"><?php echo (isset($_REQUEST['textolargoOpcional']))?$_REQUEST['textolargoOpcional']:"";?></textarea>
                                <br>
                                <label for="radioObligatorio">Radio obligatorio<span style="color:red">*</span>:</label>
                                <input id="opcion1" type="radio" name="radioObligatorio" value="opcion1" 
                                <?php 
                                    echo ($_REQUEST['radioObligatorio']==='opcion1')?"checked":"";
                                    
                                ?>>
                                <label for="opcion1">Opción 1</label>
                                
                                <input id="opcion2" type="radio" name="radioObligatorio" value="opcion2" 
                                <?php 
                                    echo ($_REQUEST['radioObligatorio']==='opcion2')?"checked":"";
                                ?>>
                                <label for="opcion2">Opción 2</label>
        <?php                   
                echo (!is_null($aErrores['radioObligatorio']))?"<span style=\"color: red\">$aErrores[radioObligatorio]</span>":"";
        ?>
                                <br>
                                <label for="radioOpcional">Radio opcional:</label>
                                <input id="opcion1" type="radio" name="radioOpcional" value="opcion1" 
                                <?php 
                                    echo ($_REQUEST['radioOpcional']==='opcion1')?"checked":"";
                                    
                                ?>>
                                <label for="opcion1">Opción 1</label>
                                
                                <input id="opcion2" type="radio" name="radioOpcional" value="opcion2" 
                                <?php 
                                    echo ($_REQUEST['radioOpcional']==='opcion2')?"checked":"";
                                ?>>
                                <label for="opcion2">Opción 2</label>
        <?php
                echo (!is_null($aErrores['checkboxObligatorio']))?"<span style=\"color: red\">$aErrores[textolargoObligatorio]</span>":"";
        ?>                            
                                <br>
                                <label for="rangoObligatorio">Rango obligatorio<span style="color:red">*</span>:</label>
                                <input id="rangoObligatorio" type="range" name="rangoObligatorio" max="8" value="<?php echo (isset($_REQUEST['rangoObligatorio']))?$_REQUEST['rangoObligatorio']:"4";?>">
                                <br>
                                <label for="rangoOpcional">Rango opcional:</label>
                                <input id="rangoOpcional" type="range" name="rangoOpcional" max="8" value="<?php echo (isset($_REQUEST['rangoOpcional']))?$_REQUEST['rangoOpcional']:"4";?>">
                                <br>
                                <label for="listaObligatorio">Lista obligatoria<span style="color:red">*</span>:</label>
                                <select name="listaObligatorio" value="0">
                                    <option value="1" <?php echo ($_REQUEST['listaObligatorio']==='1')?"selected":"";?>>Opción 1</option> 
                                    <option value="2" <?php echo ($_REQUEST['listaObligatorio']==='2')?"selected":"";?>>Opción 2</option> 
                                    <option value="3" <?php echo ($_REQUEST['listaObligatorio']==='3')?"selected":"";?>>Opción 3</option>
                                    <option value="4" <?php echo ($_REQUEST['listaObligatorio']==='4')?"selected":"";?>>Opción 4</option> 
                                    <option value="5" <?php echo ($_REQUEST['listaObligatorio']==='5')?"selected":"";?>>Opción 5</option> 
                                    <option value="6" <?php echo ($_REQUEST['listaObligatorio']==='6')?"selected":"";?>>Opción 6</option> 
                                 </select>
                                <br>
                                <label for="listaOpcional">Lista opcional:</label>
                                <select name="listaOpcional" value="0">
                                    <option value="1" <?php echo ($_REQUEST['listaOpcional']==='1')?"selected":"";?>>Opción 1</option> 
                                    <option value="2" <?php echo ($_REQUEST['listaOpcional']==='2')?"selected":"";?>>Opción 2</option> 
                                    <option value="3" <?php echo ($_REQUEST['listaOpcional']==='3')?"selected":"";?>>Opción 3</option>
                                    <option value="4" <?php echo ($_REQUEST['listaOpcional']==='4')?"selected":"";?>>Opción 4</option> 
                                    <option value="5" <?php echo ($_REQUEST['listaOpcional']==='5')?"selected":"";?>>Opción 5</option> 
                                    <option value="6" <?php echo ($_REQUEST['listaOpcional']==='6')?"selected":"";?>>Opción 6</option> 
                                 </select>
                                <br>
                                <label for="ficheroObligatorio">Fichero obligatorio<span style="color:red">*</span>:</label>
                                <input id="ficheroObligatorio" type="file" name="ficheroObligatorio" value="<?php echo (isset($_REQUEST['ficheroObligatorio']))?$_REQUEST['ficheroObligatorio']:"";?>" >
        <?php
                echo (!is_null($aErrores['ficheroObligatorio']))?"<span style=\"color: red\">$aErrores[ficheroObligatorio]</span>":"";
        ?> 
                                <br>
                                <label for="ficheroOpcional">Fichero opcional:</label>
                                <input id="ficheroOpcional" type="file" name="ficheroOpcional" value="<?php echo (isset($_REQUEST['ficheroOpcional']))?$_REQUEST['ficheroOpcional']:"";?>" >
                        </fieldset>
                        <input id="enviar" type="submit" value="Enviar" name="enviar"/>
                        <input id="vaciar" type="reset" value="Vaciar" name="vaciar"/>
                    </form>
                </div>
                <footer>
                <!--<p>
                    Óscar Llamas Parra
                                <a href="https://github.com/OscarLlaPar/" target="__blank"><img src="../webroot/img/github.png" alt="Github"></img></a>
                </p>-->
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
