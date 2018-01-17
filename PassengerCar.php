<?php
/**
 * Created by PhpStorm.
 * User: Kulibacks
 * Date: 17.01.2018
 * Time: 20:03
 */

class PassengerCar extends Car
{
    public function run()
    {
        echo 'Ехать на легковом автомобиле';
    }

    public function stop()
    {
        echo 'Остановить';
    }
}