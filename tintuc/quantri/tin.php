<?php
$idTin = $_GET['idTin'];
settype($idTin, "int");

$listTin = layTin($idTin);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">


<h4 class="col-10 m-auto p-2 text-center">Chi tiết tin</h4>
<table class="table table-bordered">
    <tr>
        <th class="col-1 m-auto p-2 text-center">ID TIN</th>
        <th class="col-2 m-auto p-2 text-center">TIÊU ĐỀ</th>
        <th class="col-4 m-auto p-2 text-center">TÓM TẮT</th>
        <th class="col-2 m-auto p-2 text-center">NGÀY</th>
        <th class="col-1 m-auto p-2 text-center">NGÔN NGỮ</th>
        <th class="col-1 m-auto p-2 text-center">LƯỢT XEM</th>
        <th class="col-5 m-auto p-2 text-center">ẨN HIỆN</th>
    </tr>
    <?php foreach ($listTin as $row) { ?>

        <tr>
            <td class="text-center"><?= $row['idTin'] ?></td>
            <td><?= $row['TieuDe'] ?></td>
            <td><?= $row['Tomtat'] ?></td>
            <td class="text-center"><?= $row['Ngay'] ?></td>
            <td><?= ($row['lang']) == 'vi' ? "Tiếng Việt" : "Tiếng Anh" ?></td>
            <td class="text-center"><?= $row['SoLanXem'] ?></td>
            <td><?= ($row['AnHien'] ? "Hiển thị" : "Ẩn") ?></td>
            
        </tr>

    <?php } ?>


</table>
