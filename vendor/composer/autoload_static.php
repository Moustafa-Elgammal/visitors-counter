<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1b93bf2a3a3b1c7c2f0d11293608c69
{
    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'VisitorsCounter' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf1b93bf2a3a3b1c7c2f0d11293608c69::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
