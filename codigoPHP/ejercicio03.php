<?php
$fechaHora = new DateTime();
$zona = new DateTimeZone("Europe/Madrid");
$fechaHora->setTimezone($zona);
echo "La fecha y hora en Benavente (España) es: ".$fechaHora->format("d-m-Y h:i:s a");