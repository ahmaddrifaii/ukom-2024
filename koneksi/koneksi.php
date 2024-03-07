<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "dbukom24";

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    if (!$koneksi) {
    	die ("koneksi gagal: " . mysqli_connect_error());
    }
  

  ?>	