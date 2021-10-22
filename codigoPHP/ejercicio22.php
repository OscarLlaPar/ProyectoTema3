<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 22</title>
    </head>
    <body>
        <?php
            /*
            * Ejercicio 22
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * Última modificación: 21/10/2021
            */
        
            if(!empty($_REQUEST['enviar'])){    
                $nombre = $_REQUEST['nombre'];
                $altura = $_REQUEST['altura'];
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Altura: $altura</p>";
                echo "<pre>";
                echo "<p>El contenido de \$_REQUEST es: </p>";
                print_r($_REQUEST);
                echo "</pre>";
            }
            else{
        ?>
        <h1>Formulario del ejercicio 22</h1>
        <form name="ejercicio22" action="ejercicio22.php" method="post">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </div>
            <div>
                <label for="altura">Altura (cm):</label>
                <input type="number" name="altura">
            </div>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php 
            }
        ?>
    </body>
</html>
