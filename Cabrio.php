<?php
/**
 * Created by PhpStorm.
 * User: Kulibacks
 * Date: 17.01.2018
 * Time: 20:15
 */

include "CabrioInterface.php";
include_once "PassengerCar.php";

class Cabrio extends PassengerCar implements CabrioInterface
{
    public $doors = 2;

    public function run()
    {
        echo "Ехать на кабриолете. ";

        return $this->safety();
    }

//    public function stop()
//    {
//        parent::stop();
//    }

    public function openRoof()
    {
        echo 'Крыша открыта. ';
    }

    public function closeRoof()
    {
        echo "Крыша закрыта. ";
    }

}