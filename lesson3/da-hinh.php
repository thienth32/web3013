<?php
// Cho phép các lớp con được quyền viết lại 
// (định nghĩa lại) các thuộc tính/phương thức
// đã được định nghĩa ở lớp cha

class NhanVien{
    var $tienngaycong;
    var $songaylam;
    function tienluong(){
        return $this->tienngaycong * $this->songaylam;
    }
}
// nhân viên FPT mỗi người hàng tháng đóng góp 
// 1 ngày công cho quỹ từ thiện FPT
// => số tiền thực nhận của họ sẽ không áp dụng được
// công thức mặc định 
// hãy định nghĩa lại phương thức tien luong
class NhanVienFPT extends NhanVien{
    var $ten;
    var $donvi;
    function tienluong()
    {
        // parent:: gọi đến lớp cha nhằm thực thi 1 phương thức hoặc 
        // 1 thuộc tính nào đó của lớp cha
        return parent::tienluong() - $this->tienngaycong;
    }
    function thongtin(){
        echo "Họ tên: " . $this->ten
        . "<br> Đơn vị công tác: ". $this->donvi
        . "<br> Số ngày đi làm: ". $this->songaylam
        . "<br> Lương tháng: ". $this->tienluong();

    }
}

/*
Nhân viên tại Fpoly thì mỗi tháng được thưởng thêm tiền trách nhiệm
bằng 5% tổng số lương 
và phải nộp 7% tiền thuế
hãy tạo ra lớp Nhân viên Fpoly & định nghĩa lại phương thức tiền lương

*/
$can = new NhanVienFPT();
$can->ten = "Phạm Hút Cần";
$can->donvi = "FPT Software";
$can->tienngaycong = 25;
$can->songaylam = 20;
$can->thongtin();
?>