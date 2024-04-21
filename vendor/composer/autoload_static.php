<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcea7cce578b48014de5509aebfe0f18c
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcea7cce578b48014de5509aebfe0f18c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcea7cce578b48014de5509aebfe0f18c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcea7cce578b48014de5509aebfe0f18c::$classMap;

        }, null, ClassLoader::class);
    }
}