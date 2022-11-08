<?php

    use App\Controllers\CatalogController;
    use App\Controllers\SiteController;
    use Bramus\Router\Router;

    $router = new Router();
    $router->get('/', SiteController::class.'@index');
    $router->get('/catalog/{id}', CatalogController::class.'@product');
    $router->get('/catalog', CatalogController::class.'@catalog');
    $router->get('/cart', CatalogController::class.'@cart');
    $router->get('/blog/{id}', function() {});
    $router->get('/blog/', function() {});

    $router->run();
