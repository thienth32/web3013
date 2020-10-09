<?php

require_once './vendor/autoload.php';
require_once './config/db.php';

use App\Controllers\HomeController;
use App\Controllers\CartController;

// Đọc về eloquent model
// https://laravel.com/docs/8.x/eloquent#retrieving-single-models

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'san-pham':
        //hien thi danh sach san pham
        $ctr = new ProducController();
        $ctr->index();
        break;
        case 'chi-tiet':
        $ctr = new HomeController();
        $ctr->detail();
        break;
    case 'gio-hang':
        $ctr = new CartController();
        $ctr->index();
        break;
    default:
        # code...
        break;
}

?>