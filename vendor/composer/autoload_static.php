<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4eb386ca50fec453194899a24326e976
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rohit\\HelloPackage\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rohit\\HelloPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4eb386ca50fec453194899a24326e976::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4eb386ca50fec453194899a24326e976::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4eb386ca50fec453194899a24326e976::$classMap;

        }, null, ClassLoader::class);
    }
}
