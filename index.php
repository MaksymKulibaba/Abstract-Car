<html>
<head>
    <meta charset="UTF-8">
</head>
</html>
<?php

include_once "Car.php";
include_once "CarFactory.php";
include_once "Cabrio.php";
include_once "Truck.php";
include_once "PassengerCar.php";

// Массив автомобилей
$arr = array('Cabrio', 'Truck', 'PassengerCar');
// метод который вызываем
$method = 'carryCargo';

foreach ($arr as $car) {
    $obj = CarFactory::fuctory($car);
    if (method_exists($obj, $method)) {
        echo "$car: ";
        $obj->$method();
    } else echo "у $car нет такой возможности";
    echo "<br>";
}




