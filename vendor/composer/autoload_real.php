<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit66de10ea50bb4032f6ec603c369a636c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit66de10ea50bb4032f6ec603c369a636c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit66de10ea50bb4032f6ec603c369a636c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit66de10ea50bb4032f6ec603c369a636c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
