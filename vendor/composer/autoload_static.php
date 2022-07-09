<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6efdb24a05123c583b9cdedbda7219cd
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HossamIbrahim\\Msegat\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HossamIbrahim\\Msegat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6efdb24a05123c583b9cdedbda7219cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6efdb24a05123c583b9cdedbda7219cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6efdb24a05123c583b9cdedbda7219cd::$classMap;

        }, null, ClassLoader::class);
    }
}