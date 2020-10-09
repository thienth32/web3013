<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
class ProductController extends BaseController{
    public function index(){
        // hiển thị danh sách danh mục
        // 1. lấy dữ liệu danh mục bằng model
        $cates = Product::all();
        // 2. render ra view kèm dữ liệu
        // categories/index.php.blade.php 
        $this->render('products.index', [
            'cates' => $cates
        ]);
    }

    public function detail()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
}

?>