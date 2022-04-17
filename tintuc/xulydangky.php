<?php
$username = $_POST['ten'];
$password = $_POST['mk'];
$email  = $_POST['email'];
$phai = $_POST['phai'];
$thongtin = $_POST['info'];

$username = trim(strip_tags($username));
$password = trim(strip_tags($password));
$email = trim(strip_tags($email));
$thongtin = trim(strip_tags($thongtin));
settype($phai, "int");

$loi = "";
if ($phai != 0 && $phai != 1) $loi .= "Chưa chọn giới tính <br>";
if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) $loi .= "Định dạng email không đúng";

if ($loi != "") { ?>
    <div class="m-auto">
        <div class="alert alert-danger mt-5 text-center">
            <?= $loi ?> <br>
            <button class="btn btn-primary" onclick="history.back()">Trở lại</button>
        </div>
    </div>

<?php } else {
    require_once 'connectdb.php';
    $sql = "INSERT INTO users (username,password,email,ngay,idGroup,gioiThieu) VALUES('$username','$password','$email',Now(),0,'$thongtin')";
    $kq = $conn->exec($sql);
    if ($kq == 1) {
        echo "<div class='alert alert-success mt-5 text-center'> Đăng ký thành công </div>";
    } else echo "Đăng ký không thành công";
}
?>