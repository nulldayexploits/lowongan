<?php 

  include('config/connect-db.php'); 
  include('template/atas.php'); 

?>
  
   


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px"> 
    <h1 class="w3-xxxlarge judul-content"><b>Kelola User</b></h1>
    <hr class="w3-round garis-judul-content">
    

      <table border=1 width="100%" style="border-collapse: collapse;">
        <tr class="w3-red">
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Username</th>
          <th>Aksi</th>
        </tr>
        

        <?php
          $no = 1;
          $result = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE hak_akses = 'USER'");
          while($data = mysqli_fetch_array($result)) { 
        ?>
        <tr>
          <td><center><?php echo $no; ?></td>
          <td><center><?php echo $data['nama_lengkap']; ?></td>
          <td><center><?php echo $data['username']; ?></td>
          <td><center>
            <a href="hapus_kelola_user.php?id=<?php echo $data['id']; ?>" class="btn btn-danger waves-effect" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Ini?');">HAPUS</a>
          </td>
        </tr>
        <?php $no++; } ?>


      </table>

  </div>


  
  
<!-- End page content -->
</div>


<br><br><br><br>

<?php 
   
  include('template/bawah.php'); 


?>

