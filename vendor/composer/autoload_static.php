<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e4a078828cab533fc2f98ad3a77b976
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e4a078828cab533fc2f98ad3a77b976::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e4a078828cab533fc2f98ad3a77b976::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e4a078828cab533fc2f98ad3a77b976::$classMap;

        }, null, ClassLoader::class);
    }
}
