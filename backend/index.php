<?php 
include_once "Aircraft.php";
include_once "Airport.php";
include_once "Fligth.php";
echo "es esmu isaac✨✨<br><br>";

$manaLidmasina= new Aircraft("Airbuss", "A220-300",120,850);
var_dump($manaLidmasina);



$mansairport= new Airport("RIX", 59.924, 23.971);
var_dump($mansairport);



$mansfligth= new Fligth("SA503", $mansairport, $mansairport, 8, $manaLidmasina);
var_dump($mansfligth);
