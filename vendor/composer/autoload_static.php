<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita929de67f0b3e9fcac4710ec667df6a6
{
    public static $files = array (
        '062dbb5df4cdd036dacf75e53928d8a7' => __DIR__ . '/../..' . '/src/Functions/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TravelSorter\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TravelSorter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'TravelSorter\\Classes\\Bus' => __DIR__ . '/../..' . '/src/Classes/Bus.php',
        'TravelSorter\\Classes\\Plane' => __DIR__ . '/../..' . '/src/Classes/Plane.php',
        'TravelSorter\\Classes\\Train' => __DIR__ . '/../..' . '/src/Classes/Train.php',
        'TravelSorter\\Classes\\Vehicle' => __DIR__ . '/../..' . '/src/Classes/Vehicle.php',
        'TravelSorter\\Classes\\VehicleInterface' => __DIR__ . '/../..' . '/src/Classes/VehicleInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita929de67f0b3e9fcac4710ec667df6a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita929de67f0b3e9fcac4710ec667df6a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita929de67f0b3e9fcac4710ec667df6a6::$classMap;

        }, null, ClassLoader::class);
    }
}
