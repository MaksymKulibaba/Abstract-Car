<?php


require_once "RacingInterface.php";
require_once "PassengerCar.php";

class CarRacing extends PassengerCar implements RacingInterface
{
    private $param = "большом";

    public function run()
    {
        echo "Ехать на гоночном как на шоссейном авто. ";
    }

    public function stop()
    {
        echo "Остановиться. ";
    }

    public function runNitro()
    {
        echo "Ехать на гоночном Быстро как на гоночном авто ";
    }
}