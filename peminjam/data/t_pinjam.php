<?php   
	// koneksi database
	include '../../koneksi/koneksi.php';
	 
	// menangkap data yang di kirim dari form
	$IDuser      = $_POST['IDuser'];
	$IDbuku      = $_POST['IDbuku'];
	$tanggal_peminjam    = $_POST['tanggal_peminjam'];
	$tanggal_pengembalian   = $_POST['tanggal_pengembalian'];
    $nama        = $_POST['nama'];  
    $status_peminjam = $_POST['status_peminjam'];
	 
	// menginput data ke database
	mysqli_query($koneksi,"INSERT into peminjaman (IDuser, IDbuku, tanggal_peminjam, tanggal_pengembalian, nama, status_peminjam)
	                	values('$IDuser','$IDbuku','$tanggal_peminjam','$tanggal_pengembalian','$nama','$status_peminjam')");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:../buku.php");

 ?> 