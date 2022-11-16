<?php

    namespace App\Controllers\Admin;

    use App\Core\BaseController;
    use App\Core\Debugger;
    use App\Models\Product;

    class ProductController extends BaseController
    {
        public static $layout= 'admin';
        public function index(){
            $products = Product::all();

            $this->render('admin/products/index.php',
                compact('products')
            );
        }

        public function create(){

            $this->render('admin/products/create.php');
        }

        public function store(){
            $product = new Product();

            $product->name = $_POST['name'];
            $product->price = $_POST['price'];
            $product->save();
            header('Location: /admin/products');
        }
        public function edit($id){
            $product = Product::findById($id);
            $this->render('admin/products/edit.php', compact('product'));
        }

        public function update($id){
            $product = Product::findById($id);

            $product->name = $_POST['name'];
            $product->price = $_POST['price'];
            $product->save();
            header('Location: /admin/products');
        }

    }