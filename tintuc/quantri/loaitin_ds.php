<?php
$listLoaiTin = laydsLoaiTin();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<h4 class="col-9 m-auto p-2 text-center">DANH SÁCH LOẠI TIN</h4>
<table class="table table-bordered">
    <tr>
        <th class="text-center">ID LOẠI TIN</th>
        <th class="text-center">TÊN LOẠI TIN</th>
        <th class="text-center">THỨ TỰ</th>
        <th class="text-center">ẨN HIỆN</th>
        <th class="text-center">NGÔN NGỮ</th>
        <th class="text-center">THUỘC THỂ LOẠI</th>
        <th class="text-center">THAO TÁC</th>
    </tr>
    <?php foreach ($listLoaiTin as $row) { ?>
        <tr>
            <td><?= $row['idLT'] ?></td>
            <td><a style="text-decoration: none;" href="index.php?page=loai&idLT=<?= $row['idLT'] ?>"><?= $row['Ten'] ?> </a></td>
            <td><?= $row['ThuTu'] ?></td>
            <td><?= ($row['AnHien'] ? "Hiển thị" : "Ẩn") ?></td>
            <td><?= ($row['lang']) == 'vi' ? "Tiếng Việt" : "Tiếng Anh" ?></td>
            <td>
                <?=
                layTenTL($row['idTL']);
                ?>
            </td>
            <td class="text-center">
                <a class="btn btn-success " href="index.php?page=loaitin_sua&idLT=<?= $row['idLT'] ?>">Sửa</a>
                <a class="btn btn-danger" href="loaitin_xoa.php?idLT=<?= $row['idLT'] ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
            </td>
        </tr>
    <?php } ?>
</table>