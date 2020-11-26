<?php

namespace Inc;

use Inc\base\Enqeue;
use Inc\base\SettingsLink;
use Inc\pages\Admin;

final class Init
{
    // get the liste of all class
    public static function get_services()
    {
        return [
            Enqeue::class,
            Admin::class,
            SettingsLink::class
        ];
    }

    // loop to all class in the array and instanciate it and call the regsiter method if exist
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate(($class));
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
    public static function instantiate($class)
    {
        $service = new $class();

        return $service;
    }
}
