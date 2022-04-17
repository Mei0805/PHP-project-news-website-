<?php
$host = 'localhost';
$dbname = 'php1_news';
$userdb = 'root';
$passdb = '';
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $userdb, $passdb);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

<?php
//LOẠI TIN
function laydsLoaiTin()
{
    $sql = "SELECT idLT,Ten, ThuTu, AnHien, lang,idTL FROM loaitin ORDER BY idLT";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function layTenLT($id){
    $sql = "SELECT idLT,Ten FROM loaitin WHERE idLT=$id";
    global $conn;
    $kq = $conn->query($sql);
    return $kq->fetch();
}


function themLoaiTin($Ten, $thuTu, $anHien, $lang, $idTL)
{
    $sql = "INSERT INTO loaitin (Ten, thuTu, anHien, lang, idTL) VALUES('{$Ten}','{$thuTu}','{$anHien}','{$lang}','{$idTL}')";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}

function xoaLoaiTin($idLT){
    $sql="DELETE FROM loaitin WHERE idLT=$idLT";
    global $conn;
    $kq= $conn->exec($sql);
}

function layChiTietLoaiTin($idLT){
    $sql= "SELECT idLT,Ten,ThuTu,AnHien,lang, idTL FROM loaitin WHERE idLT=$idLT";
    global $conn;
    $kq= $conn->query($sql);
    if($kq==null) return false;
    else return $kq->fetch();
}
  

function updateLoaiTin($idLT,$Ten,$thuTu,$anHien,$lang,$idTL){
    $sql="UPDATE loaitin SET Ten='{$Ten}',thuTu=$thuTu,anHien=$anHien, lang='{$lang}', idTL=$idTL 
            WHERE idLT=$idLT";
    global $conn;
    $kq= $conn->exec($sql);
    return $kq==1;
}

//THỂ LOẠI

function getTenTL($idTL=0){
    global $conn;
    $kq= $conn->query("SELECT TenTL,idTL FROM theloai WHERE idTL=$idTL");
    if($kq==null) return "None";
    $row = $kq->fetch(PDO::FETCH_ASSOC);
    return $row['TenTL'];
}

function laydsTheLoai()
{
    $sql = "SELECT idTL,TenTL, ThuTu, AnHien, lang FROM theloai ORDER BY idTL";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function themTheLoai($tenTL, $thuTu, $anHien, $lang)
{
    $sql = "INSERT INTO theloai (tenTL, thuTu, anHien, lang) VALUES('{$tenTL}','{$thuTu}','{$anHien}','{$lang}')";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}

function xoaTheLoai($idTL){
    $sql="DELETE FROM theloai WHERE idTL=$idTL";
    global $conn;
    $kq= $conn->exec($sql);
}

function layChiTietTheLoai($idTL){
    $sql= "SELECT idTL,TenTL,ThuTu,AnHien,lang,HienMenu FROM theloai WHERE idTL=$idTL";
    global $conn;
    $kq= $conn->query($sql);
    if($kq==null) return false;
    else return $kq->fetch();
}

function updateTheLoai($idTL,$tenTL,$thuTu,$anHien,$lang){
    $sql="UPDATE theloai SET tenTL='{$tenTL}',thuTu=$thuTu,anHien=$anHien, lang='{$lang}' 
            WHERE idTL=$idTL";
    global $conn;
    $kq= $conn->exec($sql);
    return $kq==1;
}

//TIN TỨC

function getTinTrongLoai($id=0, $page_num=1, $page_size=5){
    try{
        $startRow= ($page_num-1)* $page_size;
        $sql="SELECT idTin,TieuDe,Tomtat,Ngay,urlHinh,lang,AnHien,SoLanXem FROM tin WHERE idLT=$id AND AnHien=1 LIMIT $startRow,$page_size";
        global $conn;
        $kq= $conn->query($sql);
        return $kq;
    }catch (Exception $e){
        die("Lỗi trong hàm ".__FUNCTION__.":" .$e->getMessage());
    }
}
function getloaitin($id=0){
    try {
        $sql="SELECT idTL,TenTL FROM theloai WHERE idTL=$id";
        global $conn;
        $kq = $conn->query($sql);
        return $kq->fetch();
    } catch (Exception $e) {
        die("Lỗi trong hàm:" . __FUNCTION__ . ":" . $e->getMessage());
    }
}


//USERS
function themUsers($username, $password, $email, $idGroup){
    $ngay= gmdate("d/m/Y");
    $sql = "INSERT INTO users (username, password, email, ngay, idGroup) VALUES('{$username}','{$password}','{$email}',Now(),'{$idGroup}')";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}

?>
