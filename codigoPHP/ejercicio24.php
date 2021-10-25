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
            // Si ya se ha pulsado el boton "Enviar"
            if(!empty($_REQUEST['enviar'])){
                $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],30,2,1);
                if(($aErrores['nombre'])!=null){
                    $_REQUEST[nombre]="";
                    $entradaOK=false;
                }
                $aErrores['altura']= validacionFormularios::comprobarEntero($_REQUEST['altura'],300,0,1);
                if(($aErrores['altura'])!=null){
                    $_REQUEST[altura]="";
                    $entradaOK=false;
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
                $nombre = $_REQUEST['nombre'];
                $altura = $_REQUEST['altura'];
                //muestra de valores por pantalla
                echo "<h1>Datos enviados</h1>";
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Altura: $altura</p>";
            }
            // Si hay errores (o es la primera vez)
            else{
        ?>
                <h1>Formulario del ejercicio 24</h1>
                <form name="ejercicio24" action="ejercicio24.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $_REQUEST['nombre'];?>" >
        <?php
                if(!is_null($aErrores['nombre'])){
                    echo "<span style=\"color: red\">$aErrores[nombre]</span>";
                }
        ?>
                <br />
                <label for="altura">Altura (cm):</label>
                <input type="number" name="altura" value="<?php echo $_REQUEST['altura'];?>" >  
        <?php
                if(!is_null($aErrores['altura'])){
                    echo "<span style=\"color: red\">$aErrores[altura]</span>";
                }
                if(!is_null($aErrores['campoVacio'])){
                    echo "<p style=\"color: red\">$aErrores[campoVacio]</p>";
                }
        ?>
                <br />
                <input type="submit" value="Enviar" name="enviar"/>
                </form>
        <?php       
            }
        ?>

    </body>
</html>
