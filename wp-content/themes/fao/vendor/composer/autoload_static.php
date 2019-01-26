<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit009935660a5110006ecbcdc1be0b0bd4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit009935660a5110006ecbcdc1be0b0bd4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit009935660a5110006ecbcdc1be0b0bd4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}