<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80d13ea03268b593029c6a4e47ea6956
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80d13ea03268b593029c6a4e47ea6956::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80d13ea03268b593029c6a4e47ea6956::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80d13ea03268b593029c6a4e47ea6956::$classMap;

        }, null, ClassLoader::class);
    }
}
