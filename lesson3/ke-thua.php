<?php
// Lớp con (class B) kế thừa lại lớp cha (class A)
// thì thực thể của lớp B sẽ được phép sử dụng 
// lại các thuộc tính
// & các phương thức được định nghĩa tại lớp A
class Animal{
    var $name = "Đỗ Thành Trung";
    var $birthDate = "27/07/2000";

    function dihoc($time){
        return $this->name . " đang đi học vào lúc $time giờ";
    }
}

class Cat extends Animal{

}

$trung = new Animal();
$diu = new Cat();
$diu->name = "Nguyễn Thị Dịu";
// echo $diu->dihoc(17);
// echo $trung->dihoc(6);

// tạo 1 lớp Nhân viên gồm các thuộc tính
// Tiền ngày công, số ngày đi làm trong tháng
// tạo phương thức tính tiền => số tiền người nhân viên 
// được nhận trong tháng
class NhanVien{
    var $tienngaycong;
    var $songaylam;
    function tienluong(){
        return $this->tienngaycong * $this->songaylam;
    }
}

// tạo 1 lớp nhân viên FPT kế thừa lớp nhân viên
// bổ sung thêm thuộc tính tên, đơn vị công tác
// tạo 1 phương thức thongtin()
// hiển thị họ và tên, đơn vị công tác, số ngày làm việc
// hiển thị số lương tháng này
class NhanVienFPT extends NhanVien{
    var $ten;
    var $donvi;
    function thongtin(){
        echo "Họ tên: " . $this->ten
        . "<br> Đơn vị công tác: ". $this->donvi
        . "<br> Số ngày đi làm: ". $this->songaylam
        . "<br> Lương tháng: ". $this->tienluong();

    }
}

$can = new NhanVienFPT();
$can->ten = "Phạm Hút Cần";
$can->donvi = "FPT Software";
$can->tienngaycong = 25;
$can->songaylam = 20;
$can->thongtin();


?>