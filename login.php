<?php
ob_start();
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$pengguna = $_POST['pengguna'];
$sandiz = $_POST['sandiz'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"SELECT * from tux where pengguna='$pengguna' and sandiz='$sandiz'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
//echo "$cek";

if($cek > 0){
 
	$datax = mysqli_fetch_assoc($login);
	echo $datax['pengguna'];
	//exit;
	   // cek jika user login sebagai admin
	   if($datax['pengguna']== "tu"){
	
		   // buat session login dan username
		   $_SESSION['pengguna'] = $pengguna;
		   $_SESSION['status'] = "login";
		   // alihkan ke halaman dashboard admin
		   header("location:TU/index.php");
	
	   // cek jika user login sebagai pegawai
	   }else if($datax['pengguna'] == "siswa"){
		   // buat session login dan username
		   $_SESSION['pengguna'] = $pengguna;
		   $_SESSION['status'] = "login";
		   // alihkan ke halaman dashboard pegawai
		   header("location:siswa/index.php");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
?>