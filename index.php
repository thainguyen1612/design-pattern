<?php

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/Router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);


$router->method('/stratery-pattern', 'src/StrateryPattern/StrateryPattern');
//$router->get('post', 'app/post');
