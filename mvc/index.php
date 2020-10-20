  
<?php
session_start();
require_once './config/helpers.php';
require_once './vendor/autoload.php';
require_once './config/db.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\UserController;
use App\Controllers\LoginController;
// Đọc về eloquent model
// https://laravel.com/docs/8.x/eloquent#retrieving-single-models

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    //danh mục
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'remove-cate':
        $ctr = new HomeController();
        $ctr->remove();
        break;
    case 'add-cate':
        $ctr = new HomeController();
        $ctr->addForm();
        break;
    case 'edit-cate':
        $ctr = new HomeController();
        $ctr->editForm();
        break;
    case 'save-add-cate':
        $ctr = new HomeController();
        $ctr->saveAddCate();
        break;
    case 'save-edit-cate':
        $ctr = new HomeController();
        $ctr->saveEditCate();


        //sản phẩm
    case 'san-pham':
        $ctr = new ProductController();
        $ctr->index();
        break;
     case 'remove-pro':
        $ctr = new ProductController();
        $ctr->remove();
        break;
    case 'add-pro':
        $ctr = new ProductController();
        $ctr->addForm();
        break;
    case 'edit-pro':
        $ctr = new ProductController();
        $ctr->editForm();
        break;
    case 'save-add-pro':
        $ctr = new ProductController();
        $ctr->saveAddPro();
        break;
    case 'save-edit-pro':
        $ctr = new ProductController();
        $ctr->saveEditPro();
    break;



        //tài khoản
    case 'tai-khoan':
        $ctr = new UserController();
        $ctr->index();
        break;
    case 'remove-user':
        $ctr = new UserController();
        $ctr->remove();
        break;
    case 'add-user':
        $ctr = new UserController();
        $ctr->addForm();
        break;
    case 'edit-user':
        $ctr = new UserController();
        $ctr->editForm();
        break;
    case 'save-add-user':
        $ctr = new UserController();
        $ctr->saveAddUser();
        break;
    case 'save-edit-user':
        $ctr = new UserController();
        $ctr->saveEditUser();
    break;


    //đăng nhập-đăng suất
    case 'login':
        $ctr = new LoginController();
        $ctr->loginForm();
        break;
    case 'post-login':
        $ctr = new LoginController();
        $ctr->postLogin();
        break;
    case 'logout':
        $ctr = new LoginController();
        $ctr->logout();
        break;
    
    default:
        break;
}

?>