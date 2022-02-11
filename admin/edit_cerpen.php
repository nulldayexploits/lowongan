<?php 

  include('config/connect-db.php'); 
  include('config/base-url.php'); 
  include('template/atas.php'); 

?>

<?php
  
  $id = $_GET['id'];

  $result = mysqli_query($mysqli, "SELECT * FROM tb_skpd where id = $id");
  $data = mysqli_fetch_array($result);

?>
    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px">
    <h1 class="w3-xxxlarge judul-content"><b>Edit SKPD</b></h1>
    <hr class="w3-round garis-judul-content">

    <form action="edit_skpd.php?id=<?php echo $data['id']; ?>" method="post">
      
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

      <div class="w3-section">
        <label>Nama SKPD</label>
        <input class="w3-input w3-border" type="input" name="nama_skpd" value="<?php echo $data['nama_skpd']; ?>">
      </div>
                 

      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="Update">SIMPAN</button>
    </form>  
  </div>


  
  
<!-- End page content -->
</div>

<br><br><br><br>


<?php 

include('template/bawah.php'); 

// Keadeaan Ketika Di Submit atau mengirim data
if(isset($_POST['Update'])) {

  // Memasukkan Data Inputan ke Varibael
  $id      = $_POST['id'];
  $nama_skpd = $_POST['nama_skpd'];
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "UPDATE tb_skpd SET 
                                   nama_skpd='$nama_skpd'
                                   WHERE id=$id");
  
  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/view_skpd.php" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }


}

?>