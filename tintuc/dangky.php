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

        h2 {
            padding: .5rem 2rem;

        }

        form {
            margin: .5rem auto;
            padding: 1rem 3rem;
            width: 80%;
        }

        .form-group {
            padding: .2rem 0;
        }

        .form-container {
            padding: 0 1.5rem;
        }

        .btn-group {
            display: inline-block;
            padding: .5rem 0;
        }

        .form-group input[type=text],
        .form-group input[type=password],
        .form-group input[type=email],
        textarea {
            width: 100%;
            line-height: 1rem;
        }

        input {
            margin: 0px;
            margin-top: 5px;
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
                <a href="index.php" class="breadcrumbs__url breadcrumbs__item--current">Đăng ký</a>
        </ul>
    </div>
    <form action="index.php?page=requestSignup" method="post">
        <h2>Đăng ký thành viên</h2>
        <div class="form-container">
            <div class="form-group">
                <label for="ten">Tên truy cập: </label> <br>
                <input type="text" name="ten" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="mk">Mật khẩu: </label> <br>
                <input type="password" name="mk" id="password" required>

            </div>

            <div class="form-group">
                <label for="mk">Nhập lại mật khẩu: </label> <br>
                <input type="password" id="confirm_password" required>
            </div>

            <div class="form-group">
                <label for="email">Nhập Email:</label> <br>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="gender">Giới tính: </label> <br>
                <input type="radio" name="phai" id="male" checked> <label for="male">Nam</label>
                <input type="radio" name="phai" id="female"> <label for="female">Nữ</label>
            </div>

            <div class="form-group">
                <label for="cv">Hình: </label> <br>
                <input style="background: none; border:none;" type="file" id="cv" name="cv" accept="image/png, image/jpeg">
            </div>

            <div class="form-group">
                <label for="info">Giới thiệu bản thân</label> <br>
                <textarea id="info" name="info" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" class="checkbox-input" name="nho" id="checkbox1" required>
                <label for="checkbox1">Tôi đồng ý với <a href="#">điều khoản</a> và điều kiện</label>
                <p>Bạn đã có tài khoản.<a href="index.php?page=dangnhap">Đăng nhập</a></p>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-sm btn-color">Đăng ký</button>
                <button style="background: darkgray;" type="reset" class="btn btn-sm btn-color">Làm lại</button>
            </div>
        </div>

    </form>

    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

</body>

</html>