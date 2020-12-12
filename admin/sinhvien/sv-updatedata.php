<?php
//include_once("config.php");
$conn = mysqli_connect("localhost", "root", "", "qlsv");
if( isset($_POST['ho'])){
	
    $ho = $_POST['ho'];
    $ten = $_POST['ten'];
	$email = $_POST['email'];
	$ngaysinh = $_POST['ngaysinh'];
	$nganh = $_POST['nganh'];
	$diem = $_POST['diem'];
	$quequan = $_POST['quequan'];
    
    $masv = $_POST['masv'];
    
    $sql = "UPDATE tbl_sinhvien SET ho=? , ten=?, email=?, ngaysinh=?, nganh=?, diem=?, quequan=? WHERE masv=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sssdsdsi", $ho, $ten, $email, $ngaysinh, $nganh, $diem, $quequan, $masv );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
   
   if($result){
       echo 'data-update';
   }
}
?>