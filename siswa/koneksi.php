<?php
$host = "localhost";
$user = "oma10001_bima";
$pass = "andrabima007";
$db = "oma10001_andra";
$con = mysqli_connect($host, $user, $pass, $db);
// Check connection;

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>