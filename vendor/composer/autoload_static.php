<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb62a9143908bafe042a2247bc84a542c
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wpscholar\\phpdotenv\\' => 20,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Dotenv\\' => 25,
        ),
        'M' => 
        array (
            'M1\\Env\\' => 7,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wpscholar\\phpdotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpscholar/phpdotenv/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'M1\\Env\\' => 
        array (
            0 => __DIR__ . '/..' . '/m1/env/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpOption\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpoption/phpoption/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb62a9143908bafe042a2247bc84a542c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb62a9143908bafe042a2247bc84a542c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb62a9143908bafe042a2247bc84a542c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
