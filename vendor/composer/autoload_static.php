<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca24898d02dea00dde98cc22018a5875
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Solaris' => 
            array (
                0 => __DIR__ . '/..' . '/solaris/php-moon-phase',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitca24898d02dea00dde98cc22018a5875::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitca24898d02dea00dde98cc22018a5875::$classMap;

        }, null, ClassLoader::class);
    }
}
