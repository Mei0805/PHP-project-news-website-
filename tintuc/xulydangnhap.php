<?php
//tiếp nhận user, pass từ form
$username = $_POST['ten'];
$password = $_POST['mk'];

//validate dữ liệu tiếp nhận
$username = trim(strip_tags($username));
$password = trim(strip_tags($password));

//truy xuất db
require_once("connectdb.php");
$sql = "SELECT idUser, username,password FROM users WHERE username='{$username}' AND password ='{$password}'";
$kq = $conn->query($sql);
$numrows_user = $kq->rowCount();
if ($numrows_user == 1) { ?>
    <div class="m-auto">
        <div class="alert alert-success mt-5 text-center">
            <p>Đăng nhập thành công</p>
            <button class="btn btn-primary" onclick="history.back()">Trở lại</button>
            <button class="btn btn-alert"><a href="index.php">Trang chủ</a></button>
            <!--<?php
            //session_start();
            //$row_user = $kq->fetch();
            //$_SESSION['login_id'] = $row_user['idUser']; //tạo biến ghi nhận user đã login
            //$_SESSION['login_user'] = $row_user['username']; //tạo biến ghi nhận user đã login
            ?> -->
        </div>
    </div>
<?php } else { ?>
    <div class="m-auto">
        <div class="alert alert-danger mt-5 text-center">
            <p>Đăng nhập thất bại</p>
            <button class="btn btn-primary" onclick="history.back()">Trở lại</button>
            
        </div>
    </div>
<?php } ?>