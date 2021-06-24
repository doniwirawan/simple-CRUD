<?php
include 'koneksi.php';

$query = $_GET['cari'];

if (isset($query)) {
    $data = mysqli_query($koneksi, "select * from tb_negara_20101108 where nama_20101108 like '%" . $query . "%'");
} else {
    $data = mysqli_query($koneksi, "select * from tb_negara_20101108 ");
}
