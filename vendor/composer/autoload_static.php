<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83a6a50489ff5e4319dee18850594196
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Liangal\\Sansong\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Liangal\\Sansong\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit83a6a50489ff5e4319dee18850594196::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83a6a50489ff5e4319dee18850594196::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83a6a50489ff5e4319dee18850594196::$classMap;

        }, null, ClassLoader::class);
    }
}
