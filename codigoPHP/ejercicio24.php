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
            //Inicialización de variables
            $entradaOK = true; //Inicialización de la variable que nos indica que todo va bien
            $errores['campoVacio']=null;
            $errores['nombre']=null;
            $errores['altura']=null;
            // Si ya se ha pulsado el boton "Enviar"
            if(!empty($_REQUEST['enviar'])){
                //si se ha enviado el formulario con algún campo vacío
                if (empty($_REQUEST['nombre'])||empty($_REQUEST['altura'])) {
                //se crea el mensaje de error
                    $errores["campoVacio"]="El campo tiene que estar rellenado";
                    $entradaOK = false;
                }
                //si se ha enviado el formulario con el campo "nombre" incorrecto
                if (is_numeric($_REQUEST['nombre'])) {
                    //se crea el mensaje de error
                    $errores['nombre']="El nombre no puede ser un número";
                    $entradaOK = false;
                    $_REQUEST['nombre']="";
                }
            
                //si se ha enviado el formulario con el campo "altura" incorrecto
                if ($_REQUEST['altura']<0){
                    //se crea el mensaje de error
                    $errores['altura']="La altura no puede ser un número negativo";
                    $entradaOK = false;
                    $_REQUEST['altura']="";
                }
            }
            // Si no se ha enviado el formulario (= es la primera vez)
            else{
                $entradaOK=false;
            }
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
            else{
        ?>
                <h1>Formulario del ejercicio 24</h1>
                <form name="ejercicio24" action="ejercicio24.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $_REQUEST['nombre'];?>" >
        <?php
                if(!is_null($errores['nombre'])){
                    echo "<span style=\"color: red\">$errores[nombre]</span>";
                }
        ?>
                <br />
                <label for="altura">Altura (cm):</label>
                <input type="number" name="altura" value="<?php echo $_REQUEST['altura'];?>" >  
        <?php
                if(!is_null($errores['altura'])){
                    echo "<span style=\"color: red\">$errores[altura]</span>";
                }
                if(!is_null($errores['campoVacio'])){
                    echo "<p style=\"color: red\">$errores[campoVacio]</p>";
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
