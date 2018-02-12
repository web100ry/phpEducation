<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11.02.18
 * Time: 13:57
 */
/*
//============ 4 PHP ==============
$obj2=$obj1;//copy
$obj2=&$obj1;//link
//============ 5 PHP ==============
$obj2=$obj1;//link for object
$obj2=clone $obj1;//copy for object
//====================================
*/

class Car
{
    // властивості (змінні в класі)
    public $year = "2018"; //рік випіску за умовчанням
    public $speed;
    public $model;

    // конструктор класа . Те, що виконуэться автомматично при створені об'єкта
    //function __construct($num)


    /**
     * Car constructor.
     * @param $num
     * @return Car
     */
    function Car($num)
    {
        echo "Object $num created! <br>";

    }

    function __destruct()
    {

        //Implement __destruct() method.
        echo "Object DESTRUCT";
    }

    // методи (функція в класі)

    public function getSpeed()
    {
        echo "Швидкість = " . $this->speed;
    }

    function getClassName()
    {
        echo "Class Name: ", __CLASS__;
    }

    function myMethod()
    {
        echo "Method: ", __METHOD__;
    }

    function __clone()
    {
        // Implement __clone() method.
        echo "Object CLONED";
    }
}

$car1 = new Car(1);
$car1->speed = 160;
$car1->model = "Model One";
$car2 = new Car(2);
$car2->speed = 180;
$car2->model = "Model Two";

echo $car2->getSpeed() . "<br>";

echo $car1->year;
echo $car1->speed;
echo $car1->model;
echo $car1->myMethod() . "<br>";
echo $car1->getClassName() . "<br>";

$car3 = clone $car1; //конструктор не викликається

