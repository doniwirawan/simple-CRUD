<?php
include'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];

mysqli_query($koneksi,"UPDATE mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");

header("location:view.php");
?>