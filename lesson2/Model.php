<?php
class Model{
    function __construct($table)
    {
        $servername = "127.0.0.1";
        $dbname = "kaopiz";
        $username = "root";
        $password = "123456"; // nếu máy tính dùng xampp thì để trống mk
        $this->connect = new PDO("mysql:host=$servername;dbname=$dbname", 
                        $username, $password);
        $this->table = $table;
    }

    function all(){
        $query = "select * from " . $this->table;
        return $this->executeQuery($query);
    }

    function delete($id){
        $query = "delete from " . $this->table . " where id = $id";
        return $this->executeQuery($query);
    }

    function executeQuery($query){
        // 3. Thực thi câu truy vấn & lấy data
        $statement = $this->connect->prepare($query); // nạp truy vấn vào kết nối
        $statement->execute(); // thực thi câu truy vấn với csdl
        return $statement->fetchAll(); // thực hiện lấy toàn bộ kết quả trả về của câu truy vấn
    }
}

$productModel = new Model("products");
$userModel = new Model("users");
$categoryModel = new Model("categories");
echo "<pre>";
$productModel->delete(37);
var_dump($productModel->all());



?>