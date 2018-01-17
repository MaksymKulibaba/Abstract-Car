<?php

include "CarryCargoInterface.php";

class Truck extends Car implements CarryCargoInterface
{
    public function run()
    {
        echo "Ехать на грузовике";
    }

    public function stop()
    {
        echo "Остановиться";
    }

    public function carryCargo()
    {
        echo "Везу груз";
    }
}