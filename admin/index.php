<?php 

  include('template/atas.php'); 
  include('config/connect-db.php'); 


  
?>
  
   

  <!-- Services -->
  <div class="w3-container" id="tentang" style="margin-top:45px;font-weight: bold;font-size: 20px;">
    <center><BR>
    <?php if($_SESSION['hak_akses']=="ADMIN"){ ?>
      <img src="assets/dashboard admin.png" width="900">
    <?php }else{ ?>
      <img src="assets/dashboard user.png" width="900">
    <?php } ?>
      </center>
  </div>
  
  <!-- The Team -->
  
  
<!-- End page content -->
</div>

<?php 
  include('template/bawah.php'); 
?>