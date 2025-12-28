<?php
class Car{
public static $brand,$model,$year;

function __construct($brand,$model,$year)
{
 Car::$brand=$brand;
 Car::$model=$model;
 Car::$year=$year;
}
public function displayDeatils(){
echo Car::$brand,"\t",Car::$model,"\t",Car::$year;
}

}

$car = new Car("Toyota", "Corolla", 2021);

$car->displayDeatils();

?>