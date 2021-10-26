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
                text-align: center;
            }
            button, input{
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
            }
            footer{
                background-color: black;
                font-family: 'Times New Roman', Times, serif;
                font-size: 12px;
                position: absolute;
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
            form{
                position:absolute;
                left:14.5%;
            }
            .item{
                margin:10px;
                height:40px;
            }
            #enviar{
                height: 75px;
                width: 200px;
                font-size: 24px;
                
            }
            input{
                background-color: black;
                color: white;
                border-bottom: solid white 1px;
            }
            p{
                margin:0;
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
                'altura'=>null
            ];
            $aRespuestas = [
                'nombre'=>null,
                'altura'=>null
            ];
            // Si ya se ha pulsado el boton "Enviar"
            if(!empty($_REQUEST['enviar'])){
                //realizar las validaciones. Si la respuesta está mal, la función carga la variable con un mensaje de error
                //si no, se queda vacía
                $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],30,2,1);
                
                $aErrores['altura']= validacionFormularios::comprobarEntero($_REQUEST['altura'],300,0,1);
                //acciones correspondientes en caso de que haya algún error
                foreach($aErrores as $error){
                    //condición de que hay un error
                    if($error!=null){
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
                //muestra de valores por pantalla
                echo "<h1>Datos enviados</h1>";
                echo "<p>Nombre:".$aRespuestas['nombre']."</p>";
                echo "<p>Altura:".$aRespuestas['altura']."</p>";
            }
            // Si hay errores (o es la primera vez)
            else{
        ?>
                <div class="contenedor">
                    <h1>Formulario del ejercicio 24</h1>
                    <form name="ejercicio24" action="ejercicio24.php" method="post">
                        <div class="item">
                            <label for="nombre">Nombre<span style="color:red">*</span>:</label><br>
                            <input id="nombre" type="text" name="nombre" value="<?php echo $_REQUEST['nombre'];?>" >
        <?php
                if(!is_null($aErrores['nombre'])){
                    echo "<p style=\"color: red\">$aErrores[nombre]</p>";
                }
        ?>              
                        </div>
                        <br />
                        <div class="item">
                        <label for="altura">Altura (cm)<span style="color:red">*</span>:</label><br>
                        <input id="altura" type="text" name="altura" value="<?php echo $_REQUEST['altura'];?>" >  
        <?php
                if(!is_null($aErrores['altura'])){
                    echo "<p style=\"color: red\">$aErrores[altura]</p>";
                }
        ?>
                        </div>
                        <br />
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
