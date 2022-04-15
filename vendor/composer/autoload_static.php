<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e389dba4512957028012c746040befb
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'main\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'main\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e389dba4512957028012c746040befb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e389dba4512957028012c746040befb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e389dba4512957028012c746040befb::$classMap;

        }, null, ClassLoader::class);
    }
}
