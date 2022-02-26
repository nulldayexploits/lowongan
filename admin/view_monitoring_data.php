<?php 

  include('config/connect-db.php'); 
  include('template/atas.php'); 

?>
  
   


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px"> 
    <h1 class="w3-xxxlarge judul-content"><b>Monitoring Data</b></h1>
    <hr class="w3-round garis-judul-content">
      

      <table border=1 width="100%" style="border-collapse: collapse;">
        <tr class="w3-red">
          <th>No</th>
          <th>Nama Pekerjaan</th>
          <th>Perusahaan</th>
          <th>Domisili Pekerjaan</th>
          <th>Gaji</th>
          <th>Sumber Scraping</th>
        </tr>
        

        <?php
          $no = 1;
          $result = mysqli_query($mysqli, "SELECT * FROM tb_lowongan_pekerjaan");
          while($data = mysqli_fetch_array($result)) { 
        ?>
        <tr>
          <td><center><?php echo $no; ?></td>
          <td><center><?php echo $data['nama_pekerjaan']; ?></td>
          <td><center><?php echo $data['nama_perusahaan']; ?></td>
          <td><center><?php echo $data['gaji']; ?></td>
          <td><center><?php echo $data['domisili']; ?></td>
          <td><center><?php echo $data['sumber_web']; ?></td>
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

