<?php
require 'functions.php';
$idTL = $_GET['idTL'];
settype($idTL,"int");
xoaTheLoai($idTL);
header("Location: index.php?page=theloai_ds");
?>