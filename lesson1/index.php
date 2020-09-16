<?php

require_once './db.php';
// lập trình hướng đối tượng
// lấy & hiển thị danh sách sản phẩm
// 1. lấy danh sách sản phẩm (lấy hết)
$lenhSql = "select * from products";
$products = truy_van($lenhSql);

// 4. tạo vòng lặp dựa vào kết quả lấy được để hiển thị danh sách (table)
?>

<table>
    <thead>
        <th>ID</th>
        <th>Tên sp</th>
        <th>Giá</th>
    </thead>
    <tbody>
        <?php foreach($products as $pro): ?>
        <tr>
            <td><?php echo $pro['id'];?></td>
            <td><?php echo $pro['name'];?></td>
            <td><?php echo $pro['price'];?></td>
        </tr>

        <?php endforeach ?>
    </tbody>
</table>