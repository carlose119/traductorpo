<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dd25487b42de72edd10ecbe773628f2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PoParser\\' => 9,
        ),
        'D' => 
        array (
            'Dejurin\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PoParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxakawizard/po-parser/src',
        ),
        'Dejurin\\' => 
        array (
            0 => __DIR__ . '/..' . '/dejurin/php-google-translate-for-free/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dd25487b42de72edd10ecbe773628f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dd25487b42de72edd10ecbe773628f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
