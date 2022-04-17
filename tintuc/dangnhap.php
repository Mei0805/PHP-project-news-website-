<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .form-dang-nhap {
            margin: 0 auto;
            padding: 1rem 3rem;
            width: 50%;
        }

        .form-group {
            margin: .5rem 0;
        }
    </style>
</head>

<body>
    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url">Trang chủ</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url breadcrumbs__item--current">Đăng nhập</a>
        </ul>
    </div>
    <form class="form-dang-nhap" action="index.php?page=requestLogin" method="post">
        <h2>Đăng nhập</h2>
        <div class="form-group">
            <label for="ten">Tên đăng nhập: </label>
            <input type="text" name="ten" class="form-control">
        </div>

        <div class="form-group">
            <label for="mk">Mật khẩu: </label>
            <input type="password" name="mk" class="form-control">
        </div>

        <div class="form-group">
            <input type="checkbox" class="checkbox-input" name="checknho" id="checkbox1" value="1" checked="checked">
            <label for="checkbox1">Nhớ mật khẩu</label>
            <p>Bạn chưa có tài khoản? <a href="index.php?page=dangky">Đăng ký ngay</a></p>
            <a href="index.php?page=forgotPassword">Quên mật khẩu</a>
        </div>

        <div class="form-group">
            <button class="btn btn-sm btn-color">Đăng nhập</button>
            
        </div>


    </form>

</body>

</html>