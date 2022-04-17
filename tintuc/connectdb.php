<?php
try {
    $host = "localhost";
    $dbname = "php1_news";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi: " . $e->getMessage());
}

function tinNoiBat()
{
    $sql = "SELECT idTin,Tieude,TomTat,Ngay,urlHinh,idLT,idTL,SoLanXem  FROM tin WHERE lang='vi' AND NoiBat=1 ORDER BY Ngay DESC LIMIT 0,8 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function tinMoiNhat()
{
    $sql = "SELECT idTin,Tieude,TomTat,Ngay,urlHinh,idLT,idTL,SoLanXem  FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 0,6 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function tinXemNhieu()
{
    $sql = "SELECT idTin,Tieude,TomTat,Ngay,urlHinh ,SoLanXem,idLT FROM tin WHERE lang='vi' ORDER BY SoLanXem DESC LIMIT 0,5 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function tangSoLanXem($id = 0)
{
    try {
        $sql = "UPDATE tin SET SoLanXem = SoLanXem+1 WHERE idTin=$id";
        global $conn;
        $conn->exec($sql);
    } catch (Exception $e) {
        die("Lỗi trong " . __FUNCTION__ . " : " . $e->getMessage());
    }
}

function layTheLoai()
{
    $sql = "SELECT idTL,TenTL FROM theloai WHERE lang='vi' AND AnHien=1 AND HienMenu=1 ORDER BY ThuTu ASC limit 0,4 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function demTintrongTheLoai($id = 0)
{
    $sql = "SELECT count(*) FROM tin WHERE idTL=$id AND AnHien=1";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];
}

//loại tin ở menu
function LoaiTin($idTL)
{
    $sql = "SELECT idLT,Ten FROM loaitin WHERE AnHien=1 AND idTL=$idTL ORDER BY ThuTu ASC limit 0,4 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

//loại tin ở bài viết
function layLoaiTin($id = 0)
{
    $sql = "SELECT idLT,Ten FROM loaitin WHERE idLT=$id";
    global $conn;
    $kq = $conn->query($sql);
    return $kq->fetch();
}

//thể loại
function layTenTL($id = 0)
{
    $sql = "SELECT idTL,TenTL FROM theloai WHERE idTL=$id";
    global $conn;
    $kq = $conn->query($sql);
    return $kq->fetch();
}

//6tin
function tintheoloaitin($id = 0)
{
    $sql = "SELECT idLT,idTin,Tieude,TomTat,urlHinh,Ngay,SoLanXem FROM tin WHERE lang='vi' AND AnHien=1 AND idLT=$id  ORDER BY Ngay DESC limit 0,6 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

//4tin
function tintheovung($id = 0)
{
    $sql = "SELECT idLT,idTin,Tieude,TomTat,urlHinh,Ngay,SoLanXem FROM tin WHERE lang='vi' AND AnHien=1 AND idLT=$id  ORDER BY Ngay DESC limit 1,4 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

//tin nổi bật theo vùng
function tinNoiBattheovung($id = 0)
{
    $sql = "SELECT idTin,Tieude,TomTat,Ngay,urlHinh,idLT,idTL  FROM tin WHERE lang='vi' AND NoiBat=1  AND idLT=$id ORDER BY Ngay DESC limit 0,1";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function layChiTietTin($id = 0)
{
    try {
        $sql = "SELECT TieuDe,TomTat,Ngay,urlHinh,SoLanXem,Content,tags,idLT FROM tin WHERE idTin=$id AND AnHien =1";
        global $conn;
        $kq = $conn->query($sql);
        return $kq->fetch();
    } catch (Exception $e) {
        die("Lỗi trong hàm:" . __FUNCTION__ . ":" . $e->getMessage());
    }
}

//lấy tin trong loại
function layTinTrongLoai($id = 0, $page_num = 1, $page_size = 5)
{
    try {
        $startRow = ($page_num - 1) * $page_size;
        $sql = "SELECT idTin,TieuDe,Tomtat,Ngay,urlHinh,idLT,SoLanXem FROM tin WHERE idLT=$id AND AnHien=1 LIMIT $startRow,$page_size";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $e) {
        die("Lỗi trong hàm " . __FUNCTION__ . ":" . $e->getMessage());
    }
}
//lấy tin trong thể loại
function laytintrongTL($id = 0, $page_num = 1, $page_size = 5)
{
    try {
        $startRow = ($page_num - 1) * $page_size;
        $sql = "SELECT idTin,idLT,TieuDe,Tomtat,Ngay,urlHinh,SoLanXem FROM tin WHERE idTL=$id AND AnHien=1 LIMIT $startRow,$page_size";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $e) {
        die("Lỗi trong hàm " . __FUNCTION__ . ":" . $e->getMessage());
    }
}

function demTinTrongLoai($id = 0)
{
    $sql = "SELECT count(*) FROM tin WHERE idLT=$id AND AnHien=1";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];
}
function demBinhLuan($id = 0)
{
    $sql = "SELECT count(*) FROM ykien WHERE idTin=$id AND AnHien=1";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];
}
function layBinhLuan($id = 0)
{
    try {
        $sql = "SELECT HoTen,NoiDung,Ngay,idTin,idYKien FROM ykien WHERE idTin=$id AND AnHien =1";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $e) {
        die("Lỗi trong hàm:" . __FUNCTION__ . ":" . $e->getMessage());
    }
}
function taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size = 5)
{
    if ($page_num <= 0) return "";
    $total_pages = ceil($total_rows / $page_size);
    if ($total_pages <= 1) return "";

    $links = "";
    if ($page_num > 1) {
        $first = "<span class='pagination__page pagination__page'><a href='{$base_url}'> &laquo; </a></span>";
        $page_prev = $page_num - 1;
        $prev = "<span class='pagination__page pagination__page'><a href='{$base_url}&page_num={$page_prev}'> &lsaquo; </a></span>";
        $links .= $first . $prev;
    }


    $offset = 2;
    $from = $page_num - $offset;
    $to = $page_num + $offset;
    if ($from < 1) $from = 1;
    if ($to > $total_pages) $to = $total_pages;
    for ($i = $from; $i < $to; $i++) {
        if ($i == $page_num) $str = "<span class='pagination__page pagination__page'><span> {$i} </span></span>";
        else $str = "<span class='pagination__page pagination__page'><a href='{$base_url}&page_num={$i}'>{$i}</a></span>";
        $links .= $str;
    }

    if ($page_num < $total_pages) {
        $page_next = $page_num + 1;
        $next = "<span class='pagination__page pagination__page'><a href='{$base_url}&page_num={$page_next}'> &rsaquo; </a></span>";
        $last = "<span class='pagination__page pagination__page'><a href='{$base_url}&page_num={$total_pages}'> &raquo; </a></span>";
        $links .= $next . $last;
    }

    $links .= "";
    return $links;
}

function ketQuaTimKiem($key_search)
{
    try {
        global $conn;
        $sql_statement_1 = 'SELECT * FROM tin WHERE (TieuDe LIKE "%' . $key_search . '%" OR TomTat LIKE "%' . $key_search . '%") and AnHien=1';
        $stmt_1 = $conn->prepare($sql_statement_1);
        $stmt_1->setFetchMode(PDO::FETCH_ASSOC);
        $stmt_1->execute();
        $resultSet_1 = $stmt_1->fetchAll();
        return $resultSet_1;
    } catch (Exception $e) {
        die("Lỗi trong hàm " . __FUNCTION__ . ":" . $e->getMessage());
    }
}

function laythongtinUser($username)
{
    $sql = "SELECT * FROM users where username= $username";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
