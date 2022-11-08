<?php

    namespace App\Controllers;

    use App\Core\BaseController;

    class SiteController extends BaseController
    {
        public static $layout = 'admin';

        public function index(){
            $this->render('catalog/cart.php');
        }

    }