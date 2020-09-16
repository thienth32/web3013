<?php

class Product{
    var $id;
    var $name;
    var $price;
}

$samir = new Product();
$samir->id = 35;
$samir->name = 'Samir Schumm DVM';
$samir->price = 83653;

$javier = new Product();
$javier->id = 36;
$javier->name = 'Javier Sipes';
$javier->price = 84750;
echo "<pre>";
var_dump($samir, $javier);

?>