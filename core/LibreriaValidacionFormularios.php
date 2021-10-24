<?php
    /*
    * Ejercicio 19 - Librería de validación de formularios
    * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
    * Última modificación: 24/10/2021
    */

    function comprobarTexto($texto){
        $mensajeError=null;
        foreach ($texto as $letra){
            if(is_numeric($letra)){
                $mensajeError="La entrada solo debe contener letras";
            }
        }
        return $mensajeError;
    }