<?php

    namespace App\Models;

    use App\Core\BaseModel;

    class Product extends BaseModel
    {
        public function getRealPrice(){
            return $this->price / 100;
        }

    }