<?php

    namespace App\Core;

    use PDO;

    class BaseModel
    {
        public static $table = null;

        public static $fillable = [];
        public function __get(string $name)
        {
           if (isset($this->$name)){
               return $this->$name;
           }
           return null;
        }

        public function save(){
            $connection = DB::getConnection();
            $tableName = static::getTableName();

            if (empty($this->id)){
                $columnNames = implode(', ', static::$fillable);
                $columnValues = '';
                $bindValues = [];
                foreach (static::$fillable as $item){
                    $columnValues .=":$item, ";
                    $bindValues[$item] = $this->$item;
                }
                $columnValues = substr($columnValues, 0,-2);
                $sql = "INSERT INTO {$tableName} ($columnNames) VALUES($columnValues)";
                $stmt = $connection->prepare($sql);
                $stmt->execute($bindValues);
                $this->id = $connection->lastInsertId();
            }else{
                $bindValues = [];
                $sqlStr = '';
                foreach (static::$fillable as $item){
                    $sqlStr .= "$item = :$item, ";
                    $bindValues[$item] = $this->$item;
                }
                $sqlStr = substr($sqlStr, 0, -2);
                $sql = "Update {$tableName} SET $sqlStr where id = {$this->id}";
                $stmt = $connection->prepare($sql);
                $stmt->execute($bindValues);
            }

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