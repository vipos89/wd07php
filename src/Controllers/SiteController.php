<?php

    namespace App\Controllers;

    use App\Core\BaseController;
    use App\Models\Post;


    class SiteController extends BaseController
    {

        public static $layout = 'admin';


        public function index(){
            $post = Post::findById(1);
            $post->save();

            $this->render('catalog/cart.php');
        }


    }