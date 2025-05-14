<?php
include "koneksi.php";
$nama = $_GET['hps'];
mysqli_query($con,"DELETE FROM siswa WHERE nasis='$nama'");
header("location:datasiswa.php");
?>