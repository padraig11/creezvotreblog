<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e41009c204e6ba0947c67e1fdee50db
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\src\\' => 8,
            'App\\config\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e41009c204e6ba0947c67e1fdee50db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e41009c204e6ba0947c67e1fdee50db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e41009c204e6ba0947c67e1fdee50db::$classMap;

        }, null, ClassLoader::class);
    }
}