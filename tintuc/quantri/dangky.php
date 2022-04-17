<?php
if (isset($_POST['btn'])) {
    $username= $_POST['ten'];
    $password= $_POST['mk'];
    $email  = $_POST['mail'];
     
    $idGroup=0;

    $username = trim(strip_tags($username));
    $password = trim(strip_tags($password));
    $email = trim(strip_tags($email));
    settype($idGroup,"int");
    require_once('functions.php');

    $kq = themUsers($username, $password, $email, $idGroup,);

    if ($kq) {
        header("Location: index.php");
        exit();
    }
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
        padding: 1rem;
    }

    .form-dang-nhap {
        width: 50%;
    }

    .form-group {
        margin: .5rem 0;
    }
</style>

<body>
    <header class="row bg-info">
        
    </header>
    <!-- Breadcrumbs -->
    <!--
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url">Trang chủ</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url breadcrumbs__item--current">Đăng nhập</a>
        </ul>
    </div>
    -->
    <form action="" method="post" class="form-dang-nhap border boder-primary col5 m-auto p-2">
        <h2>Đăng ký</h2>
        <div class="form-group">
            <label for="ten">Tên đăng nhập: </label> <input type="text" name="ten" class="form-control">
        </div>

        <div class="form-group">
            <label for="mk">Mật khẩu: </label> <input type="password" name="mk" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email: </label> <input type="email" name="mail" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="btn" value="Đăng ký" class="btn btn-primary">
        </div>


    </form>

</body>