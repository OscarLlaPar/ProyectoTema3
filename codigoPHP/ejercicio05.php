<?php
 $timestamp = 123456;
 $oFecha = new DateTime();
 $oFecha->setTimestamp($timestamp);
 
 echo "El timestamp ".$timestamp." equivale a la fecha ".$oFecha->format("d-m-Y h:i:s a");