<?php
include_once 'config/connect-db.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  $kategori_lowongan   = $_GET['p1'];
  $nama_pekerjaan      = $_GET['p2'];
  $nama_perusahaan     = $_GET['p3'];
  $gaji                = $_GET['p4'];
  $domisili            = $_GET['p5'];
  $link                = $_GET['p6'];
  $sumber              = $_GET['sumber'];

  
  $result = mysqli_query($mysqli, "INSERT INTO tb_lowongan_pekerjaan (id, sumber_web, kategori_lowongan, nama_pekerjaan, nama_perusahaan, logo_perusahaan, domisili, gaji, link) 
                               VALUES(null, '$sumber', '$kategori_lowongan', '$nama_pekerjaan', '$nama_perusahaan', '-', '$gaji', '$domisili', '$link')") or die(mysqli_error($mysqli));
  
  if($result){ 
       
       $res[] = [
            "code" => 200,
            "msg" => "Berhasil!"
        ];

  }else{

       $res[] = [
            "code" => 500,
            "msg" => "Gagal! "
        ];
  
  }

  echo json_encode($res);

?>