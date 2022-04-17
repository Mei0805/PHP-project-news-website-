<?php
session_start();
require_once 'functions.php';
if (isset($_GET['page']))
    $page = trim(strip_tags($_GET['page']));
else $page = "";

if (isset($_SESSION['login_id']) == false) {
    $_SESSION['thongbao'] = "Bạn chưa đăng nhập";
    header("Location: login.php");
    exit();
}

if ($_SESSION['login_group'] != 1) {
    $_SESSION['thongbao'] = "Bạn không phải admin";
    header("Location: login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị tin tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        header.row {
            height: 50px;
        }

        .noidung>aside,
        .noidung>main {
            min-height: 100vh;
            padding-top: 2rem;
        }

        aside {

            padding-top: 5rem;
            padding-left: .5rem;

        }

        aside a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <header class="row bg-dark border text-white p-auto">
        <a style="text-decoration:none" href="index.php">
            <h3 style="padding-left: 1rem; padding-top:.5rem"> Quản trị admin</h3>
        </a>
        <a href="./index.php">
            <p>Đi đến Trang chủ</p>
        </a>
    </header>

    <div class="row noidung ">
        <aside class="col-2 bg-dark text-white ">
            <ul class="col-12 list-group">
                <li class="list-group-item"><a href="index.php?page=theloai_ds">Danh sách thể loại</a></li>
                <li class="list-group-item"><a href="index.php?page=loaitin_ds">Danh sách loại tin</a></li>
                <li class="list-group-item"><a href="index.php?page=user_ds">Danh sách người dùng</a></li>
                <li class="list-group-item"><a href="index.php?page=theloai_them">Thêm thể loại</a></li>
                <li class="list-group-item"><a href="index.php?page=loaitin_them">Thêm loại tin</a></li>
                <li class="list-group-item"><a href="index.php?page=binhluan_ds">Bình luận</a></li>
                <li class="list-group-item"><a href="index.php?page=hinhanh_ds">Hình ảnh bài viết</a></li>
                <li class="list-group-item"><a href="#">Vai trò trên trang</a></li>
                <li class="list-group-item"><a href="#">Marketing</a></li>
                <li class="list-group-item"><a href="#">Giao diện</a></li>
                <li class="list-group-item"><a href="#">Cài đặt</a></li>
                <li class="list-group-item"><a href="logout.php">Thoát</a></li>
            </ul>
        </aside>

        <main class="col-10 border">
            <?php
            switch ($page) {
                case "theloai_ds":
                    require_once 'theloai_ds.php';
                    break;
                case "theloai_them":
                    require_once 'theloai_them.php';
                    break;
                case "theloai_sua":
                    require_once 'theloai_sua.php';
                    break;
                case "loaitin_ds":
                    require_once 'loaitin_ds.php';
                    break;
                case "loaitin_them":
                    require_once 'loaitin_them.php';
                    break;
                case "loaitin_sua":
                    require_once 'loaitin_sua.php';
                    break;
                case "user_ds":
                    require_once 'user_ds.php';
                    break;
                case "binhluan_ds":
                    require_once 'comment_ds.php';
                    break;
                case "loai":
                    require_once 'tintrongloai_ds.php';
                    break;
                case "tin":
                    require_once 'tin.php';
                    break;
                case "hinhanh_ds":
                    require_once 'hinhanhtin.php';
                    break;
                default:
                    require_once 'hinhanhtin.php';
                    break;
            }
            ?>
        </main>

    </div>


</body>

</html>