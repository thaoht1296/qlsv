<?php
//include_once("config.php");
$connect = mysqli_connect("localhost", "root", "", "qlsv");
//echo"thảo linh tinh";
if(!empty($_POST))
{
    //echo"thảo linh tinh";
    $output = '';
    $ho = mysqli_real_escape_string($connect, $_POST["ho"]);  
    $ten = mysqli_real_escape_string($connect, $_POST["ten"]); 
	$email = mysqli_real_escape_string($connect, $_POST["email"]);
	$ngaysinh = mysqli_real_escape_string($connect, $_POST["ngaysinh"]);
	$nganh = mysqli_real_escape_string($connect, $_POST["nganh"]);
	$diem = mysqli_real_escape_string($connect, $_POST["diem"]);
	$quequan = mysqli_real_escape_string($connect, $_POST["quequan"]);
    // them nguoi dung
    $quyen = 'sinhvien';
    $tenDangNhap = $ten;
    $matKhau = md5($ten);
    
    $sql = "INSERT INTO tbl_nguoidung(tenDangNhap, matKhau, quyen) VALUES('$tenDangNhap', '$matKhau', '$quyen')";
    if (mysqli_query($connect, $sql)) {
        $last_id = mysqli_insert_id($connect);
        $query = "INSERT INTO tbl_sinhvien(ma_nguoidung,ho, ten, email, ngaysinh, nganh, diem, quequan) VALUES('$last_id','$ho', '$ten', '$email', '$ngaysinh', '$nganh', '$diem', '$quequan')";
        mysqli_query($connect, $query);
    }
    header("Location: thongKeSV.php");
}
?>