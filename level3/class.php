<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11.02.18
 * Time: 13:57
 */
class Car{
    // властивості (змінні в класі)
    public $year= "2018"; //рік випіску за умовчанням
    public $speed;
    public $model;


    // методи (функція в класі)

    public function getSpeed(){
        echo "Швидкість = ".$this->speed;
    }

}

$car1= new Car();
$car1->speed = 160;
$car1->model = "Model One";
$car2= new Car();
$car2->speed = 180;
$car2->model = "Model Two";

echo $car2->getSpeed()."<br>";

echo $car1->year;
echo $car1->speed;
echo $car1->model;
