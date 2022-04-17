<?php
$tukhoa = isset($_GET['tukhoa']) ? trim(strip_tags($_GET['tukhoa'])) : '';
$listTin = [];
if ($tukhoa != "") {
    $listTin = ketQuaTimKiem($tukhoa);
} else $listTin = null;
$sotin=count($listTin);

?>

<style>
    .dstin {
        padding: 1rem;
    }

    .dstin .tin {
        padding: 1rem 0;
        border-bottom: 1px solid lightgrey;
    }

    .dstin h3 a:hover {
        text-decoration: none;
    }

    .dstin .tin .info {
        font-style: italic;
        color: #A93130;
    }

    .dstin .tin .cmt {
        font-weight: bold;
    }

    .dstin .tin .tomtat {
        font-size: 1rem;
        padding: .5rem 0;
        font-weight: normal;
    }

    .dstin>p {
        margin: 0;
    }

    .dstin .timkiem {
        font-weight: bold;
        font-style: italic;
        text-decoration: underline;
    }

    .dstin .chitiet {
        padding-top: 1rem;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 1rem;
    }
</style>
<!-- Posts -->
<div class="blog__content mb-72">
    <p><span><?=$sotin?></span> kết quả tìm kiếm</p>
    <h3 class="page-title">Từ khóa tìm kiếm: <span class="timkiem" style="font-style: italic; text-decoration:underline"><?= $tukhoa ?></span></h3>
    <?php if (count($listTin) > 0) {
        foreach ($listTin as $tin) {
            $loaitin = layloaitin($tin['idLT']); ?>
            <article class="entry card post-list">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url('<?= $tin['urlHinh'] ?>')">
                    <a href=index.php?page=tin&idTin=<?= $tin['idTin'] ?>" class="thumb-url"></a>
                    <img src="img/content/list/list_post_1.jpg" alt="" class="entry__img d-none">
                    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php switch ($loaitin['Ten']) {
                                                                                                                                                                        case 'Xã hội':echo 'blue';break;
                                                                                                                                                                        case 'Du lịch': echo 'violet';break;
                                                                                                                                                                        case 'Chia sẻ':echo 'orange'; break;
                                                                                                                                                                        case 'Thể thao':echo 'green'; break;
                                                                                                                                                                        case 'Khoa học':echo 'red'; break;
                                                                                                                                                                        case 'Pháp luật':echo 'red'; break;
                                                                                                                                                                        case 'Giáo dục':echo 'red'; break;
                                                                                                                                                                        default: echo 'violet';break;
                                                                                                                                                                    } ?>"><?= $loaitin['Ten'] ?></a>
                </div>

                <div class="entry__body post-list__body card__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                            <a href="index.php?page=tin&idTin=<?= $tin['idTin'] ?>"><?= $tin['TieuDe'] ?></a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">TinMoi</a>
                            </li>
                            <li class="entry__meta-date">
                                <?= $tin['Ngay'] ?>
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">
                        <p><?= $tin['TomTat'] ?></p>
                    </div>
                </div>
            </article>
    <?php }
    }
    ?>


    <!-- Pagination -->
    <!-- <nav class="pagination">
        <span class="pagination__page pagination__page--current">1</span>
        <a href="#" class="pagination__page">2</a>
        <a href="#" class="pagination__page">3</a>
        <a href="#" class="pagination__page">4</a>
        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
    </nav> -->
</div> <!-- end posts -->