<?php

$cadena=<<<micadena
        SELECT name, price, warranty_available, exclusive_offer
        FROM Products
        UNION ALL
        SELECT name, price, guarantee_available, exclusive_offer
        FROM Services
        ;
        micadena;

echo $cadena;
