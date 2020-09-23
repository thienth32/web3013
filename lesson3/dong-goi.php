<?php
/*
Giới hạn lại khả năng truy cập của các thuộc tính
và phương thức của 1 class

**** Phạm vi của 1 lớp được tính từ sau dấu { 
cho đến trước dấu } của mỗi class
có 3 từ khóa chỉ phạm vi gồm:

public (có thể truy cập từ phía ngoài phạm vi)
protected (chỉ có thể truy cập trong phạm vi của 
lớp định nghĩa & lớp kế thừa)
private (chỉ có thể truy cập trong phạm vi của 
lớp định nghĩa)
*/
class A{
    public $name = "Nguyễn Thị Dịu";
    protected $age = 30;
    private $tienluong = 60000;
    function getname()
    {
        return $this->name;
    }
    function getage()
    {
        return $this->age;
    }
    function getsalary()
    {
        return $this->tienluong;
    }
}
class B extends A{
    
}
$test = new A();
echo $test->getname();



?>