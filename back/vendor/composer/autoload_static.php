<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d2981cda156c120010ea82403820fc4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Auryn\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Auryn\\' => 
        array (
            0 => __DIR__ . '/..' . '/rdlowrey/auryn/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d2981cda156c120010ea82403820fc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d2981cda156c120010ea82403820fc4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}