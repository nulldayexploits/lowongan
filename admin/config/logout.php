<?php 
    
    include("base-url.php");
    include('connect-db.php'); 

    session_start();
	session_destroy();
	// fungsi redirect menggunakan javascript
	echo '<script language="javascript"> window.location.href = "'.$base_url_front.'/index.php" </script>';


    $result = mysqli_query($mysqli, "SET GLOBAL event_scheduler = OFF") or die(mysqli_error($mysqli));
    
?>