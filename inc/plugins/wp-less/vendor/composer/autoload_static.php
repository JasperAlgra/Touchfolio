<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit311085289788cdd3c201975f18748a55
{
    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'Less' => 
            array (
                0 => __DIR__ . '/..' . '/oyejorge/less.php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'lessc' => __DIR__ . '/..' . '/oyejorge/less.php/lessc.inc.php',
        'lessc_formatter_classic' => __DIR__ . '/..' . '/leafo/lessphp/lessc.inc.php',
        'lessc_formatter_compressed' => __DIR__ . '/..' . '/leafo/lessphp/lessc.inc.php',
        'lessc_formatter_lessjs' => __DIR__ . '/..' . '/leafo/lessphp/lessc.inc.php',
        'lessc_parser' => __DIR__ . '/..' . '/leafo/lessphp/lessc.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit311085289788cdd3c201975f18748a55::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit311085289788cdd3c201975f18748a55::$classMap;

        }, null, ClassLoader::class);
    }
}
