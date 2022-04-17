<?php
$idLT = $_GET['idLT'];
settype($idLT, "int");

$page_size = 5;
$page_num = 1;
if (isset($_GET['page_num'])) {
    $page_num = $_GET['page_num'] + 0;
}

if ($page_num < 0) $page_num = 1;
$listTin = layTinTrongLoai($idLT, $page_num, $page_size);
$loaitin = layTenLT($idLT);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<style>
    .pagination {
        padding: 1rem;
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 1rem;

    }

    .pagination li {
        border: 1px solid darkblue;
        background: #212529;
        border-radius: 50%;
        padding: .7rem 1rem;
        color: white;
    }

    .pagination li a {
        text-decoration: none;
        color: white;
    }
</style>

<h4 class="col-10 m-auto p-2 text-center">DANH SÁCH TIN</h4>
<h5 class="col-10 m-auto p-2 text-center">Loại tin: <span> <?= $loaitin['Ten'] ?></span></h5>
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
<?php
$total_rows = demTinTrongLoai($idLT);
$base_url = "index.php?page=loai&idLT=$idLT";
echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
?>