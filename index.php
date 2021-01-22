<?php

require_once "Lift.php";


$lift = new Lift() ;
$lift->moveFromTo(3, 10);

$maxWeight = $lift->getMaxWeight();
echo "<br/>".$maxWeight;

