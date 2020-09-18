<?php
// phương thức
// $this
// constructor (hàm khởi tạo)
// static

class DongVat{
    // var $name; // thuộc tính
    
    // phương thức = định nghĩa 1 function 
    function getName() // đn phương thức
    {
        // $this: thực thể đang thực hiện hành động
        return $this->name;
    }

}
$meo = new DongVat();
$meo->name = "Mun";

$dog = new DongVat();
$dog->name = "Mic";

echo "<pre>";
var_dump($meo->getName()); // thực hiện hành động
// var_dump($dog->getName());

?>