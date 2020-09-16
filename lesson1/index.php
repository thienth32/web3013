<?php
// lập trình hướng đối tượng
// lấy & hiển thị danh sách sản phẩm
// 1. kết nối với csdl
$servername = "127.0.0.1";
$username = "root";
$password = "123456"; // nếu máy tính dùng xampp thì để trống mk
$conn = new PDO("mysql:host=$servername;dbname=kaopiz", $username, $password);

// 2. tạo ra câu truy vấn với csdl để lấy ra ds sp
$query = "select * from products";

// 3. Thực thi câu truy vấn & lấy data
$statement = $conn->prepare($query); // nạp truy vấn vào kết nối
$statement->execute(); // thực thi câu truy vấn với csdl
$products = $statement->fetchAll(); // thực hiện lấy toàn bộ kết quả trả về của câu truy vấn

echo "<pre>";
var_dump($products);die;

// 4. tạo vòng lặp dựa vào kết quả lấy được để hiển thị danh sách (table)







?>