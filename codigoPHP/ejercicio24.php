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
            .respuestas, .respuestas td{
                border: solid white 1px;
                border-collapse: collapse;
            }
            table{
                position:relative;
                width:90%;
                left: 5%;
                margin-bottom:25px;
            }
            .respuestas th{
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
            /*
            Tipos de entrada - posible orden:
             * alfanumerico x
             * alfabetico x v
             * entero x v
             * float x
             * booleano
             * fecha x v
             * momento (fecha-hora)x
             * url x
             * dni x
             * cod postal x
             * telefono x v
             -------------
             * radio
             * checkbox
             * lista desplegable
             ---------------
             * texto muy largo
             * fichero
                         */
            include "../core/210322ValidacionFormularios.php";
            //Inicialización de variables
            $entradaOK = true; //Inicialización de la variable que nos indica que todo va bien
            $aErrores = [
                'nombre'=>null,
                'nick'=>null,
                'dni'=>null,
                'notamedia'=>null,
                'altura'=>null,
                'fechanacimiento'=>null,
                'telefono'=>null,
                'codigopostal'=>null,
                'sitioweb'=>null,
                'email'=>null,
                'fechahoracomienzo'=>null,
                'comentarios'=>null,
                'ciclo'=>null,
                'modulos'=>null
            ];
            $aRespuestas = [
                'nombre'=>null,
                'nick'=>null,
                'dni'=>null,
                'notamedia'=>null,
                'altura'=>null,
                'fechanacimiento'=>null,
                'telefono'=>null,
                'codigopostal'=>null,
                'sitioweb'=>null,
                'email'=>null,
                'fechahoracomienzo'=>null,
                'comentarios'=>null,
                'ciclo'=>null,
                'modulos'=>null
            ];
            // Si ya se ha pulsado el boton "Enviar"
            if(!empty($_REQUEST['enviar'])){
                //realizar las validaciones. Si la respuesta está mal, la función carga la variable con un mensaje de error
                //si no, se queda vacía
                $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],30,2,1);
                
                $aErrores['nick']= validacionFormularios::comprobarAlfanumerico($_REQUEST['nick'],30,2,1);
                
                $aErrores['dni']= validacionFormularios::validarDni($_REQUEST['dni'],1);
                
                $aErrores['notamedia']= validacionFormularios::comprobarFloat($_REQUEST['notamedia'],10,0,1);
                
                $aErrores['altura']= validacionFormularios::comprobarEntero($_REQUEST['altura'],300,0,1);
                
                $aErrores['fechanacimiento']= validacionFormularios::validarFecha($_REQUEST['fechanacimiento'],'01/01/2200',"01/01/1900",1);
                
                
                $aErrores['telefono']= validacionFormularios::validarTelefono($_REQUEST['telefono'],1);
                
                $aErrores['codigopostal']= validacionFormularios::validarCp($_REQUEST['codigopostal'],1);
                
                $aErrores['sitioweb']= validacionFormularios::validarURL($_REQUEST['sitioweb'],1);
                
                $aErrores['email']= validacionFormularios::validarEmail($_REQUEST['email'],1);
                
                
                $aErrores['fechahoracomienzo']= validacionFormularios::comprobarNoVacio($_REQUEST['fechahoracomienzo']);
                
                $aErrores['comentarios']= validacionFormularios::comprobarNoVacio($_REQUEST['comentarios']);
                
                /*$aErrores['ciclo']= validacionFormularios::validarElementoEnLista($_REQUEST['ciclo'],$aOpciones=['DAW1','DAW2']);
                
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
                $aRespuestas['nombre'] = $_REQUEST['nombre'];
                $aRespuestas['nick'] = $_REQUEST['nick'];
                $aRespuestas['dni'] = $_REQUEST['dni'];
                $aRespuestas['notamedia'] = $_REQUEST['notamedia'];
                $aRespuestas['altura'] = $_REQUEST['altura'];
                $aRespuestas['fechanacimiento'] = $_REQUEST['fechanacimieno'];
                $aRespuestas['telefono'] = $_REQUEST['telefono'];
                $aRespuestas['codigopostal'] = $_REQUEST['codigopostal'];
                $aRespuestas['sitioweb'] = $_REQUEST['sitioweb'];
                $aRespuestas['email'] = $_REQUEST['email'];
                $aRespuestas['fechahoracomienzo'] = $_REQUEST['fechahoracomienzo'];
                $aRespuestas['comentarios'] = $_REQUEST['comentarios'];
                /*$aRespuestas['ciclo'] = $_REQUEST['ciclo'];
                $aRespuestas['modulos'] = $_REQUEST['modulos'];*/
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
                    <h1>Formulario del ejercicio 24</h1>
                    <form name="ejercicio24" action="ejercicio24.php" method="post">
                        <fieldset>
                            <legend>Datos personales: </legend>
                            <table>
                                <tr>
                                    <td><label for="nombre">Nombre<span style="color:red">*</span>:</label></td>
                                    <td><label for="nick">Nick<span style="color:red">*</span>:</label></td>
                                    <td><label for="dni">DNI<span style="color:red">*</span>:</label></td>
                                </tr>
                                <tr>
                                <td><input id="nombre" type="text" name="nombre" value="<?php echo (isset($_REQUEST['nombre']))?$_REQUEST['nombre']:"";?>" >
                                
                                    <?php
                echo (!is_null($aErrores['nombre']))?"<span style=\"color: red\">$aErrores[nombre]</span>":"";
        ?>              
                               
                                </td>
                                <td><input id="nick" type="text" name="nick" value="<?php echo (isset($_REQUEST['nick']))?$_REQUEST['nick']:"";?>" >
                                   
        <?php
                echo (!is_null($aErrores['nick']))?"<span style=\"color: red\">$aErrores[nick]</span>":"";
        ?>  
                                </td> 
                                <td>
                                <input id="dni" type="text" name="dni" value="<?php echo (isset($_REQUEST['dni']))?$_REQUEST['dni']:"";?>" >
                                
        <?php
                echo (!is_null($aErrores['dni']))?"<span style=\"color: red\">$aErrores[dni]</span>":"";
        ?>  
                                </td> 
                                </tr>
                                <tr>
                                    <td><label for="notamedia">Nota media del curso anterior<span style="color:red">*</span>:</label></td>
                                    <td><label for="altura">Altura (cm)<span style="color:red">*</span>:</label></td>
                                    <td><label for="fechanacimiento">Fecha de nacimiento<span style="color:red">*</span>:</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="notamedia" type="text" name="notamedia" value="<?php echo (isset($_REQUEST['notamedia']))?$_REQUEST['notamedia']:"";?>" >  
                                          
        <?php
                echo (!is_null($aErrores['notamedia']))?"<span style=\"color: red\">$aErrores[notamedia]</span>":"";
        ?>
                                </td>  
                                    <td>
                                
                                <input id="altura" type="number" name="altura" value="<?php echo (isset($_REQUEST['altura']))?$_REQUEST['altura']:"";?>" > 
                                
        <?php
                echo (!is_null($aErrores['altura']))?"<span style=\"color: red\">$aErrores[altura]</span>":"";
        ?>
                                </td> 
                                <td>
                                <input id="fechanacimiento" type="date" name="fechanacimiento" value="<?php echo (isset($_REQUEST['fechanacimiento']))?$_REQUEST['fechanacimiento']:"";?>" >
                                
        <?php
                echo (!is_null($aErrores['fechanacimiento']))?"<span style=\"color: red\">$aErrores[fechanacimiento]</span>":"";
                ?>                  
                                </td> 
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>Contacto:</legend>
                                <label for="telefono">Teléfono<span style="color:red">*</span>:</label><br>
                                <input id="telefono" type="tel" name="telefono" value="<?php echo (isset($_REQUEST['telefono']))?$_REQUEST['telefono']:"";?>" >
        <?php
                echo (!is_null($aErrores['telefono']))?"<span style=\"color: red\">$aErrores[telefono]</span>":"";
        ?>
                                <br>
                                <label for="codigopostal">Código Postal<span style="color:red">*</span>:</label><br>
                                <input id="codigopostal" type="number" name="codigopostal" value="<?php echo (isset($_REQUEST['codigopostal']))?$_REQUEST['codigopostal']:"";?>" >
        <?php
                echo (!is_null($aErrores['codigopostal']))?"<span style=\"color: red\">$aErrores[codigopostal]</span>":"";
        ?>    
                                <br>
                                <label for="sitioweb">Sitio web<span style="color:red">*</span>:</label><br>
                                <input id="sitioweb" type="text" name="sitioweb" value="<?php echo (isset($_REQUEST['sitioweb']))?$_REQUEST['sitioweb']:"";?>" >
        <?php
                echo (!is_null($aErrores['sitioweb']))?"<span style=\"color: red\">$aErrores[sitioweb]</span>":"";
        ?>   
                                <br>
                                <label for="email">E-mail<span style="color:red">*</span>:</label><br>
                                <input id="email" type="text" name="email" value="<?php echo (isset($_REQUEST['email']))?$_REQUEST['email']:"";?>" >
        <?php
                echo (!is_null($aErrores['email']))?"<span style=\"color: red\">$aErrores[email]</span>":"";
        ?>   
                        </fieldset>
                        <fieldset>
                            <legend>Curso:</legend>
                                <label for="fechahoracomienzo">Fecha y hora de comienzo del curso<span style="color:red">*</span>:</label><br>
                                <input id="fechahoracomienzo" type="datetime-local" name="fechahoracomienzo" value="<?php echo (isset($_REQUEST['fechahoracomienzo']))?$_REQUEST['fechahoracomienzo']:"";?>" >
        <?php
                echo (!is_null($aErrores['fechahoracomienzo']))?"<span style=\"color: red\">$aErrores[fechahoracomienzo]</span>":"";
        ?> 
                                <br>
                                <label for="ciclo">Ciclo<span style="color:red">*</span>:</label><br>
                                <input id="DAW1" type="radio" name="ciclo" value="DAW1" 
                                <?php 
                                    echo ($_REQUEST['ciclo']==='DAW1')?"checked":"";
                                    
                                ?>>
                                <label for="DAW1">DAW1</label><br>
                                
                                <input id="DAW2" type="radio" name="ciclo" value="DAW2" 
                                <?php 
                                    echo ($_REQUEST['ciclo']==='DAW2')?"checked":"";
                                ?>>
                                <label for="DAW2">DAW2</label><br>
        <?php                   
                echo (!is_null($aErrores['ciclo']))?"<span style=\"color: red\">$aErrores[ciclo]</span>":"";
        ?>
                                <br>
                                <label for="comentarios">Comentarios<span style="color:red">*</span>:</label><br>
                                <textarea id="comentarios" name="comentarios"><?php echo (isset($_REQUEST['comentarios']))?$_REQUEST['comentarios']:"";?></textarea>
        <?php
                echo (!is_null($aErrores['comentarios']))?"<span style=\"color: red\">$aErrores[comentarios]</span>":"";
        ?> 
                                
                                <br>
        <?php
                echo (!is_null($aErrores['modulos']))?"<span style=\"color: red\">$aErrores[comentarios]</span>":"";
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
