<?php
   $host = "localhost";
    $user = "root";
    $password= "";
    $database = "qlsv";

    $conn = mysqli_connect($host, $user, $password, $database);
    
    if(!$conn){
        echo "Không kết nối đến được dữ liệu.";
    }
?>
