<?php

// constructor: hàm khởi tạo - hàm sẽ tự động được
// thực thi ngay khi có thực thể mới được tạo ra
// Cú pháp: function __construct(){}
// 2 cái gạch dưới "_"
class MayTinh{
    function __construct($name, $price, $ram, $cpu)
    {
        $this->name = $name; 
        $this->price = $price; 
        $this->ram = $ram; 
        $this->cpu = $cpu; 

    }
}

$dell = new MayTinh("Dell Invostro", 500, 4, "core i9");

$hp = new MayTinh("HP Ghi láo", 950, 12, "core i10");

echo "<pre>";
var_dump($dell, $hp);








?>