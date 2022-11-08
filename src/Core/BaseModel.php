<?php

    namespace App\Core;

    use PDO;

    class BaseModel
    {
        public static $table = null;

        public function save(){

        }

        public static function findById($id): static|null{
            $connection = DB::getConnection();
            $tableName = static::getTableName();
            $sql = "select * from $tableName where id = :id";
            $stmt = $connection->prepare($sql);
            $stmt->execute(['id' => $id]);
            if ($stmt->rowCount()){
                return $stmt->fetchObject(static::class);
            }
           return null;
        }

        public static function all(){
            $connection = DB::getConnection();
            $tableName = static::getTableName();
            $sql = "select * from $tableName";
            $stmt = $connection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
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