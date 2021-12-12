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
            * @version 1.0
            * Última modificación: 22/10/2021
            */
            //si se ha pulsado el botón "enviar"
            if(!empty($_REQUEST['enviar'])){    
                //recogida de los datos a través de $_REQUEST
                $nombre = $_REQUEST['nombre'];
                $altura = $_REQUEST['altura'];
                //mostrado de los datos
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Altura: $altura</p>";
                //mostrado del contenido de $_REQUEST, $_GET (debería estar vacío) y $_POST
                echo "<pre>";
                echo "<p>El contenido de \$_REQUEST es: </p>";
                print_r($_REQUEST);
                echo "<p>El contenido de \$_POST es: </p>";
                print_r($_POST);
                echo "<p>El contenido de \$_GET es: </p>";
                print_r($_GET);
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
