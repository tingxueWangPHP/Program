<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a936a7fa07592f214b9ae3ae1de19e2
{
    public static $files = array (
        '399daea87844a507479606457c450797' => __DIR__ . '/../..' . '/config/config.php',
        '5a054d80f4cd8e16929988f9629874e3' => __DIR__ . '/../..' . '/common/func.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lib\\' => 4,
        ),
        'W' => 
        array (
            'Ws\\Http\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Ws\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/toohamster/ws-http/src/Ws/Http',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a936a7fa07592f214b9ae3ae1de19e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a936a7fa07592f214b9ae3ae1de19e2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
