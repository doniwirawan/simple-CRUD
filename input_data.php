<?php
include"koneksi.php";


    // getting data from the form input
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $alamat=$_POST['alamat'];

    // insert the data with query 
    $sql = "INSERT INTO mahasiswa (id,nama,nim,alamat) VALUE ('','$nama','$nim','$alamat')";
    $query = mysqli_query($koneksi,$sql);

    if($query){
        header('location: view.php?status=sukses');
    }else{
        header('location : view.php?status=gagal');
    }



?>