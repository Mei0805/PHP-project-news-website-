<?php
$idTL= $_GET['idTL'];
settype($idTL,"int");
$theloai= layChiTietTheLoai($idTL);

if (isset($_POST['btn'])){
    
    $tenTL = $_POST['tenTL'];
    $thuTu = $_POST['thuTu'];
    $anHien = $_POST['anHien'];
    $lang = $_POST['lang'];

    $tenTL= trim(strip_tags($tenTL));
    $lang = trim(strip_tags($lang));
    settype($thuTu,"int");
    settype($anHien,"int");

    $kq=updateTheLoai($idTL,$tenTL,$thuTu,$anHien,$lang);
    if($kq){
        header("Location: index.php?page=theloai_ds");
        exit();
    }
}

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">


<h4 class="col-10 m-auto p-2 text-center">SỬA THỂ LOẠI</h4>
<form action="" method="post" class="border boder-primary col-10 m-auto p-2">
    <div class="form-group">
        <label for="">Tên Thể loại</label>
        <input type="text" name="tenTL" value="<?=$theloai['TenTL']?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Thứ tự</label>
        <input type="number" name="thuTu" value="<?=$theloai['ThuTu']?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Ẩn hiện:</label> 
        <input type="radio" name="anHien" <?php if($theloai['AnHien']==0) echo 'checked' ?> value="0"> Ẩn
        <input type="radio" name="anHien" <?php if($theloai['AnHien']==1) echo 'checked' ?> value="1"> Hiện
    </div>
    <div class="form-group">
        <label for="">Ngôn ngữ: </label> 
        <input type="radio" name="lang" <?php if($theloai['lang']=='vi') echo 'checked'?> value="vi" > Tiếng Việt
        <input type="radio" name="lang" <?php if($theloai['lang']=='en') echo 'checked'?> value="en" > Tiếng Anh
    </div>
    <div class="form-group">
            <input type="submit" name="btn" value="Chỉnh sửa" class="btn btn-primary">
        </div>
</form>
