<?php

    include_once __DIR__.'/../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
    $dotenv->safeLoad();

    include_once __DIR__.'/../src/web_routes.php';
















