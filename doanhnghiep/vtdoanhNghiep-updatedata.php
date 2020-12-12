<?php
//include("config.php");
$conn = mysqli_connect("localhost", "root", "", "qlsv");
if( isset($_POST['diem'])){
	
    $diem = $_POST['diem']; 
    $ma = $_POST['ma'];
    
    $sql = "UPDATE tbl_vitridn SET diem=? WHERE ma=? ";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "di", $diem, $ma );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
   
   if($result){
       echo 'data-update';
   }
}