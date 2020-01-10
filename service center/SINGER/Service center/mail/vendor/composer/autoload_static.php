<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit322c92ce5c7c235f2600e767e5e317ca
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit322c92ce5c7c235f2600e767e5e317ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit322c92ce5c7c235f2600e767e5e317ca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}