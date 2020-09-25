<?php
echo "<pre>";

require_once './Product.php';
require_once './Category.php';
// $pros = Category::all();
// tạo mới dữ liệu
// $insertArray = [
//         'cate_name' => "demo insert 1",
//         'show_menu' => 1,
//         'desc' => "someone"
// ];
// $model = new Category();
// $model->insert($insertArray);
// var_dump(Category::all());
// cập nhật dữ liệu 
// $updateArray = [
//         'cate_name' => "web3013 update demo",
//         'show_menu' => 0,
//         'desc' => "fpt poly web3013.1"
// ];
// $model = Category::find(11);
// $model->update($updateArray);

// xóa dữ liệu dựa vào id
Category::destroy(11);
var_dump(Category::all());

// thực hiện tạo ra các màn hình để hiển thị danh sách của các sản phẩm
// và các danh mục
// thực hiện thêm/sửa/xóa các dữ liệu này với db kaopiz 
// tự tạo các file class đại diện cho các bảng trong db



?>