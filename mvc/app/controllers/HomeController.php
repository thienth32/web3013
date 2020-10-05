<?php
namespace App\Controllers;

use App\Models\User;
class HomeController extends BaseController{
    public function index(){
        $name = "thienth";
        $age = 30;
        $company = "FPT Polytechnic";
        $this->render('home.index', [
            'name' => $name,
            'age' => $age,
            'yourCompany' => $company
        ]);
    }

    public function detail()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
}

?>