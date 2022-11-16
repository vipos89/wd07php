<?php

        include_once __DIR__.'/../vendor/autoload.php';
        include __DIR__."/../src/functions.php";

        set_exception_handler('exceptionHandler');
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
        $dotenv->safeLoad();


        include_once __DIR__.'/../src/web_routes.php';

































