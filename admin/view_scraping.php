<?php 

  include('config/connect-db.php'); 
  include('template/atas.php'); 

  $result = mysqli_query($mysqli, "SET GLOBAL event_scheduler = ON") or die(mysqli_error($mysqli));
    
?>
  
   


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px"> 
    <h1 class="w3-xxxlarge judul-content"><b>Menu Scraping</b></h1>
    <hr class="w3-round garis-judul-content">
      
      <br><br>

      <center>

      <a href="http://127.0.0.1:8000/scrape" target="_blank" id="btn" class="w3-button w3-padding-large w3-red w3-margin-bottom">Scraping Web</a>

      <br>

    <!--   <a href="#" class="w3-button w3-padding-large w3-yellow w3-margin-bottom">Simpan Data</a>
 -->
      </center>

  </div>


  
  
<!-- End page content -->
</div>


<br><br><br><br>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script type="text/javascript">
    $('#btn').on('click', function(){ 

      //var pp = 1;
      var sumber1 = "loker_id"; 
      var sumber2 = "jobstreet"; 
      var sumber3 = "indeed"; 
      var pp = 1;
      (function loop() {
        setTimeout(function () {
          get(pp);
          console.log("get("+pp+")");
          loop();
          pp++;
        }, 5000); //5000 = 5000ms = 5s
      }());

      // for (let pp = 1; pp <= 15; pp++) {
      //   setTimeout(function() { get(pp); }, 100);
      // } 

      function get(val){ 

         $.ajax({ 
           type: "GET", 
           url: 'http://lokerid.mandikeofficial.my.id/?p='+val, 
           success: function(data){
             for(var i=0; i < data.length; i++){ 
              simpan(data[i], sumber1);
             }
           } 
         }); 

         $.ajax({ 
           type: "GET", 
           url: 'http://jobstreet.mandikeofficial.my.id/?p='+val, 
           success: function(data){ 
             for(var i=0; i < data.length; i++){
              simpan(data[i], sumber2);
             }
           } 
         });

         $.ajax({ 
           type: "GET", 
           url: 'http://indeed.mandikeofficial.my.id/?p='+val, 
           success: function(data){ 
             for(var i=0; i < data.length; i++){
              simpan(data[i], sumber3);
             }
           } 
         });

      } 

      function simpan(d,sumber){
       
       var kat = d.kategori_lowongan;
       var pek = d.nama_pekerjaan;
       var per = d.nama_perusahaan;
       var gaj = d.gaji;
       var dom = d.domisili;
       var link = d.link_detail; 

       $.ajax({ 
         type: "GET", 
         url: 'api.php?p1='+kat+'&p2='+pek+'&p3='+per+'&p4='+gaj+'&p5='+dom+'&p6='+link+'&sumber='+sumber, 
         success: function(data){} 
       }); 

      }
    
    });

  </script>

<?php 
   
  include('template/bawah.php'); 


?>

