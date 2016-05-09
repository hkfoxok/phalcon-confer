<?php

// Register autoloaders

$loader = new \Phalcon\Loader();

/**
 * We register here the used directories, including the tests one, otherwise the TestCase couldn't be found.
 */
$loader->registerNamespaces([
    'MicheleAngioni\PhalconAuth' => dirname(__DIR__) . '/src/PhalconAuth',
    'MicheleAngioni\PhalconAuth\Tests' => dirname(__DIR__) . '/tests'
]);

$loader->register();
