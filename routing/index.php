<?php

spl_autoload_register(function (string $class): void {
    include_once $class . '.php';

});

/* Superglobals in PHP */
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

/* Create a new router */
$router = new Router();

$router->register('/', function () {
    echo 'Home';
});

$router->register('/login', function () {
    echo 'Login';
});

$router->register('/index', function () {
    echo 'Index';
});

echo $router->resolve($_SERVER['REQUEST_URI']);


