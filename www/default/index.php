<?php

require_once('vendor/autoload.php');

use MiladRahimi\PhpRouter\Router;

$router = new Router();

$router->get('/', function () {
    return '<p>This is homepage</p>';
});

$router->get('/t', function () {
    return '<p>This is /t route</p>';
});

$router->dispatch();