<?php

require 'Car.php';
require 'Bicycle.php';

$homer = new Car('yellow', 5, 'diesel');
echo $homer->start();
while($homer->getEnergyLevel()>10){
    echo $homer->forward();
}
echo $homer->brake().'<br>';
$bart = new Bicycle('yellow');
echo $bart->forward();
echo $bart->brake();
?>