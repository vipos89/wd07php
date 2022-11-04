<?php

    namespace App\Core;

    class Debugger
    {
        public static function debug($var){
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        }
    }