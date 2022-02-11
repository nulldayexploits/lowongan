<?php 
  include("config/auth.php");
  include('config/connect-db.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0049)http://localhost/public_lasttask/gotaaruf/public/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Info Lowongan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/w3.css">
<link rel="stylesheet" href="assets/css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

.judul-content{ color: #004aad; }
.garis-judul-content{ width:70px;border:5px solid #004aad; }
.w3-red{ background-color: #004aad!important; }

.btn-edit{
  font-weight: bold;
  color: green;
}

.btn-hapus{
  font-weight: bold;
  color: red;
}

</style>

<!-- Fonts and icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head><body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Info Lowongan</b></h3>
  </div>
  <div class="w3-bar-block">

    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Beranda</a> 

    <?php if($_SESSION['hak_akses']=="ADMIN"){ ?>

    <a href="view_scraping.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menu Scraping</a>

    <a href="view_monitoring_data.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Monitoring Data</a>

    <a href="view_kelola_user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kelola User</a>

    <?php }else{ ?>


    <a href="view_cek_lowongan.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Cek Lowongan</a>

    <?php } ?>



    <a href="config/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
  
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>WEB SCRAPING</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

