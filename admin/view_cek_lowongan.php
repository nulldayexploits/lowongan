<?php 

  include('config/connect-db.php'); 
  include('template/atas.php'); 

?>
  
   


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px"> 
    <h1 class="w3-xxxlarge judul-content"><b>Cek Lowongan</b></h1>
    <hr class="w3-round garis-judul-content">
      

      <div class="w3-section">
        <select name="kategori" class="w3-input w3-border" >
          <option>- Pilih Kategori Pencarian -</option> 
          <option value="kategori_lowongan">Kategori Lowongan</option> 
          <option value="nama_pekerjaan">Nama Pekerjaan</option> 
          <option value="nama_perusahaan">Nama Perusahaan</option> 
          <option value="domisili">Domisili</option> 
          <option value="gaji">Gaji</option> 
        </select>
      </div>

      <div class="w3-section">
        <input class="w3-input w3-border" type="input" name="q" placeholder="Masukkan Kata Kunci...">
      </div>

      <br>

      <table border=1 width="100%" style="border-collapse: collapse;">
        <tr class="w3-red">
          <th>No</th>
          <th>Kategori</th>
          <th>Nama Pekerjaan</th>
          <th>Nama Perusahaan</th>
          <th>Domisili</th>
          <th>Gaji</th>
          <th>Aksi</th>
        </tr>
        

        <?php
          $no = 1;
          $result = mysqli_query($mysqli, "SELECT * FROM tb_lowongan_pekerjaan");
          while($data = mysqli_fetch_array($result)) { 
        ?>
        <tr>
          <td><center><?php echo $no; ?></td>
          <td><center><?php echo $data['kategori_lowongan']; ?></td>
          <td><center><?php echo $data['nama_pekerjaan']; ?></td>
          <td><center><?php echo $data['nama_perusahaan']; ?></td>
          <td><center><?php echo $data['domisili']; ?></td>
          <td><center><?php echo $data['gaji']; ?></td>
          <td><center>
            <a href="<?php echo $data['link']; ?>" class="btn btn-danger waves-effect">Detail</a>
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

