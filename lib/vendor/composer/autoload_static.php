<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit970ef80f41ae2dbae3b160466fe7bb3f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit970ef80f41ae2dbae3b160466fe7bb3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit970ef80f41ae2dbae3b160466fe7bb3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}