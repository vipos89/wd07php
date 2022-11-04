<?php




    include_once __DIR__.'/../vendor/autoload.php';
    include_once __DIR__.'/../src/web_routes.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
    $dotenv->safeLoad();
    $user = \App\Models\User::findById(11);
    App\Core\Debugger::debug($user->hello());
//    $user2 = new \App\Models\User();
















