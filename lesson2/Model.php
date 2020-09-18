<?php
class Model{
    function __construct()
    {
        $servername = "127.0.0.1";
        $dbname = "kaopiz";
        $username = "root";
        $password = "123456"; // nếu máy tính dùng xampp thì để trống mk
        $this->connect = new PDO("mysql:host=$servername;dbname=$dbname", 
                        $username, $password);
        
    }
}

?>