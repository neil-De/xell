<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3a580daba39f542830f1048edbc5f6a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3a580daba39f542830f1048edbc5f6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3a580daba39f542830f1048edbc5f6a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
