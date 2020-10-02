<?php
namespace App\Controllers;

use App\Models\User;
class HomeController{
    public function index(){
        echo "<pre>";
        var_dump(User::all());
    }

    public function detail()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
}

?>