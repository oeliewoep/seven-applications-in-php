<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit906bc71f7ad2383c2f6f229c52354c3f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sanjib\\' => 7,
        ),
        'M' => 
        array (
            'Myapp\\' => 6,
        ),
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sanjib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Myapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/mylib',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit906bc71f7ad2383c2f6f229c52354c3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit906bc71f7ad2383c2f6f229c52354c3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
