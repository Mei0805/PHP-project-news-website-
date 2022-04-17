<?php
$idTin = $_GET['idTin'];
$idLT = $_GET['idLT'];
settype($idTin, "int");

tangSoLanXem($idTin);
$tin = layChiTietTin($idTin);
$tinlienquan = tintheoloaitin($idLT);
$loaitin = layLoaiTin($idLT);
$binhluan = layBinhLuan($idTin);
$dembinhluan = demBinhLuan($idTin);
?>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .content-box {
    margin-bottom: 2rem;
  }
</style>

<body class="bg-light single-post style-default style-rounded">

  <!-- Breadcrumbs -->
  <div class="container">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item">
        <a href="index.php" class="breadcrumbs__url">Trang chủ</a>
      </li>
      <li class="breadcrumbs__item breadcrumbs__item--current">
        <?= $loaitin['Ten'] ?>
      </li>
    </ul>
  </div>

  <div class="content-box">

    <!-- standard post -->
    <article class="entry mb-0">

      <div class="single-post__entry-header entry__header">
        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--blue"><?= $loaitin['Ten'] ?></a>
        <h1 class="single-post__entry-title"><?= $tin['TieuDe'] ?>
        </h1>

        <div class="entry__meta-holder">
          <ul class="entry__meta">
            <li class="entry__meta-author">
              <span>by</span>
              <a href="#">BaoMoi</a>
            </li>
            <li class="entry__meta-date">
              <?= $tin['Ngay'] ?>
            </li>
          </ul>

          <ul class="entry__meta">
            <li class="entry__meta-views">
              <i class="ui-eye"></i>
              <span><?= $tin['SoLanXem'] ?> lượt xem </span>
            </li>
            <li class="entry__meta-comments">
              <a href="#">
                <i class="ui-chat-empty"></i><?= $dembinhluan ?> bình luận
              </a>
            </li>
          </ul>
        </div>
      </div> <!-- end entry header -->

      <div class="entry__img-holder" style="margin: 0;">
        <img src="<?= $tin['urlHinh'] ?>" alt="" class="entry__img">
      </div>

      <div class="entry__article-wrap">

        <!-- Share -->
        <div class="entry__share">
          <div class="sticky-col">
            <div class="socials socials--rounded socials--large">
              <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
              </a>
              <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
              </a>
              <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                <i class="ui-google"></i>
              </a>
              <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
                <i class="ui-pinterest"></i>
              </a>
            </div>
          </div>
        </div> <!-- share -->

        <div class="entry__article">
          <?= $tin['Content'] ?>

          <!-- tags -->
          <div class="entry__tags">
            <i class="ui-tags"></i>
            <span class="entry__tags-label">Từ khóa:</span>
            <a href="#" rel="tag"><?= $tin['tags'] ?></a>
          </div> <!-- end tags -->

        </div> <!-- end entry article -->
      </div> <!-- end entry article wrap -->


      <!-- Newsletter Wide -->
      <div class="newsletter-wide">
        <div class="widget widget_mc4wp_form_widget">
          <div class="newsletter-wide__container">
            <div class="newsletter-wide__text-holder">
              <p class="newsletter-wide__text">
                <i class="ui-email newsletter__icon"></i>
                Nhận thông báo khi có tin tức mới nhất từ B Á O M Ớ I
              </p>
            </div>
            <div class="newsletter-wide__form">
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
            </div>
          </div>
        </div>
      </div> <!-- end newsletter wide -->

      <!-- Prev / Next Post -->
      <nav class="entry-navigation">
        <div class="clearfix">
          <div class="entry-navigation--left">
            <i class="ui-arrow-left"></i>
            <span class="entry-navigation__label">Trang trước</span>
            <div class="entry-navigation__link">
              <a href="#" rel="next">Tối 26-7: Thêm 5.174 ca COVID-19, có 2.006 bệnh nhân khỏi bệnh</a>
            </div>
          </div>
          <div class="entry-navigation--right">
            <span class="entry-navigation__label">Trang tiếp</span>
            <i class="ui-arrow-right"></i>
            <div class="entry-navigation__link">
              <a href="#" rel="prev">Hà Nội cấm shipper công nghệ giao hàng và chở khách, Grab phản ứng</a>
            </div>
          </div>
        </div>
      </nav>

      <!-- Related Posts -->
      <section class="section related-posts mt-40 mb-0">
        <div class="title-wrap title-wrap--line title-wrap--pr">
          <h3 class="section-title">Tin liên quan</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
          <?php foreach ($tinlienquan as $tin) { ?>
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= $tin['urlHinh'] ?>');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                  <h2 class="thumb-entry-title">
                    <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>"><?= $tin['Tieude'] ?></a>
                  </h2>
                </div>
                <a href="index.php?page=tin&idLT=<?= $tin['idLT'] ?>&idTin=<?= $tin['idTin'] ?>" class="thumb-url"></a>
              </div>
            </article>
          <?php } ?>
        </div> <!-- end slider -->

      </section> <!-- end related posts -->

    </article> <!-- end standard post -->

    <!-- Comments -->
    <div class="entry-comments">
      <div class="title-wrap title-wrap--line">
        <h3 class="section-title"><?= $dembinhluan ?> bình luận</h3>
      </div>
      <ul class="comment-list">
        <?php foreach ($binhluan as $cmt) { ?>
          <li class="comment">
            <div class="comment-body">
              <div class="comment-avatar">
                <img alt="" src="img/content/single/account.png">
              </div>
              <div class="comment-text">
                <h6 class="comment-author"><?= $cmt['HoTen'] ?></h6>
                <div class="comment-metadata">
                  <a href="#" class="comment-date"><?= $cmt['Ngay'] ?></a>
                </div>
                <p><?= $cmt['NoiDung'] ?></p>
                <a href="#" class="comment-Trả lời">Trả lời</a>
              </div>
            </div>

          </li> <!-- end 1-2 comment -->
        <?php } ?>


      </ul>
    </div> <!-- end comments -->

    <!-- Comment Form -->
    <div id="respond" class="comment-respond">
      <div class="title-wrap">
        <h5 class="comment-respond__title section-title">Hãy để lại bình luận</h5>
      </div>
      <form id="form" class="comment-form" method="post" action="#">
        <p class="comment-form-comment">
          <label for="comment">Bình luận</label>
          <textarea id="comment" name="comment" rows="5" required="required"></textarea>
        </p>

        <div class="row row-20">
          <div class="col-lg-4">
            <label for="name">Tên: *</label>
            <input name="name" id="name" type="text">
          </div>
          <div class="col-lg-4">
            <label for="comment">Email: *</label>
            <input name="email" id="email" type="email">
          </div>
        </div>

        <p class="comment-form-submit">
          <input type="submit" class="btn btn-lg btn-color btn-button" value="Đăng bình luận" id="submit-message">
        </p>

      </form>
    </div> <!-- end comment form -->

  </div> <!-- end content box -->

  <div id="back-to-top">
    <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
  </div>

</body>