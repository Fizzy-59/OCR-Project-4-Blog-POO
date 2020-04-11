<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbef7497bb30af0b7922e17e5a9d5ad6a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbef7497bb30af0b7922e17e5a9d5ad6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbef7497bb30af0b7922e17e5a9d5ad6a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbef7497bb30af0b7922e17e5a9d5ad6a::$classMap;

        }, null, ClassLoader::class);
    }
}
