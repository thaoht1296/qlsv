<?php
  
//include_once("config.php");
$connect = mysqli_connect("localhost", "root", "", "qlsv");
if(!empty($_POST))
{
    $output = '';
    $tendn = mysqli_real_escape_string($connect, $_POST["name"]);  
    $diachi = mysqli_real_escape_string($connect, $_POST["address"]); 
    // them nguoi dung
    $quyen = 'nhanvien';
    $tenDangNhap = $tendn;
    $matKhau = md5($tendn);
    
    $sql = "INSERT INTO tbl_nguoidung(tenDangNhap, matKhau, quyen) VALUES('$tenDangNhap', '$matKhau', '$quyen')";
   
    if (mysqli_query($connect, $sql)) {
        $last_id = mysqli_insert_id($connect);
        $query = "INSERT INTO tbl_doanhnghiep(ma_nguoidung,tendn, diachi) VALUES('$last_id','$tendn', '$diachi')";
        mysqli_query($connect, $query);

    }
    header("Location: thongKeDN.php");

}
?>