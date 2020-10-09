<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\User;
class HomeController extends BaseController{
    public function index(){
        // hiển thị danh sách danh mục:
        //1. Lấy dữ liệu danh mục bằng model
        $cates = Category::all();
        //2. Render ra view kèm dữ liệu
        $this->render('categories.index', [
            'cates' => $cates,
        ]);
    }

    public function detail()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
}

?>