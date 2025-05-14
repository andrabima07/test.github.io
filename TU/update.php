<?php
include "koneksi.php";
$id = $_POST["idx"];
$nama = $_POST["nas"];
$kelas = $_POST["kls"];
$uang = $_POST["oea"];
mysqli_query($con, "UPDATE siswa SET nasis='$nama', kelas='$kelas', uang='$uang' WHERE id='$id'");
header("location:datasiswa.php")
?>