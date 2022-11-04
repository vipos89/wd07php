<?php

    namespace App\Core;

    use PDO;

    class DB
    {
        private static $connection = null;

        public static function getConnection(){
            if (self::$connection === null){
                $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8";

                $opt = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];

                $connection = new \PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $opt);
                self::$connection = $connection;
            }
            return self::$connection;
        }

    }