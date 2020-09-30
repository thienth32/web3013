<?php
// không gian tên => tạo 1 vùng không gian, 
// có thể chứa các tên class/tên function
// không bị trùng lặp (gây lỗi)

namespace ChauA;

class DongVat{}

namespace ChauPhi;
use ChauA\DongVat as DVChauA;
class DongVat{}


$x = new DVChauA();

var_dump($x);
?>