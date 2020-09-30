<?php
namespace App\Controllers;

use App\Models\User;
class HomeController{
    public function index(){
        $model = new User();
        var_dump($model);
    }

    public function detail()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
}

?>