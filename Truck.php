<?php

include_once "CarryCargoInterface.php";

class Truck extends Car implements CarryCargoInterface
{
    private $param = "красном";

    public function run()
    {
        echo "Ехать на $this->param грузовике. ";
    }

    public function stop()
    {
        echo "Остановиться. ";
    }

    public function carryCargo()
    {
        echo "Везу груз. ";
    }
}