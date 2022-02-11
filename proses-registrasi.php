<?php

//* Includde Koneksi Ke database
include_once("admin/config/connect-db.php");

//* Include Base Url
include_once("admin/config/base-url.php");

	if(isset($_POST['Submit'])) {

      $nama     = $_POST['nama'];
      $username = $_POST['username'];
	  $pass     = md5($_POST['password']);
	  
	  // Memasukkan data kedatabase berdasarakan variabel tadi
	  $result = mysqli_query($mysqli, "INSERT INTO tb_user (id, nama_lengkap, username, password) 
	                               VALUES(null, '$nama', '$username', '$pass')");
	  
	  // Cek jika proses simpan ke database sukses atau tidak   
	  if($result){ 
	       // Jika Sukses, redirect halaman menggunakan javascript
	    echo '<script language="javascript"> alert("Berhasil Mendaftar!"); window.location.href = "'.$base_url_front.'/index.php" </script>';
	  }else{
	      // Jika Gagal, Lakukan :
	      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
	  }


	}

?>