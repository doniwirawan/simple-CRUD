<?php
include "koneksi.php";


// menangkap data yang di kirim dari form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$ibukota = $_POST['ibukota'];


// insert the data with query 
$sql = "insert into tb_negara_20101108 values('$kode','$nama','$ibukota')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header('location: index.php?status=sukses');
} else {
    header('location : index.php?status=gagal');
}
