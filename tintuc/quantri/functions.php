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

function layTenTL($idTL=0){
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

function layTinTrongLoai($id=0, $page_num=1, $page_size=5){
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
function layloaitin($id=0){
    try {
        $sql="SELECT idTL,TenTL FROM theloai WHERE idTL=$id";
        global $conn;
        $kq = $conn->query($sql);
        return $kq->fetch();
    } catch (Exception $e) {
        die("Lỗi trong hàm:" . __FUNCTION__ . ":" . $e->getMessage());
    }
}
function demTinTrongLoai($id=0){
    $sql="SELECT count(*) FROM tin WHERE idLT=$id AND AnHien=1";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];

}

function taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size=5){
    if($page_num<=0) return"";
    $total_pages=ceil($total_rows/$page_size);
    if($total_pages<=1) return "";

    $links="<ul class='pagination'>";
    if($page_num>1){
        $first="<li><a href='{$base_url}'> << </a></li>";
        $page_prev= $page_num-1;
        $prev = "<li><a href='{$base_url}&page_num={$page_prev}'> < </a></li>";
        $links.= $first. $prev;
    }
    
    $offset=2;
    $from= $page_num-$offset;
    $to= $page_num + $offset;
    if($from<1) $from=1;
    if($to>$total_pages) $to= $total_pages;
    for($i= $from; $i<$to; $i++){
        if($i==$page_num) $str="<li><span> {$i} </span></li>";
        else $str="<li><a href='{$base_url}&page_num={$i}'>{$i}</a></li>";
        $links .= $str;
    }

    if($page_num< $total_pages){
        $page_next= $page_num+1;
        $next = "<li><a href='{$base_url}&page_num={$page_next}'> > </a></li>";
        $last="<li><a href='{$base_url}&page_num={$total_pages}'> >> </a></li>";
        $links.= $next. $last;
    }
    
    $links .="</ul>";

    


    return $links;
}

//USERS
function themUsers($username, $password, $email, $idGroup){
    $ngay= gmdate("d/m/Y");
    $sql = "INSERT INTO users (username, password, email, ngay, idGroup) VALUES('{$username}','{$password}','{$email}',Now(),'{$idGroup}')";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}

function laydsUser()
{
    $sql = "SELECT idUser,username, password, email, ngay,idGroup,gioiThieu FROM users ORDER BY ngay";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

//cmt
function laydsComment()
{
    $sql = "SELECT idYKien,idTin, Ngay, NoiDung, Email,HoTen,AnHien FROM ykien ORDER BY ngay";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function layTin($id=0){
    try{
        $sql="SELECT idTin,TieuDe,Tomtat,Ngay,urlHinh,lang,AnHien,SoLanXem FROM tin WHERE idTin=$id AND AnHien=1";
        global $conn;
        $kq= $conn->query($sql);
        return $kq;
    }catch (Exception $e){
        die("Lỗi trong hàm ".__FUNCTION__.":" .$e->getMessage());
    }
}
function layanhTin($id=0){
    try{
        $sql="SELECT TieuDe,idTin,urlHinh,lang,NoiBat,AnHien,SoLanXem FROM tin where lang='vi' and AnHien=1 and NoiBat=1 ORDER BY ngay LIMIT 0,15";
        global $conn;
        $kq= $conn->query($sql);
        return $kq;
    }catch (Exception $e){
        die("Lỗi trong hàm ".__FUNCTION__.":" .$e->getMessage());
    }
}

?>
