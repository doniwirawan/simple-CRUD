<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kode_20101108 = $_GET['kode_20101108'];


// menghapus data dari database
mysqli_query($koneksi, "delete from tb_negara_20101108 where kode_20101108='$kode_20101108'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
