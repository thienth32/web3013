<?php
// tạo ra lớp SinhVien gồm các thuộc tính
// mã sv, họ tên
// điểm php2, điểm php1, điểm php3
// định nghĩa ra tính điểm phẩy (phương thức)
// => trung bình cộng của các điểm đã được gán (3 môn)

// tạo ra 2 thực thể Trung, Dịu, gán giá trị cho các thuộc tính
// thực hiện gọi phương thức để hiển thị điểm trung bình của các thực thể
// TG: 10 phút (7:41)

// tạo ra phương thức getInfo()
// => hiển thị đầy đủ các thông tin của sinh viên 
// và điểm trung bình của sinh viên này

class SinhVien{
    function trungBinh(){
        $diemtrungbinh = ($this->php1+$this->php2+$this->php3)/3;
        return $diemtrungbinh;
    }

    function getInfo(){
        $info = "Mã sv: " . $this->masv
                . ", Tên sv: " . $this->name
                . ", php1: " . $this->php1
                . ", php2: " . $this->php2
                . ", php3: " . $this->php3
                . ", điểm trung bình: ". round($this->trungBinh(), 2);
        return $info;

    }

}

$can = new SinhVien();
$can->name = "Nguyễn Quốc Cần";
$can->masv = "PH01234";
$can->php1 = 5;
$can->php2 = 7;
$can->php3 = 8;
echo $can->getInfo(); 
echo "<br>";
$nam = new SinhVien();
$nam->masv = "PH0987";
$nam->name = "Nguyen Van Nam";
$nam->php1 = 7;
$nam->php2 = 8;
$nam->php3 = 7;
echo $nam->getInfo();

?>