<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit794585604eb66af6761534c246c9baba
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit794585604eb66af6761534c246c9baba::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
