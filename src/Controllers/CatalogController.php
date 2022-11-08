<?php

    namespace App\Controllers;

    use App\Core\BaseController;
    use App\Models\Product;

    class CatalogController extends BaseController
    {
        public function product($id)
        {
            $product = Product::findById($id);

            $this->render("catalog/product.php",
                compact('product')
            );
        }

        public function catalog()
        {
            $this->render("catalog/catalog.php",
            [
                'products' => Product::all()
            ]
            );
        }

        public function cart(){
            $this->render("catalog/cart.php");
        }

    }