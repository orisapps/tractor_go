<?php

require_once __DIR__ . 'cluster/vendor/autoload.php';

session_start();

/* * * nullify any existing autoloads ** */
spl_autoload_register(null, false);

/* * * specify extensions that may be loaded ** */
spl_autoload_extensions('.php, .class.php');

/* * * class Loader ** */

function __autoload($class) {

    // convert namespace to full file path
    $class = str_replace('\\', '/', $class) . '.php';

    require_once($class);
}

/* * * register_retired the loader functions ** */
spl_autoload_register('__autoload');

?>