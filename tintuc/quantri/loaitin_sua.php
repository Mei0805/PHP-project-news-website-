<?php
$idLT= $_GET['idLT'];
settype($idLT,"int");
$loaitin= layChiTietLoaiTin($idLT);

if (isset($_POST['btn'])){
    $Ten = $_POST['Ten'];
    $thuTu = $_POST['thuTu'];
    $anHien = $_POST['anHien'];
    $lang = $_POST['lang'];
    $idTL = $_POST['idTL'];

    $Ten= trim(strip_tags($Ten));
    $lang = trim(strip_tags($lang));
    settype($thuTu,"int");
    settype($anHien,"int");
    settype($idTL,"int");

    $kq=updateLoaiTin($idLT,$Ten,$thuTu,$anHien,$lang,$idTL);
    if($kq){
        header("Location: index.php?page=loaitin_ds");
        exit();
    }
}

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<h4 class="col-10 m-auto p-2 text-center">CHỈNH SỬA LOẠI TIN</h4>
<form action="" method="post" class="border boder-primary col-10 m-auto p-2">
    <div class="form-group">
        <label for="">Tên loại tin</label> <input value="<?=$loaitin['Ten']?>" type="text" name="Ten" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Thứ tự</label> <input value="<?=$loaitin['ThuTu']?>" type="number" name="thuTu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Ẩn hiện:</label>
        <input type="radio" name="anHien" <?php if($loaitin['AnHien']==0) echo 'checked' ?> value="0"  > Ẩn
        <input type="radio" name="anHien" <?php if($loaitin['AnHien']==1) echo 'checked' ?> value="1" >Hiện
    </div>
    <div class="form-group">
        <label for="">Ngôn ngữ: </label>
        <input type="radio" name="lang" <?php if($loaitin['lang']=='vi') echo 'checked'?> value="vi" > Tiếng Việt
        <input type="radio" name="lang" <?php if($loaitin['lang']=='en') echo 'checked'?> value="en" > Tiếng Anh
    </div>
    <div class="form-group">
        <label>Thể loại: </label>
        <?php $listTheLoai = laydsTheLoai(); ?>
        <select name="idTL" class="form-control">
            <option value="0">Chọn thể loại</option>
            <?php foreach ($listTheLoai as $row) { ?>
                <option value="<?= $row['idTL'] ?>" <?php if($row['idTL'] == $loaitin['idTL']) echo "selected" ?> > <?= $row['TenTL']?> </option>';
            
            <?php }?> 
        </select> 
    </div>

    <div class="form-group">
        <input type="submit" name="btn" value="Chỉnh sửa" class="btn btn-primary">
    </div>
</form>
