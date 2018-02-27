<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5a01dba733f8d49baa3e2d31173e69c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5a01dba733f8d49baa3e2d31173e69c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5a01dba733f8d49baa3e2d31173e69c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita5a01dba733f8d49baa3e2d31173e69c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
