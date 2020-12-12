<?php
	//include_once("config.php");
        $conn = mysqli_connect("localhost", "root", "", "qlsv");
	
	if(isset($_POST['data'])){
		echo 'Xóa thành công';
		$dataArr = $_POST['data'];
		$del = 'DELETE FROM tbl_nguoidung WHERE ma=?;';
                $sel = "SELECT * FROM tbl_doanhnghiep WHERE madn=?;";
                $stmt = mysqli_stmt_init($conn);
               // $stmt2 = mysqli_stmt_init($conn);
                //mysqli_stmt_prepare($stmt, $sql);
		foreach($dataArr as $id){
                    mysqli_stmt_prepare($stmt, $sel);
                    mysqli_stmt_bind_param($stmt, "i",$id);
                    mysqli_stmt_execute($stmt);
                    $reusult = mysqli_fetch_array(mysqli_stmt_get_result($stmt));
                    mysqli_stmt_prepare($stmt, $del);
                    mysqli_stmt_bind_param($stmt, "i",$reusult['ma_nguoidung']);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_get_result($stmt);
		}
	
        }
?>