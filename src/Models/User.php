<?php

    namespace App\Models;

    use App\Core\BaseModel;

    class User extends BaseModel
    {

        public function hello(){
            return $this->id." ".$this->login;
        }


    }