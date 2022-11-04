<?php

    namespace App\Core;

    use PDO;

    class BaseModel
    {
        public static $table = null;

        public function save(){

        }

        public static function findById($id): static{
            $connection = DB::getConnection();
            $tableName = static::getTableName();
            $sql = "select * from $tableName where id = $id";
            $stmt = $connection->query($sql);
            return $stmt->fetchObject(static::class);

        }

        public static function getTableName(){
            if (static::$table !== null){
                return static::$table;
            }
            $className = static::class;
            $className = explode('\\', $className);
            $className = array_pop($className);
            $className .= 's';
            return strtolower($className);
        }

    }