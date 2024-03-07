<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id =$_GET['idp'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from peminjam where IDpeminjam='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../peminjam.php");
 
?>