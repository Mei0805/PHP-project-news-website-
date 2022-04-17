<?php
$listUser = laydsUser();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

<h4 class="col-10 m-auto p-2 text-center">THỂ LOẠI</h4>
<table class="table table-bordered">
    <tr>
        <th class="text-center">ID USER</th class="text-center">
        <th class="text-center" >TÊN ĐĂNG NHẬP</th class="text-center">
        <th class="text-center">EMAIL</th class="text-center">
        <th class="text-center">GIỚI TÍNH</th class="text-center">
        <th class="text-center">NGÀY ĐĂNG KÝ</th class="text-center">
        <th class="text-center">VAI TRÒ</th class="text-center">
        <th class="text-center">THÔNG TIN</th class="text-center">
        <th class="text-center">THAO TÁC</th class="text-center">
    </tr>
    <?php foreach ($listUser as $row) { ?>

        <tr>
            <td class="text-center"><?= $row['idUser'] ?></td>
            <td><?= $row['username'] ?></td>
            <td ><?= $row['email'] ?></td>
            <td><?= ($row['idGroup'] ? "admin" : "thành viên") ?></td>
            <td class="text-center"><?= $row['ngay'] ?></td>
            <td><?= ($row['idGroup'] ? "admin" : "thành viên") ?></td>
            <td class="text-center"><?= $row['gioiThieu'] ?></td>
            <td class="text-center">
                <a class="btn btn-success" href="index.php?page=theloai_sua&idTL=<?=$row['idTL']?>">Sửa</a>
                <a class="btn btn-danger" href="theloai_xoa.php?idTL=<?=$row['idTL']?>" onclick="return confirm('Bạn có chắc muốn xóa?')" >Xóa</a>
            </td>
        </tr>

    <?php } ?>

</table>