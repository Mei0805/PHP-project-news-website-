<?php
$tinmoi = tinMoiNhat();
$tinnoi = tinNoiBat();
$theloai = layTheLoai();

$phapluat = tintheoloaitin(11);
$thegioi = tintheoloaitin(83);
$xahoi = tintheoloaitin(9);
$dulich = tintheoloaitin(3);
?>

<body>
    <section class="section tab-post mb-16">
        <div class="title-wrap title-wrap--line">
            <h3 class="section-title">Tin mới nhất</h3>
            <div class="tabs tab-post__tabs">
                <ul class="tabs__list">
                    <li class="tabs__item tabs__item--active">
                        <a href="#tab-all" class="tabs__trigger">Tất cả</a>
                    </li>
                    <li class="tabs__item">
                        <a href="#tab-lifestyle" class="tabs__trigger">Pháp luật</a>
                    </li>
                    <li class="tabs__item">
                        <a href="#tab-world" class="tabs__trigger">Thế giới</a>
                    </li>
                    <li class="tabs__item">
                        <a href="#tab-business" class="tabs__trigger">Xã hội</a>
                    </li>
                    <li class="tabs__item">
                        <a href="#tab-fashion" class="tabs__trigger">Giải trí</a>
                    </li>
                </ul> <!-- end tabs -->
            </div>
        </div>

        <!-- tab content -->
        <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

            <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row card-row">
                    <?php foreach ($tinmoi as $tin) { ?>
                        <?php $loaitin = layloaitin($tin['idLT']) ?>
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="<?= $tin['urlHinh'] ?>" src="img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php switch ($loaitin['Ten']) {
                                                                                                                                                                        case 'Xã hội':
                                                                                                                                                                            echo 'blue';
                                                                                                                                                                            break;
                                                                                                                                                                        case 'Văn hoá':
                                                                                                                                                                            echo 'red';
                                                                                                                                                                            break;
                                                                                                                                                                        case 'Thế giới':
                                                                                                                                                                            echo 'blue';
                                                                                                                                                                            break;
                                                                                                                                                                        case 'Chia sẻ':
                                                                                                                                                                            echo 'orange';
                                                                                                                                                                            break;
                                                                                                                                                                        case 'Thể thao':
                                                                                                                                                                            echo 'green';
                                                                                                                                                                            break;
                                                                                                                                                                        default:
                                                                                                                                                                            echo 'violet';
                                                                                                                                                                            break;
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                                        <?= $loaitin['Ten'] ?>
                                    </a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>"><?= $tin['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tin['Ngay'] ?>
                                            </li>
                                            <li class="entry__meta-views">
                                                <i class="ui-eye"></i>
                                                <span><?= $tin['SoLanXem'] ?> lượt xem </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?= $tin['TomTat'] ?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                </div>
            </div> <!-- end pane 1 -->

            <!-- Tin pháp luật -->
            <div class="tabs__content-pane" id="tab-lifestyle">
                <div class="row card-row">
                    <?php foreach ($phapluat as $tinphapluat) { ?>
                        <?php $loaitin = layloaitin($tinphapluat['idLT']) ?>
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="index.php?page=tin&idLT=<?= $tinphapluat['idLT'] ?>&idTin=<?= $tinphapluat['idTin'] ?>">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="<?= $tinphapluat['urlHinh'] ?>" src="img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue"><?= $loaitin['Ten'] ?></a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>"><?= $tinphapluat['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tinphapluat['Ngay'] ?>
                                                
                                            </li>
                                            <li class="entry__meta-views">
                                                <i class="ui-eye"></i>
                                                <span><?= $tinphapluat['SoLanXem'] ?> lượt xem </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?= $tinphapluat['TomTat'] ?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>

                </div>
            </div> <!-- end pane 2 -->

            <!-- Tin thế giới -->
            <div class="tabs__content-pane" id="tab-world">
                <div class="row card-row">
                    <?php foreach ($thegioi as $tinthegioi) { ?>
                        <?php $loaitin = layloaitin($tinthegioi['idLT']) ?>
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="index.php?page=tin&idLT=<?= $tinthegioi['idLT'] ?>&idTin=<?= $tinthegioi['idTin'] ?>">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="<?= $tinthegioi['urlHinh'] ?>" src="img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue"><?= $loaitin['Ten'] ?></a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>"><?= $tinthegioi['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tinthegioi['Ngay'] ?>
                                            </li>
                                            <li class="entry__meta-views">
                                                <i class="ui-eye"></i>
                                                <span><?= $tinthegioi['SoLanXem'] ?> lượt xem </span>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?= $tinthegioi['TomTat'] ?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                </div>
            </div> <!-- end pane 3 -->

            <!-- Tin xã hội -->
            <div class="tabs__content-pane" id="tab-business">
                <div class="row card-row">
                    <?php foreach ($xahoi as $tinxahoi) { ?>
                        <?php $loaitin = layloaitin($tinxahoi['idLT']) ?>
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="index.php?page=tin&idLT=<?= $tinxahoi['idLT'] ?>&idTin=<?= $tinxahoi['idTin'] ?>">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="<?= $tinxahoi['urlHinh'] ?>" src="img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange"><?= $loaitin['Ten'] ?></a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>"><?= $tinxahoi['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tinxahoi['Ngay'] ?>
                                            </li>
                                            <li class="entry__meta-views">
                                                <i class="ui-eye"></i>
                                                <span><?= $tinxahoi['SoLanXem'] ?> lượt xem </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?= $tinxahoi['TomTat'] ?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                </div>
            </div> <!-- end pane 4 -->

            <!-- Tin giải trí -->
            <div class="tabs__content-pane" id="tab-fashion">
                <div class="row card-row">
                    <?php foreach ($dulich as $tindulich) { ?>
                        <?php $loaitin = layloaitin($tindulich['idLT']) ?>
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="index.php?page=tin&idLT=<?= $tindulich['idLT'] ?>&idTin=<?= $tindulich['idTin'] ?>">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="<?= $tindulich['urlHinh'] ?>" src="img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green"><?= $loaitin['Ten'] ?></a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>"><?= $tindulich['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tindulich['Ngay'] ?>
                                            </li>
                                            <li class="entry__meta-views">
                                                <i class="ui-eye"></i>
                                                <span><?= $tindulich['SoLanXem'] ?> lượt xem </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?= $tindulich['TomTat'] ?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>

                </div>
            </div> <!-- end pane 5 -->

        </div> <!-- end tab content -->
    </section> <!-- end latest news -->
</body>