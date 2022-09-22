<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5f5c1599bbdcfc9694b95581c96d422
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'M' => 
        array (
            'Mni\\FrontYAML\\' => 14,
            'Michelf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Mni\\FrontYAML\\' => 
        array (
            0 => __DIR__ . '/..' . '/mnapoli/front-yaml/src',
        ),
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5f5c1599bbdcfc9694b95581c96d422::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5f5c1599bbdcfc9694b95581c96d422::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd5f5c1599bbdcfc9694b95581c96d422::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd5f5c1599bbdcfc9694b95581c96d422::$classMap;

        }, null, ClassLoader::class);
    }
}