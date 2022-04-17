<?php
session_start();
if (isset($_POST['btn'])) {
    $username = trim(strip_tags($_POST['ten']));
    $password = trim(strip_tags($_POST['mk']));

    require_once('functions.php');

    $sql = "SELECT idUser,username,idGroup FROM users WHERE username='{$username}'";
    $kq = $conn->query($sql);
    if ($kq->rowCount() == 0) {
        $_SESSION['thongbao'] = "Tên đăng nhập không tồn tại";
        header("Location: login.php");
        exit();
    }

    $sql = "SELECT idUser,username,idGroup FROM users WHERE username='{$username}' AND password='{$password}'";
    $kq = $conn->query($sql);
    if ($kq->rowCount() == 0) {
        $_SESSION['thongbao'] = "Mật khẩu không đúng!";
        header("Location: login.php");
        exit();
    }

    $row_user = $kq->fetch();
    $_SESSION['login_id'] = $row_user['idUser'];
    $_SESSION['login_user'] = $row_user['username'];
    $_SESSION['login_group'] = $row_user['idGroup'];
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        background: #f0f0f1;
        padding: 10rem;
    }

    .form-dang-nhap {
        width: 30%;
        background: white;
    }

    .form-group {
        margin: .5rem 0;
    }

    header img {
        width: 10%;
        object-fit: cover;
    }
    .backtohp{
        text-align: center;
        padding: 1rem 0;
        
    }
    .backtohp a{
        text-decoration: none;
    }
</style>

<body>
    <header class="row">

    </header>

    <form action="" method="post" class="form-dang-nhap border boder-primary col-5 m-auto p-2 ">
        <h2>Đăng nhập</h2>
        <hr>
        <div class="form-group">
            <label for="ten">Tên đăng nhập: </label>
            <input type="text" name="ten" class="form-control">
        </div>

        <div class="form-group">
            <label for="mk">Mật khẩu: </label>
            <input type="password" name="mk" class="form-control">
        </div>

        <div class="form-group">
            <input type="checkbox" class="checkbox-input" name="checknho">
            <label>Nhớ mật khẩu</label>

        </div>

        <div class="form-group">
            <input type="submit" name="btn" value="Đăng nhập" class="btn btn-primary">
        </div>


    </form>

    <div class="backtohp">
        <a href="../index.php"> &larr; Trở về trang chủ</a>
    </div>

</body>