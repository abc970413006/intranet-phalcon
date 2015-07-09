
<?php

return new \Phalcon\Config(array(
    'database' => array(// change with your database config
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'intranet',
        'charset' => 'utf8',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../Tools/Controllers/',
        'viewsDir' => __DIR__ . '/../Tools/Views/',
        'cacheDir' => __DIR__ . '/../cache/',
        'baseUri' => '/phalcon-webtools/', // change according to your base URL
    ),
    'tools' => array(
        'copyright' => "
/**
 *
 * @author      Denner Fernandes <denners777@hotmail.com>
 * @since       " . date('d/m/Y H:i:s') . "
 *
 */
        ", // copyright header for generated files; default empty
        'modulesPath' => dirname(__DIR__) . '/', // path to your modules/app directory
        'migrationsPath' => dirname(dirname(__DIR__)) . '/migrations/', // path to migrations directory
    //  'viewsDir' => '', // default Views
    //  'modulesDir' => '', // default Modules
    //  'controllersDir' => '', // default Controllers
    //  'formsDir' => '', // default Forms
    //  'allow' => '', // IP, by default restrict application use only on 127.0.0.1
    //  'baseController' => [], // default
    //  'baseModel' => [], // default
    //  'baseForm' => [], // default
    //  'baseModule' => '', // default
    //  'baseRoute' => '' // default empty
    )
        ));
