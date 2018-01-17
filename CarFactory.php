<?php
/**
 * Created by PhpStorm.
 * User: Kulibacks
 * Date: 17.01.2018
 * Time: 21:04
 */

class CarFactory
{
    public static function fuctory($car)
    {
        $className = $car;
        $object = new $className;
        return $object;
    }
}