<?php
 include 'layout/header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;">
  <div class="col">
    <h2>Data Peminjam</h2>
    <a href ="data/pinjam_buku.php" class ="btn btn-success mt-3">Tambah Peminjaman</a>
    <table class="table my-2">
      <thead class="table  table-warning">
        <tr>
          <th scope="col">ID Peminjam</th>
          <th scope="col">Nama Peminjam</th>
          <th scope="col">Status Peminjam</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php 
         include '../koneksi/koneksi.php';

         $data = mysqli_query($koneksi, "SELECT * FROM peminjam");
         while ($d = mysqli_fetch_array($data)) {
          
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $d['IDpeminjam'];?></th>
          <td><?php echo $d['nama'];?></td>
          <td><?php echo $d['status_peminjam'];?></td>
          <td>
               <a href ="data/detail_peminjaman.php?IDpeminjam=<?php echo $d['IDpeminjam']; ?>" class="btn btn-primary text-white">Detail</a>
               <a href ="" class="btn btn-warning text-white">Edit</a>
               <a href ="data/delete_pinjaman.php?idp=<?php echo $d['IDpeminjam']; ?>" class="btn btn-danger text-white">Delete</a>

          </td>
        </tr>
      </tbody>
      <?php
         }
      ?>
    </table>     
    </div>
  </div>
</div>


<?php
 include 'layout/footer.php';
?>