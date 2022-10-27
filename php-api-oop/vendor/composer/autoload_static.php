<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbde5d3a5fe3afef5f93fc1244daa5ac1
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbde5d3a5fe3afef5f93fc1244daa5ac1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbde5d3a5fe3afef5f93fc1244daa5ac1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbde5d3a5fe3afef5f93fc1244daa5ac1::$classMap;

        }, null, ClassLoader::class);
    }
}
