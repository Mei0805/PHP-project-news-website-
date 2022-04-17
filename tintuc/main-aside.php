<?php
$txn = tinXemNhieu();
?>

<body>
    <!-- Widget Popular Posts -->
    <aside class="widget widget-popular-posts">
        <h4 class="widget-title">Tin xem nhiều</h4>
        <ul class="post-list-small">
            <?php foreach ($txn as $tin) { ?>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-100">
                                <a href="index.php?page=tin&idLT=<?= $tin['idLT']?>&idTin=<?= $tin['idTin']?>">
                                    <img data-src="<?= $tin['urlHinh'] ?>" width="100" height="80" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="index.php?page=tin&idLT=<?= $tin['idLT']?>&idTin=<?= $tin['idTin']?>"><?= $tin['Tieude'] ?></a>
                            </h3>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">BaoMoi</a>
                                </li>
                                <li class="entry__meta-date">
                                    <?= $tin['Ngay'] ?>
                                </li>
                                <li>
                                    <span style="color:darkred;"><?= $tin['SoLanXem'] ?> lượt xem </span>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
            <?php } ?>
        </ul>
    </aside> <!-- end widget popular posts -->

    <!-- Widget Newsletter -->
    <aside class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">Theo dõi ngay</h4>
        <p class="newsletter__text">
            <i class="ui-email newsletter__icon"></i>
            Nhận thông báo khi có tin tức mới nhất từ B Á O M Ớ I
        </p>
        <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Nhập email..." required="">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-color" value="Theo dõi">
                </div>
            </div>
        </form>
    </aside> <!-- end widget newsletter -->

    <!-- Widget Socials -->
    <aside class="widget widget-socials">
        <h4 class="widget-title">Theo dõi chúng tôi trên mạng xã hội</h4>
        <div class="socials socials--wide socials--large">
            <div class="row row-16">
                <div class="col">
                    <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                        <span class="social__text">Facebook</span>
                    </a>
                    <!---->
                    <a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                        <i class="ui-youtube"></i>
                        <span class="social__text">Youtube</span>
                    </a>
                    <!---->
                    <a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                        <i class="ui-instagram"></i>
                        <span class="social__text">Instagram</span>
                    </a>
                </div>
                <div class="col">
                    <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                        <span class="social__text">Twitter</span>
                    </a>
                    <!---->
                    <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                        <span class="social__text">Google+</span>
                    </a>
                    <!---->
                    <a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                        <i class="ui-rss"></i>
                        <span class="social__text">Rss</span>
                    </a>
                </div>
            </div>
        </div>
    </aside> <!-- end widget socials -->
</body>