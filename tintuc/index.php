<?php
$page = '';
if (isset($_GET['page']) == true) $page = $_GET['page'];
require_once 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <title>Tin tức, tin nóng trong ngày | Báo mới</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="js/lazysizes.min.js"></script>
  

</head>

<body class="bg-light style-default style-rounded">

  <!-- Preloader -->
  <!--<div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>-->

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <main class="main oh" id="main">

    <!-- Thanh thông tin & Điều hướng-->
    <?php require_once 'header.php' ?>

    <!-- Thanh Tin mới nhất -->
    <?php require_once 'tin-moi-nhat-bar.php' ?>

    <!-- Tin nổi bật -->
    <?php if ($page == "") require_once 'tin-noi-bat-section.php' ?>
    <!-- end featured posts grid -->

    <!--Main-->
    <div class="main-container container pt-24" id="main-container">
      <?php require_once 'main.php' ?>
    </div>
    <!-- end main container -->

    <!-- Footer -->
    <?php require_once 'footer.php' ?>
    <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  <!-- jQuery Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/owl-carousel.min.js"></script>
  <script src="js/flickity.pkgd.min.js"></script>
  <script src="js/twitterFetcher_min.js"></script>
  <script src="js/jquery.newsTicker.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>