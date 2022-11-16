<?php

    namespace App\Models;

    use App\Core\BaseModel;

    class Product extends BaseModel
    {
        public static $fillable = ['name', 'img', 'price'];
        public function getRealPrice(){
            return $this->price / 100;
        }

    }