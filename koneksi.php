<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_20101108";

$koneksi = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
