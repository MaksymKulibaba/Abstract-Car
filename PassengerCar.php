<?php

/**
 * Created by PhpStorm.
 * User: Kulibacks
 * Date: 17.01.2018
 * Time: 20:03
 */
class PassengerCar extends Car
{
    public $doors = 4;

    protected function safety()
    {
        echo "Пристегнуть ремень безопасности. ";
    }

    public function run()
    {
        echo 'Ехать на легковом автомобиле. ';

        return $this->safety();
    }

    public function stop()
    {
        echo 'Остановиться. ';
    }
}