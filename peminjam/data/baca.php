<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sedang Membaca Buku</title>
    <link href="" crossorigin="anonymous">
  </head>
  <body>

    <?php
      include '../../koneksi/koneksi.php';
      if (isset($_GET['idbaca'])) {
        $id =$_GET['idbaca'];
       }
       $sql = mysqli_query($koneksi, "SELECT * from buku where IDbuku='$id'");
       $info = mysqli_fetch_array($sql);
    ?>

    <embed src="<?php echo $info['buku'];?>" type="application/pdf" width="100%" height="800">
    <script src="" crossorigin="anonymous"></script>
  </body>
</html>