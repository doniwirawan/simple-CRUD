<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$ibukota = $_POST['ibukota'];

$sql = mysqli_query($koneksi, "UPDATE tb_negara_20101108 set  nama_20101108='$nama',ibukota_20101108='$ibukota' where kode_20101108='$kode'");




header("location:index.php");
