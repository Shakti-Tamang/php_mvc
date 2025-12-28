<?php
class Car{
public $brand,$model,$year;

function __construct($brand,$model,$year)
{
 $this->brand=$brand;
 $this->model=$model;
 $this->year=$year;
}
public function displayDeatils(){
echo $this->brand,"\t",$this->model,"\t",$this->year;
}

}

$car = new Car("Toyota", "Corolla", 2021);

$car->displayDeatils();

?>