<?php
require 'functions.php';
$idLT = $_GET['idLT'];
settype($idLT,"int");
xoaLoaiTin($idLT);
header("Location: index.php?page=loaitin_ds");
?>