<?php
// tạo lớp Ô tô gồm các thuộc tính:
// tên xe
// số lượng
// giá xe
// số xe đã bán được

// tạo phương thức tính doanh thu
// hiển thị thông tin của xe ô tô
// dựa vào công thức số xe đã bán * giá xe => doanh thu
// tính ra số tiền còn lại nếu bán hết chỗ xe còn tồn đọng
class Oto{
    function doanhthu(){
        $doanhthu = $this->xedaban * $this->giaxe;
        $tienton = ($this->soluong-$this->xedaban)*$this->giaxe;
        return "Thông tin xe: "
            . "Tên xe: " .$this->tenxe
            . ", Số lượng: " . $this->soluong
            . ", Giá xe: " . $this->giaxe
            . ", Xe bán được: " . $this->xedaban
            . ", Doanh thu: " . $doanhthu
            . ", Tiền còn tồn đọng: " . $tienton;
    }
}
$xe = new Oto();
$xe->tenxe = "Mẹc xe đéc";
$xe->giaxe = 30;
$xe->soluong = 50;
$xe->xedaban = 27;
echo $xe->doanhthu();


?>