<body>
    <!-- Content -->
    <div class="row">
        <!-- Posts -->
        <div class="col-lg-8 blog__content">
            <!--Main section-->

            <?php
            switch ($page) {
                case "gioithieu":
                    require_once 'gioithieu.php';
                    break;
                case "lienhe":
                    require_once 'lienhe.php';
                    break;
                case "dangnhap":
                    require_once 'dangnhap.php';
                    break;
                case "dangky":
                    require_once 'dangky.php';
                    break;
                case "dkthanhcong":
                    require_once 'signup-sucess.php';
                    break;
                case "login":
                    require_once 'login.php';
                    break;
                case "thoi-su":
                    require_once 'loai-thoisu.php';
                    break;
                case "cong-nghe":
                    require_once 'loai-congnghe.php';
                    break;
                case "van-hoa":
                    require_once 'loai-vanhoa.php';
                    break;
                case "giai-tri":
                    require_once 'loai-giaitri.php';
                    break;
                case "tin":
                    require_once 'chitiettin.php';
                    break;
                case "loai":
                    require_once 'tintrongloai.php';
                    break;
                case "tloai":
                    require_once 'tintrongtheloai.php';
                    break;
                case "search":
                    require_once 'ketquatimkiem.php';
                    break;
                case "requestSignup":
                    require_once 'xulydangky.php';
                    break;
                case "requestLogin":
                    require_once 'xulydangnhap.php';
                    break;
                case "forgotPassword":
                    require_once 'forgotpass.php';
                    break;
                default:
                    require_once 'main-left.php';
                    break;
            }
            ?>
        </div> <!-- end posts -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">
            <?php require_once 'main-aside.php' ?>
        </aside> <!-- end sidebar -->
    </div> <!-- end content -->

    <!-- Ad Banner 728 -->
    <div class="text-center pb-48">
        <a href="#">
            <img src="img/content/placeholder_728.jpg" alt="">
        </a>
    </div>

    <!-- Carousel posts -->
    <section class="section mb-0">
        <div class="title-wrap title-wrap--line title-wrap--pr">
            <h3 class="section-title">Sức khỏe</h3>
            <?php $suckhoe = tintheoloaitin(79) ?>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
            <?php foreach ($suckhoe as $tinsuckhoe) { ?>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= $tinsuckhoe['urlHinh'] ?>');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="index.php?page=tin&idLT=<?= $tinsuckhoe['idLT'] ?>&idTin=<?= $tinsuckhoe['idTin'] ?>"><?= $tinsuckhoe['Tieude'] ?></a>
                            </h2>
                        </div>
                        <a href="index.php?page=tin&idLT=<?= $tinsuckhoe['idLT'] ?>&idTin=<?= $tinsuckhoe['idTin'] ?>" class="thumb-url"></a>
                    </div>
                </article>
            <?php } ?>
        </div> <!-- end slider -->

    </section> <!-- end carousel posts -->


    <!-- Posts from categories -->
    <section class="section mb-0">
        <div class="row">

            <!-- Technology -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">Công nghệ</h3>
                </div>
                <div class="row">
                    <?php $congnghe = tintheovung(80);
                    $noibatcongnghe = tinNoiBattheovung(80); ?>
                    <?php foreach ($noibatcongnghe as $tinnoibat) { ?>
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= $tinnoibat['urlHinh'] ?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>"><?= $tinnoibat['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date"> <?= $tinnoibat['Ngay'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <?php foreach ($congnghe as $tincongnghe) { ?>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="index.php?page=tin&idLT=<?= $tincongnghe['idLT'] ?>&idTin=<?= $tincongnghe['idTin'] ?>"><?= $tincongnghe['Tieude'] ?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div> <!-- end technology -->

            <!-- Giaó dục -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">Giáo dục</h3>
                </div>
                <div class="row">
                    <?php $giaoduc = tintheovung(78);
                    $noibatgiaoduc = tinNoiBattheovung(78); ?>
                    <?php foreach ($noibatgiaoduc as $tinnoibat) { ?>
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= $tinnoibat['urlHinh'] ?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>"><?= $tinnoibat['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tinnoibat['Ngay'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <?php foreach ($giaoduc as $tingiaoduc) { ?>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="index.php?page=tin&idLT=<?= $tingiaoduc['idLT'] ?>&idTin=<?= $tingiaoduc['idTin'] ?>p"><?= $tingiaoduc['Tieude'] ?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div> <!-- Du lịch -->

            <!-- Kinh doanh -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">Kinh doanh- Tài chính</h3>
                </div>
                <div class="row">
                    <?php $kinhdoanh = tintheovung(11);
                    $noibatkinhdoanh = tinNoiBattheovung(11); ?>
                    <?php foreach ($noibatkinhdoanh as $tinnoibat) { ?>
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= $tinnoibat['urlHinh'] ?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>"><?= $tinnoibat['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tinnoibat['Ngay'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <?php foreach ($kinhdoanh as $tinkinhdoanh) { ?>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="index.php?page=tin&idLT=<?= $tinkinhdoanh['idLT'] ?>&idTin=<?= $tinkinhdoanh['idTin'] ?>"><?= $tinkinhdoanh['Tieude'] ?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div> <!-- end Kinh doanh -->

            <!-- Thể thao -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">Thể thao</h3>
                </div>
                <div class="row">
                    <?php $thethao = tintheovung(1);
                    $noibatthethao = tinNoiBattheovung(1); ?>
                    <?php foreach ($noibatthethao as $tinnoibat) { ?>
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= $tinnoibat['urlHinh'] ?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>"><?= $tinnoibat['Tieude'] ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">BaoMoi</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?= $tinnoibat['Ngay'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="index.php?page=tin&idLT=<?= $tinnoibat['idLT'] ?>&idTin=<?= $tinnoibat['idTin'] ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <?php foreach ($thethao as $tinthethao) { ?>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="index.php?page=tin&idLT=<?= $tinthethao['idLT'] ?>&idTin=<?= $tinthethao['idTin'] ?>"><?= $tinthethao['Tieude'] ?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div> <!-- end Thể thao -->

        </div>
    </section> <!-- end posts from categories -->

    <!-- Video posts -->
    <!--
    <section class="section mb-24">
        <div class="title-wrap title-wrap--line">
            <h3 class="section-title">Videos</h3>
            <a href="#" class="all-posts-url">Xem thêm</a>
        </div>
        <div class="row card-row">
            <div class="col-md-6">
                <article class="entry card">
                    <div class="entry__img-holder card__img-holder">
                        <a href="single-post.php">
                            <div class="thumb-container thumb-65">
                                <img data-src="img/content/grid/ban-tin-nong.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                            </div>
                        </a>
                        <div class="entry__play-time"><i class="ui-play"></i>3:21</div>
                    </div>

                    <div class="entry__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.php">Bản tin 30s Nóng: Shipper cũng có thể phải quay đầu xe hoặc bị phạt; Xét nghiệm lưu động cho tài xế</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">BaoMoi</a>
                                </li>
                                <li class="entry__meta-date">
                                    25/7/2021
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>TTO - Bản tin 30s Nóng 25-7: Shipper cũng có thể phải quay đầu xe hoặc bị phạt; Xét nghiệm lưu động cho tài xế; Người được xác nhận tiêm chủng sẽ có mã QR để cấp hộ chiếu vắc xin; Dòng người kéo dài cả cây số đi xuyên đêm về Tây Nguyên…</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6">
                <article class="entry card">
                    <div class="entry__img-holder card__img-holder">
                        <a href="single-post.php">
                            <div class="thumb-container thumb-65">
                                <img data-src="img/content/grid/chuyen-tau-ha-tinh.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                            </div>
                        </a>
                        <div class="entry__play-time"><i class="ui-play"></i>3:21</div>
                    </div>

                    <div class="entry__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.php">Video: Trên chuyến tàu đặc biệt đưa hàng trăm người dân Hà Tĩnh về quê</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">BaoMoi</a>
                                </li>
                                <li class="entry__meta-date">
                                    25/7/2021
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>TTO - Tối 24-7, chuyến tàu mang số hiệu SE14 đã xuất phát tại ga Sài Gòn chở theo hàng trăm hành khách đặc biệt. Họ là những người dân Hà Tĩnh bị kẹt lại TP.HCM do dịch bệnh COVID-19.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>-->
    <!-- end video posts -->


    <!-- Content Secondary -->
    <div class="row">
        <?php $tinmoi = tinNoiBat() ?>
        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">

            <!-- Worldwide News -->
            <section class="section">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">TIN 24H</h3>
                    <a href="#" class="all-posts-url">Xem thêm</a>
                </div>

                <?php foreach ($tinmoi as $tin) { ?>
                    <?php $loaitin = layloaitin($tin['idLT']) ?>
                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url('<?= $tin['urlHinh'] ?>')">
                            <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>" class="thumb-url"></a>
                            <img src="<?= $tin['urlHinh'] ?>" alt="" class="entry__img d-none">
                            <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php switch ($loaitin['Ten']) {
                                                                                                                                                                                case 'Xã hội':
                                                                                                                                                                                    echo 'blue';
                                                                                                                                                                                    break;
                                                                                                                                                                                case 'Pháp luật':
                                                                                                                                                                                    echo 'red';
                                                                                                                                                                                    break;
                                                                                                                                                                                case 'Thế giới':
                                                                                                                                                                                    echo 'blue';
                                                                                                                                                                                    break;
                                                                                                                                                                                case 'Chia sẻ':
                                                                                                                                                                                    echo 'orange';
                                                                                                                                                                                    break;
                                                                                                                                                                                case 'Du lịch':
                                                                                                                                                                                    echo 'green';
                                                                                                                                                                                    break;
                                                                                                                                                                                case 'Mẹo vặt':
                                                                                                                                                                                    echo 'green';
                                                                                                                                                                                    break;
                                                                                                                                                                                case 'Sống đẹp':
                                                                                                                                                                                    echo 'orange';
                                                                                                                                                                                    break;
                                                                                                                                                                                default:
                                                                                                                                                                                    echo 'violet';
                                                                                                                                                                                    break;
                                                                                                                                                                            }
                                                                                                                                                                            ?>"> <?= $loaitin['Ten'] ?></a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="index.php?page=tin&idTin=<?= $tin['idTin'] ?>"><?= $tin['Tieude'] ?></a>
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
                <?php } ?>

            </section> <!-- end worldwide news -->

            <!-- Pagination -->
            <nav class="pagination">
                <span class="pagination__page pagination__page--current">1</span>
                <a href="#" class="pagination__page">2</a>
                <a href="#" class="pagination__page">3</a>
                <a href="#" class="pagination__page">4</a>
                <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
            </nav>

        </div> <!-- end posts -->

        <!-- Sidebar 1 -->
        <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">
            <!-- Widget Ad 300 -->
            <aside class="widget widget_media_image">
                <a href="#">
                    <img src="img/content/placeholder_336.jpg" alt="">
                </a>
            </aside> <!-- end widget ad 300 -->

            <!-- Widget Categories -->
            <?php $theloai = layTheLoai(); ?>

            <aside class="widget widget_categories">
                <h4 class="widget-title">Thể loại tin</h4>
                <ul>
                    <?php foreach ($theloai as $tl) { ?>
                        <li><a href="index.php?page=tloai&idTL=<?= $tl['idTL'] ?>"><?= $tl['TenTL'] ?> <span class="categories-count"><?= demTintrongTheLoai($tl['idTL']) ?></span></a></li>
                    <?php } ?>
                </ul>
            </aside>

            <!-- end widget categories -->

            <!-- Widget Recommended (Rating) -->
            <aside class="widget widget-rating-posts">
                <h4 class="widget-title">Mẹo vặt</h4>
                <?php $meovat = tintheovung(24); ?>
                <?php foreach ($meovat as $tin) { ?>
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>">
                                <div class="thumb-container thumb-60">
                                    <img data-src="<?= $tin['urlHinh'] ?>" src="img/empty.png" class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="index.php?page=tin&idTin=<?= $tin['idTin'] ?>"><?= $tin['Tieude'] ?></a>
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
                        </div>
                    </article>
                <?php } ?>
            </aside> <!-- end widget recommended (rating) -->
        </aside> <!-- end sidebar 1 -->
    </div> <!-- content secondary -->

</body>