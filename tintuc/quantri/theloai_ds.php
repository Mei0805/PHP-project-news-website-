<?php
$listTheLoai = laydsTheLoai();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

<h4 class="col-10 m-auto p-2 text-center">THỂ LOẠI</h4>
<table class="table table-bordered">
    <tr>
        <th class="text-center">ID THỂ LOẠI</th class="text-center">
        <th class="text-center" >TÊN THỂ LOẠI</th class="text-center">
        <th class="text-center">THỨ TỰ</th class="text-center">
        <th class="text-center">ẨN HIỆN</th class="text-center">
        <th class="text-center">NGÔN NGỮ</th class="text-center">
        <th class="text-center">THAO TÁC</th class="text-center">
    </tr>
    <?php foreach ($listTheLoai as $row) { ?>

        <tr>
            <td class="text-center"><?= $row['idTL'] ?></td>
            <td><?= $row['TenTL'] ?></td>
            <td class="text-center"><?= $row['ThuTu'] ?></td>
            <td><?= ($row['AnHien'] ? "Hiển thị" : "Ẩn") ?></td>
            <td><?= ($row['lang'])=='vi' ? "Tiếng Việt" : "Tiếng Anh" ?></td>
            <td class="text-center">
                <a class="btn btn-success" href="index.php?page=theloai_sua&idTL=<?=$row['idTL']?>">Sửa</a>
                <a class="btn btn-danger" href="theloai_xoa.php?idTL=<?=$row['idTL']?>" onclick="return confirm('Bạn có chắc muốn xóa?')" >Xóa</a>
            </td>
        </tr>

    <?php } ?>

</table>