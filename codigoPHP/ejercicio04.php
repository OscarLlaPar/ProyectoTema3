<?php
$fechaHora = new DateTime();
$zona = new DateTimeZone("Europe/Lisbon");
$fechaHora->setTimezone($zona);
echo "La fecha y hora en Oporto (Portugal) es: ".$fechaHora->format("d-m-Y h:i:s a");

