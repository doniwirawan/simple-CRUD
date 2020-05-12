<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "akademik";

$koneksi =  mysqli_connect($server,$user,$password,$database);

if(!$koneksi){
	die ("koneksi anda gagal ".mysqli_conncet_error());
}else{
	echo "koneksi berhasil";
}