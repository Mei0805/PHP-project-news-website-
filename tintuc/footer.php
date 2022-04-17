
<body>
    <footer class="footer footer--dark">
        <div class="container">
            <div class="footer__widgets">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget-logo">
                            <a href="index.html">
                                <img src="img/logo-2x.png" width="200px" srcset="" class="logo__img" alt="">
                            </a>
                            <p class="copyright">
                                © Bản quyền thuộc về <a href="#">Báo Mới</a>
                            </p>
                            <div class="socials socials--large socials--rounded mb-24">
                                <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <aside class="widget widget_nav_menu">
                        <?php $theloai = layTheLoai();?>
                            <h4 class="widget-title">Tin tức</h4>
                            <ul>
                                <?php foreach($theloai as $tl) {?>
                                <li><a href="index.php?"><?= $tl['TenTL']?></a></li>
                                <?php } ?>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <aside class="widget widget-popular-posts">
                            <h4 class="widget-title">Tin nổi bật</h4>
                            <ul class="post-list-small">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-100">
                                                <a href="single-post.php">
                                                    <img data-src="img/content/post_small/sieu-thi-dong-cua.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.php">Siêu thị ở TP.HCM sẽ đóng cửa trước 17h</a>
                                            </h3>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">BAOMOI</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    26/7/2021
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-100">
                                                <a href="single-post.php">
                                                    <img data-src="img/content/post_small/khu-khuan-ha-noi.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.php">Hà Nội đang phun khử khuẩn diện rộng</a>
                                            </h3>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">BAOMOI</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    26/7/2021
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_mc4wp_form_widget">
                            <h4 class="widget-title">Nhận thông báo</h4>
                            <p class="newsletter__text">
                                <i class="ui-email newsletter__icon"></i>
                                Đăng ký ngay để nhận những thông báo mới nhất của chúng tôi!
                            </p>
                            <form class="mc4wp-form" method="post">
                                <div class="mc4wp-form-fields">
                                    <div class="form-group">
                                        <input type="email" name="EMAIL" placeholder="Nhập email..." required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-color" value="Theo dõi">
                                    </div>
                                </div>
                            </form>
                        </aside>
                    </div>

                </div>
            </div>
        </div> <!-- end container -->
    </footer>
</body>