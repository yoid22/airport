<?php 
include_once "Aircraft.php";
include_once "Airport.php";
include_once "Fligth.php";
echo "es esmu isaac✨✨<br><br>";

$manaLidmasina= new Aircraft("Airbuss", "A220-300",120,850);




$manairport= new Airport("RIX", 59.924, 23.971);

$manairport2= new Airport("FJK", 69, 420);


$DateTime=(18.00);

$mansfligth= new Fligth("SA503", $manairport, $manairport2, $DateTime, $manaLidmasina);
var_dump($mansfligth);


$distance = $mansfligth->getDistance();
echo "Attālums starp lidostām: " . round($distance, 2) . " km\n";


echo "<br>" . $Fligth->getDuration();