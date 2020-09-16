<?php

function truy_van($query, $laytoanbo = true){
    $servername = "127.0.0.1";
    $username = "root";
    $password = "123456"; // nếu máy tính dùng xampp thì để trống mk
    $conn = new PDO("mysql:host=$servername;dbname=kaopiz", $username, $password);
    
    // 3. Thực thi câu truy vấn & lấy data
    $statement = $conn->prepare($query); // nạp truy vấn vào kết nối
    $statement->execute(); // thực thi câu truy vấn với csdl
    if($laytoanbo == true){
        $result = $statement->fetchAll(); // thực hiện lấy toàn bộ kết quả trả về của câu truy vấn
    }else{
        $result = $statement->fetch(); // thực hiện lấy bản ghi đầu tiên tìm đc của câu truy vấn
    }
    
    return $result;
}

?>