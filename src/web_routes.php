<?php

    use App\Controllers\Admin\ProductController;
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

    $router->get('/admin/products', ProductController::class."@index");
    $router->get('/admin/products/create', ProductController::class."@create");
    $router->post('/admin/products/create', ProductController::class."@store");
    $router->get('/admin/products/{id}', ProductController::class."@edit");
    $router->post('/admin/products/{id}', ProductController::class."@update");

    $router->run();
