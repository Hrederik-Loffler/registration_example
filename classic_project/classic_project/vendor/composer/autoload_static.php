<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit153b06c2eeae37de3f29ca843d502d60
{
    public static $classMap = array (
        'ComposerAutoloaderInit153b06c2eeae37de3f29ca843d502d60' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit153b06c2eeae37de3f29ca843d502d60' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'Controllers\\UsersController' => __DIR__ . '/../..' . '/controllers/UsersController.php',
        'Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Core\\Database\\PhotoUploader' => __DIR__ . '/../..' . '/core/database/PhotoUploader.php',
        'Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Core\\Validation\\Validator' => __DIR__ . '/../..' . '/core/validation/Validator.php',
        'Model\\Member' => __DIR__ . '/../..' . '/model/Member.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit153b06c2eeae37de3f29ca843d502d60::$classMap;

        }, null, ClassLoader::class);
    }
}