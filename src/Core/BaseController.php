<?php

    namespace App\Core;

    class BaseController
    {
        public static $layout = 'main';

        const BASE_VIEW_PATH = __DIR__.'/../../views/';
        public function render($templateFile, array $variables = []){
            extract($variables);
            ob_start();

            include self::BASE_VIEW_PATH.$templateFile;
            $content = ob_get_clean();

            include self::BASE_VIEW_PATH."layouts/".(static::$layout).".php";
        }


    }