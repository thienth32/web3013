<?php
echo "<pre>";

require_once './Product.php';
require_once './Category.php';
$pros = Product::where(['price', '>', 10000])
        ->andWhere(['name', 'like', "%green%"])->get();
var_dump($pros);

// thực hiện tạo ra các màn hình để hiển thị danh sách của các sản phẩm
// và các danh mục
// thực hiện thêm/sửa/xóa các dữ liệu này với db kaopiz 
// tự tạo các file class đại diện cho các bảng trong db



?>