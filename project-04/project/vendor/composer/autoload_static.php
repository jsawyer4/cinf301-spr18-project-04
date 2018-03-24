<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8e214bfa74f04b3748cdc8fb30019e5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SRC\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SRC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'TwitterAPIExchange' => __DIR__ . '/..' . '/j7mbo/twitter-api-php/TwitterAPIExchange.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8e214bfa74f04b3748cdc8fb30019e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8e214bfa74f04b3748cdc8fb30019e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita8e214bfa74f04b3748cdc8fb30019e5::$classMap;

        }, null, ClassLoader::class);
    }
}