<?php
$listanh = layanhTin();
?>

<style>
    .listanh {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .tin {
        width: 30%;
        padding: 2rem;
    }

    .tin img {
        width: 300px;
        height: 200px;
        object-fit: cover;
    }
</style>
<h4 class="col-10 m-auto p-2 text-center">Hình ảnh bài viết</h4>
<div class="listanh">
    <?php foreach ($listanh as $row) { ?>
        <div class="tin text-center">
            <a style="text-decoration: none;" href="index.php?page=tin&idTin=<?= $row['idTin'] ?>">
                <img src="../<?= $row['urlHinh'] ?>" alt="" width="300">
            </a>
            <p><?= $row['TieuDe'] ?></p>
        </div>

    <?php } ?>
</div>