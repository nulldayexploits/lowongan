<?php
include_once 'config/connect-db.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  
  $result = mysqli_query($mysqli, "SET GLOBAL event_scheduler = ON") or die(mysqli_error($mysqli));
       
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