<?php
include 'Aerolinea.php';

$instancia_aerolinea = new Aerolinea($aa, $aerolineasArg, 3);
echo $instancia_aerolinea;

$instancia_2_aerolinea = new Aerolinea($latm, $latam, 5);
echo $instancia_2_aerolinea;