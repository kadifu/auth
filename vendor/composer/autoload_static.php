<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit779433c21e0df0c9b7a8dfe16a8969d1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Auth\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Auth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit779433c21e0df0c9b7a8dfe16a8969d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit779433c21e0df0c9b7a8dfe16a8969d1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
