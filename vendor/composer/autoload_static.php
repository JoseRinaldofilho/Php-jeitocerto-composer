<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69a76e8a0614aa7cbf4c2d54bd89e384
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69a76e8a0614aa7cbf4c2d54bd89e384::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69a76e8a0614aa7cbf4c2d54bd89e384::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69a76e8a0614aa7cbf4c2d54bd89e384::$classMap;

        }, null, ClassLoader::class);
    }
}