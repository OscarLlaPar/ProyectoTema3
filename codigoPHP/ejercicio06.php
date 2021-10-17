<?php
$fecha = new DateTime();
$zona = new DateTimeZone("Europe/Madrid");
$fecha->setTimezone($zona);
$diasSumar = new DateInterval('P60D');
echo "La fecha actual es ".$fecha->format("l\, d-m-Y").", y si le sumas 60 días es ".$fecha->add($diasSumar)->format("l\, d-m-Y");

