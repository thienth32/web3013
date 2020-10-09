<?php
namespace App\Controllers;
use App\Models\Category;
class HomeController extends BaseController{
    public function index(){
            // hien thi danh sach danh muc
            //1.lay du lieu danh muc model
            $cates = Category::all();
            //2.render ra view kem du lieu
            // categoties/index.blade.php
            $this->render('categories.index', [
                'cates' => $cates
            
        ]);
    }

    public function detail()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
}

?>