<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita997f6e65f621833b6bc7ad57c66c6e5
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInita997f6e65f621833b6bc7ad57c66c6e5::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita997f6e65f621833b6bc7ad57c66c6e5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita997f6e65f621833b6bc7ad57c66c6e5::$classMap;

        }, null, ClassLoader::class);
    }
}