<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7b4862be21414350f6216b0a14ff425
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rych\\Random' => 
            array (
                0 => __DIR__ . '/..' . '/rych/random',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd7b4862be21414350f6216b0a14ff425::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
