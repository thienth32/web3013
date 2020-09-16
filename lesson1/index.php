<?php

require_once './db.php';
// lập trình hướng đối tượng
// lấy & hiển thị danh sách sản phẩm
// 1. lấy danh sách sản phẩm (lấy hết)
$lenhSql = "select * from products";
$products = truy_van($lenhSql);

echo "<pre>";
var_dump($products);die;

// 4. tạo vòng lặp dựa vào kết quả lấy được để hiển thị danh sách (table)







?>