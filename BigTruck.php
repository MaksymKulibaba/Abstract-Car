<?php


class BigTruck extends Truck implements CarryCargoInterface
{
    private $param = "большом";

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