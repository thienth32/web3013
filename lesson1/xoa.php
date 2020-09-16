<?php

require_once './db.php';
// 1. lấy id từ đường dẫn
$id = $_GET['id'];
// 2. Tạo câu lệnh xóa với db
$deleteQuery = "delete from products where id = $id";
// 3. Thực thi lệnh xóa
truy_van($deleteQuery, false);

// 4. điều hướng website về trang index
header("location: index.php");

?>