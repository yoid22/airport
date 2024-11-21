<?php

class Fligth{

function __construct(public $kods, 
                     public $manairport, 
                     public $manairport2,
                     public $DateTime,
                     public $manaLidmasina){

}

public function getDistance() {
    // Haversine formula
    $earthRadius = 6371; // Zemes rādiuss kilometros

    // Konvertējam grādus uz radiāniem
    $latFrom = deg2rad($this->manairport->platuma);
    $lonFrom = deg2rad($this->manairport->garuma);
    $latTo = deg2rad($this->manairport2->platuma);
    $lonTo = deg2rad($this->manairport2->garuma);

    // Aprēķinām atšķirību
    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    // Haversine formula
    $a = sin($latDelta / 2) * sin($latDelta / 2) +
         cos($latFrom) * cos($latTo) *
         sin($lonDelta / 2) * sin($lonDelta / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    // Attālums
    $distance = $earthRadius * $c;

    return $distance; // Atgriež attālumu kilometros
}

public function getDuration(){
$attalums=$this ->getDistance();
$atrs=$this ->Aircraft->atrums;
$laiks=$attalums/$atrs*60+30;
return $laiks;




}
}