<?php
$listcmt = laydsComment();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

<h4 class="col-10 m-auto p-2 text-center">BÌNH LUẬN</h4>
<table class="table table-bordered">
    <tr>
        <th class="text-center" >ID Ý KIẾN</th class="text-center">
        <th class="text-center">ID TIN</th class="text-center">
        <th class="text-center">NGÀY ĐĂNG</th class="text-center">
        <th class="text-center">NỘI DUNG</th class="text-center">
        <th class="text-center">EMAIL</th class="text-center">
        <th class="text-center">HỌ TÊN</th class="text-center">
        <th class="text-center">ẨN HIỆN</th class="text-center">
    </tr>
    <?php foreach ($listcmt as $row) { ?>

        <tr>
            <td class="text-center"><?= $row['idYKien'] ?></td>
            <td ><a style="text-decoration: none;" href="index.php?page=tin&idTin=<?=$row['idTin'] ?>"><?= $row['idTin'] ?> </a></td>
            <td ><?= $row['Ngay'] ?></td>
            <td class="col-5"><?= $row['NoiDung'] ?></td>
            <td ><?= $row['Email'] ?></td>
            <td ><?= $row['HoTen'] ?></td>
            <td><?= ($row['AnHien'] ? "Hiển thị" : "Ẩn") ?></td>
        </tr>

    <?php } ?>

</table>