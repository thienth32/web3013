<?php
namespace Controllers;
require_once '../models/User.php';
require_once '../models/Product.php';

use Models\User;
use Models\Product;
class HomeController{

    public function index()
    {
        $model = new User();
        return $model;
    }
    
}

$homectrl = new HomeController();
var_dump($homectrl->index());


?>