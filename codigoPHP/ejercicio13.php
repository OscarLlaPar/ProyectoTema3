 <?php
   function contadorVisitas()
    {
        $fichero=fopen("ejercicio13.php", "r");
        if($fichero){
            $contador=fread($fichero,filesize($fichero));
            $contador=$contador+1;
            fclose($fichero);
        }
        $fichero=fopen("ejercicio13.php", "w+");
        if($fichero){
            fwrite($fichero,$contador);
            fclose($fichero);
        }
        return $contador;
    }
    echo contadorVisitas();
?>