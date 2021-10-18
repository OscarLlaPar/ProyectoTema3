<?php
//Modo 1
$oFechaHoraActual = new DateTime();
$oZona = new DateTimeZone("Europe/Madrid");
$oFechaHoraActual->setTimezone($oZona);
echo "La fecha y hora en Benavente (España) es: ".$oFechaHoraActual->format("d-m-Y h:i:s a");
//Modo 2
