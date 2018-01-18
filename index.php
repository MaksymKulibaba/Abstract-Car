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
include_once "BigTruck.php";
include_once "PassengerCar.php";
include_once "CarRacing.php";

// Массив автомобилей
$arr = array('Cabrio', 'Truck', 'PassengerCar', 'BigTruck', 'CarRacing');
// метод который вызываем
$method = 'run';

foreach ($arr as $car) {
    $obj = CarFactory::fuctory($car);
    if (method_exists($obj, $method)) {
        echo "$car: ";
        echo ($obj->doors) ? "$obj->doors двери. " : " ";
        $obj->$method();
    } else echo "у $car нет такой возможности. ";
    echo "<br>";
}




