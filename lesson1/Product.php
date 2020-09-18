<?php

// đối tượng
class Product{
    var $id; // biến => trong class => thuộc tính
    var $name;
    var $price;
}

class Category{}

$car = new Category();
$car->name = "Xe máy";

// thực thể
$samir = new Product();
$samir->id = 35; // gán giá trị cho thuộc tính
$samir->name = 'Samir Schumm DVM';
$samir->price = 83653;
$samir->cate = $car;

$javier = new Product();
$javier->id = 36;
$javier->name = 'Javier Sipes';
$javier->price = 84750;
echo "<pre>";
var_dump($samir);

?>