<?php
    $idTL = $_GET['idTL'];
    settype($idTL, "int");
    $page_size = 5;
    $page_num = 1;
    if (isset($_GET['page_num'])) {
    $page_num = $_GET['page_num'] + 0;
    }
    if ($page_num < 0) $page_num = 1;
    $listTinTL = laytintrongTL($idTL, $page_num, $page_size);
    $loaitinTL = layTenTL($idTL);
?>

<body class="bg-light style-default style-rounded">
    <main class="main oh" id="main">
        <!-- Breadcrumbs -->
        <div class="container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="index.php">Trang chủ  </a>
                </li>
                <li class="breadcrumbs__item breadcrumbs__item--current">
                    <span><?= $loaitinTL['TenTL'] ?></span>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <!-- Posts -->
        <h1 class="page-title"><?= $loaitinTL['TenTL'] ?></h1>
        <div class="row card-row">
            <?php foreach ($listTinTL as $tin) { ?>
                <div class="col-md-6">
                    <article class="entry card">
                        <div class="entry__img-holder card__img-holder">
                            <a href="index.php?page=tin&idLT=<?=$tin['idLT']?>&idTin=<?=$tin['idTin']?>">
                                <div class="thumb-container thumb-70">
                                    <img data-src="<?= $tin['urlHinh'] ?>" src="img/empty.png" class="entry__img lazyload" alt="" />
                                </div>
                            </a>
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?= $loaitinTL['TenTL'] ?></a>
                        </div>

                        <div class="entry__body card__body">
                            <div class="entry__header">

                                <h2 class="entry__title">
                                    <a href="index.php?page=tin&idLT=<?=$tin['idLT']?>&idTin=<?=$tin['idTin']?>"><?= $tin['TieuDe'] ?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">TinMoi</a>
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
                                <p><?= $tin['Tomtat'] ?></p>
                                <div class="more" style="text-align: right;"><a  href="index.php?page=tin&idLT=<?=$tin['idLT']?>&idTin=<?=$tin['idTin']?>">Xem thêm</a></div>
                            </div>
                        </div>
                    </article>
                </div>
            <?php } ?>
        </div> <!-- end content -->
       

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main> <!-- end main-wrapper -->


</body>