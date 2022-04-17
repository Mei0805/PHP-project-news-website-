<?php
$theloai = layTheLoai();
?>

<body>

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row">

                <!-- Top menu -->

                <div class="col-lg-6">
                    <ul class="top-menu">
                        <li><a href="#">Liên hệ quảng cáo</a></li>
                        <li><a href="#">Hotline: 0121 456 789 - 0121 456789</a></li>
                        <li><a href="#">E-mail: baomoi@news.com</a></li>
                    </ul>
                </div>

                <div class="col-lg-5" style="text-align:right;">
                    <ul class="top-menu">
                        <li><a href="#">
                                <div id="chao">
                                    <?php
                                    $h = gmdate("H") + 7;
                                    if ($h >= 5 && $h <= 12) {
                                        echo "<span class='sang'>Chào buổi sáng! Bây giờ là <span>$h giờ</span>. Chúc một ngày tốt lành</span>";
                                    } else if ($h <= 18) {
                                        echo "<span class='chieu'>Bây giờ là <span>$h giờ</span> chiều! Chúc bạn vui vẻ</span>";
                                    } else if ($h <= 22) {
                                        echo "<span class='toi'>Chào buổi tối! Bây giờ là <span>$h giờ</span>! Chúc bạn vui vẻ</span>";
                                    } else {
                                        echo "<span class='khuya'>Bây giờ là <span>$h giờ</span> tối! Chúc bạn ngủ ngon</span>";
                                    }
                                    ?>
                                </div>
                            </a></li>
                            <li><a href="index.php?page=logout">Thoát</a></li>
                    </ul>
                </div>
                

                <!-- Socials -->
                <div class="col-lg-1">
                    <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                            <i class="ui-youtube"></i>
                        </a>
                        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end top bar -->

    <!-- Navigation -->
    <header class="nav">
        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">
                    <!-- Logo -->
                    <a href="index.php" class="logo">
                        <img class="logo__img" src="img/logo.png" width="130px" srcset="" alt="logo-bao-moi">
                    </a>

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">

                            <li class="active">
                                <a href="index.php">Trang chủ</a>
                            </li>
                            <?php foreach ($theloai as $tl) { ?>
                                <li class="nav__dropdown">
                                    <a href="index.php?page=tloai&idTL=<?= $tl['idTL'] ?>"><?= $tl['TenTL'] ?></a>
                                    <ul class="nav__dropdown-menu">
                                        <?php $loaitin = LoaiTin($tl['idTL']) ?>
                                        <?php foreach ($loaitin as $lt) { ?>
                                            <li><a href="index.php?page=loai&idLT=<?= $lt['idLT'] ?>"><?= $lt['Ten'] ?></a></li>
                                        <?php } ?>

                                    </ul>
                                </li>
                            <?php } ?>
                            <li class="nav__dropdown">
                            <li>
                                <a href="index.php?page=lienhe">Liên hệ</a>
                            </li>
                            <li>
                                <a href="index.php?page=gioithieu">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="index.php?page=dangnhap">Đăng ký/ Đăng nhập</a>
                            <li>



                        </ul> <!-- end menu -->
                    </nav> <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right">

                        <!-- Search -->
                        <div class="nav__right-item nav__search">
                            <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                <i class="ui-search nav__search-trigger-icon"></i>
                            </a>
                            <div class="nav__search-box" id="nav__search-box">
                                <form class="nav__search-form" action="index.php" method="get">
                                    <input type="hidden" name="page" value="search">
                                    <input type="text" name="tukhoa" placeholder="Nhập từ khóa..." class="nav__search-input">
                                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                        <i class="ui-search nav__search-icon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div> <!-- end nav right -->

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header>
    <!-- end navigation -->

    <header class="sidenav" id="sidenav">
        <!-- close -->
        <div class="sidenav__close">
            <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
                <i class="ui-close sidenav__close-icon"></i>
            </button>
        </div>

        <div class="socials sidenav__socials">
            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
            </a>
            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
            </a>
            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                <i class="ui-google"></i>
            </a>
            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
            </a>
            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
            </a>
        </div>
    </header>


</body>