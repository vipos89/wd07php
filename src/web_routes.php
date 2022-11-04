<?php
    use Bramus\Router\Router;

    $router = new Router();
    $router->get('/', function() {

    });

    $router->get('/ololo', function() {
        echo "ololo";
    });
    $router->run();
