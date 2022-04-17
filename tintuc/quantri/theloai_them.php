<?php
if (isset($_POST['btn'])){
    
    $tenTL = $_POST['tenTL'];
    $thuTu = $_POST['thuTu'];
    $anHien = $_POST['anHien'];
    $lang = $_POST['lang'];

    $tenTL= trim(strip_tags($tenTL));
    $lang = trim(strip_tags($lang));
    settype($thuTu,"int");
    settype($anHien,"int");

    $kq=themTheLoai($tenTL,$thuTu,$anHien,$lang);
    if($kq){
        header("Location: index.php?page=theloai_ds");
        exit();
    }
}

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">


<h4 class="col-10 m-auto p-2 text-center">THÊM THỂ LOẠI</h4>
<form action="" method="post" class="border boder-primary col-10 m-auto p-2">
    <div class="form-group">
        <label for="">Tên Thể loại</label> <input type="text" name="tenTL" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Thứ tự</label> <input type="number" name="thuTu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Ẩn hiện:</label> 
        <input type="radio" name="anHien" value="0"> Ẩn
        <input type="radio" name="anHien" value="1" checked> Hiện
    </div>
    <div class="form-group">
        <label for="">Ngôn ngữ: </label> 
        <input type="radio" name="lang" value="vi" checked> Tiếng Việt
        <input type="radio" name="lang" value="en" checked> Tiếng Anh
    </div>
    <div class="form-group">
            <input type="submit" name="btn" value="Thêm" class="btn btn-primary">
        </div>
</form>
