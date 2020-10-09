<?php
namespace App\Controllers;

use App\Models\Product;
class ProductController extends BaseController{
    public function index(){
        $pro = Product::all();
        //2. Render ra view kèm dữ liệu
        $this->render('products.index', [
            'products' => $pro,
        ]);
    }

    
}

?>