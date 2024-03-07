<?php 


	include '../koneksi/koneksi.php';
	 

	$nis = $_POST['nis'];
	$nama = $_POST['namalengkap'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	 

	mysqli_query($koneksi,"INSERT into user(nis, nama, email, alamat, username, password, level)
		values('$nis','$nama','$email','$alamat','$username','$password','$level')");
	 

	header("location:../index.php");

 ?>