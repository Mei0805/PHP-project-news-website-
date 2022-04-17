<?php
require_once 'connectdb.php';
$tintt = tinNoiBat();
$tin1 = $tintt->fetch();
$tin2 = $tintt->fetch();
$tin3 = $tintt->fetch();
$tin4 = $tintt->fetch();
$theloai = layTheLoai();
$loaitin1 = layloaitin($tin1['idLT']);
$loaitin2 = layloaitin($tin2['idLT']);
$loaitin3 = layloaitin($tin3['idLT']);
$loaitin4 = layloaitin($tin4['idLT']);

?>

<body>


    <section class="featured-posts-grid">
        <div class="container">
            <div class="row row-8">

                <div class="col-lg-6">

                    <!-- Small post - Tin nổi bật 1-->
                    <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                        <article class="entry card post-list featured-posts-grid__entry">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url('<?= $tin2['urlHinh'] ?>')">
                                <a href="index.php?page=tin&idLT=<?=$tin2['idLT']?>&idTin=<?= $tin2['idTin']?>" class="thumb-url"></a>
                                <img src="img/content/hero/khu-khuan-thanh-pho.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php switch ($loaitin2['Ten']) {
                                                                                                                                                                                    case 'Xã hội':echo 'blue';break;
                                                                                                                                                                                    case 'Du lịch': echo 'violet';break;
                                                                                                                                                                                    case 'Chia sẻ':echo 'orange'; break;
                                                                                                                                                                                    case 'Thể thao':echo 'green'; break;
                                                                                                                                                                                    default: echo 'violet';break;}?>">
                                                                                                                                                                                    <?= $loaitin2['Ten'] ?>
                                </a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <h2 class="entry__title">
                                    <a href="index.php?page=tin&idLT=<?=$tin2['idLT']?>&idTin=<?= $tin2['idTin']?>"><?= $tin2['Tieude'] ?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span></span>
                                        <a href="#"></a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Ngày đăng: <?= $tin2['Ngay'] ?> |
                                        <span style="color: #2D95E3;"><?= $tin2['SoLanXem'] ?> Lượt xem</span>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end post -->

                    <!-- Small post - Tin nổi bật 2-->
                    <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                        <article class="entry card post-list featured-posts-grid__entry">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url('<?= $tin3['urlHinh'] ?>')">
                                <a href="index.php?page=tin&idLT=<?=$tin3['idLT']?>&idTin=<?= $tin3['idTin']?>" class="thumb-url"></a>
                                <img src="img/content/hero/tiem-vacxin.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php switch ($loaitin3['Ten']) {
                                                                                                                                                                                    case 'Xã hội':echo 'blue';break;
                                                                                                                                                                                    case 'Du lịch': echo 'violet';break;
                                                                                                                                                                                    case 'Chia sẻ':echo 'orange'; break;
                                                                                                                                                                                    case 'Thể thao':echo 'green'; break;
                                                                                                                                                                                    default: echo 'violet';break;}?>">
                                                                                                                                                                                    <?= $loaitin3['Ten'] ?></a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <h2 class="entry__title">
                                    <a href="index.php?page=tin&idLT=<?=$tin3['idLT']?>&idTin=<?= $tin3['idTin']?>"><?= $tin3['Tieude'] ?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span></span>
                                        <a href="#"></a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Ngày đăng: <?= $tin3['Ngay'] ?> |
                                        <span style="color: #2D95E3;"><?= $tin3['SoLanXem'] ?> Lượt xem</span>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end post -->

                    <!-- Small post - Tin nổi bật 3 -->
                    <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                        <article class="entry card post-list featured-posts-grid__entry">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url('<?= $tin4['urlHinh'] ?>')">
                                <a href="index.php?page=tin&idLT=<?=$tin4['idLT']?>&idTin=<?= $tin4['idTin']?>" class="thumb-url"></a>
                                <img src="img/content/hero/mua-lu-trung-quoc.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php switch ($loaitin4['Ten']) {
                                                                                                                                                                                    case 'Xã hội':echo 'blue';break;
                                                                                                                                                                                    case 'Du lịch': echo 'violet';break;
                                                                                                                                                                                    case 'Chia sẻ':echo 'orange'; break;
                                                                                                                                                                                    case 'Thể thao':echo 'green'; break;
                                                                                                                                                                                    default: echo 'violet';break;}?>">
                                                                                                                                                                                    <?= $loaitin4['Ten'] ?></a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <h2 class="entry__title">
                                    <a href="index.php?page=tin&idLT=<?=$tin4['idLT']?>&idTin=<?= $tin4['idTin']?>"><?= $tin4['Tieude'] ?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span></span>
                                        <a href="#"></a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Ngày đăng: <?= $tin4['Ngay'] ?> |
                                        <span style="color: #2D95E3;"><?= $tin4['SoLanXem'] ?> Lượt xem</span>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end post -->

                </div> <!-- end col -->

                <div class="col-lg-6">

                    <!-- Large post -  Tin nổi bật 4-->
                    <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                        <article class="entry card featured-posts-grid__entry">
                            <div class="entry__img-holder card__img-holder">
                                <a href="index.php?page=tin&idLT=<?=$tin1['idLT']?>&idTin=<?= $tin1['idTin']?>">
                                    <img src="<?= $tin1['urlHinh'] ?>"  alt="" class="entry__img">
                                </a>
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php switch ($loaitin1['Ten']) {
                                                                                                                                                                                    case 'Xã hội':echo 'blue';break;
                                                                                                                                                                                    case 'Du lịch': echo 'violet';break;
                                                                                                                                                                                    case 'Chia sẻ':echo 'orange'; break;
                                                                                                                                                                                    case 'Thể thao':echo 'green'; break;
                                                                                                                                                                                    default: echo 'violet';break;}?>">
                                                                                                                                                                                    <?= $loaitin1['Ten'] ?></a>
                            </div>

                            <div class="entry__body card__body">
                                <h2 class="entry__title">
                                    <a href="index.php?page=tin&idLT=<?=$tin1['idLT']?>&idTin=<?= $tin1['idTin']?>"><?= $tin1['Tieude'] ?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span></span>
                                        <a href="#"></a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Ngày đăng: <?= $tin1['Ngay'] ?> |
                                        <span style="color: #2D95E3;"><?= $tin1['SoLanXem'] ?> Lượt xem</span>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end large post -->
                </div>

            </div>
        </div>
    </section>

</body>