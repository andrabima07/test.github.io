<?php
include "koneksi.php";
$nama = $_POST["nasis"];
$kelas = $_POST["kelas"];
$uang = $_POST["uang"];
mysqli_query($con, "INSERT INTO siswa values('', '$nama', '$kelas', '$uang')");
header("location:datasiswa.php");
?>