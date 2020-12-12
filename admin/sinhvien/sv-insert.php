<?php
//include_once("config.php");
$connect = mysqli_connect("localhost", "root", "", "qlsv");
if(!empty($_POST))
{
    $output = '';
    $ho = mysqli_real_escape_string($connect, $_POST["ho"]);  
    $ten = mysqli_real_escape_string($connect, $_POST["ten"]); 
	$email = mysqli_real_escape_string($connect, $_POST["email"]);
	$ngaysinh = mysqli_real_escape_string($connect, $_POST["ngaysinh"]);
	$nganh = mysqli_real_escape_string($connect, $_POST["nganh"]);
	$diem = mysqli_real_escape_string($connect, $_POST["diem"]);
	$quequan = mysqli_real_escape_string($connect, $_POST["quequan"]);
    // them nguoi dung
    $quyen = 'Sinh viên';
    $tenDangNhap = $ten;
    $matKhau = md5($ten);
    
    $sql = "INSERT INTO tbl_nguoidung(tenDangNhap, matKhau, quyen) VALUES('$tenDangNhap', '$matKhau', '$quyen')";
    if (mysqli_query($connect, $sql)) {
        $last_id = mysqli_insert_id($connect);
        $query = "INSERT INTO tbl_sinhvien(ma_nguoidung,ho, ten, email, ngaysinh, nganh, diem, quequan) VALUES('$last_id','$ho', '$ten', '$email', '$ngaysinh', '$nganh', '$diem', '$quequan')";
        if(mysqli_query($connect, $query))
        {
             $output .= '<label class="text-success">Data Inserted</label>';
             $select_query = "SELECT * FROM tbl_sinhvien WHERE ma_nguoidung IS NOT NULL ORDER BY masv DESC";
             $result = mysqli_query($connect, $select_query);
             $output .= '
             <table id="example1" class="table table-bordered table-striped">
             <thead>
               <tr>
                 <th><input type ="checkbox" '.'id="checkall"></th>
                 <th>Họ đệm</th>
                 <th>Tên</th>
                 <th>Email</th>
                 <th>Ngày sinh</th>
                 <th>Ngành</th>
                 <th>Điểm</th>
                 <th>Quê quán</th>
                 <th>Chức năng</th>
                 </tr>
             </thead>

            ';
             while($row = mysqli_fetch_array($result))
             {
                         $temp = $row["masv"];
              $output .= '
               <tr>  
				'.'<td class="jsgrid-cell jsgrid-align-center"><input class= "checkbox" type="checkbox" id="'.(string)$temp.'" ho="masv[]" ></td>'.'
				 <td>' . $row["ho"] . '</td>  
				 <td>' . $row["ten"] . '</td> 
				 <td>' . $row["email"] . '</td>
				 <td>' . $row["ngaysinh"] . '</td>
				 <td>' . $row["nganh"] . '</td>
				 <td>' . $row["diem"] . '</td>
				 <td>' . $row["quequan"] . '</td>

				  <td><a class="btn btn-success btn-sm" href="#" data-role="update" data-id="'.(string)$temp.'"><i class="fas fa-tools">
			</i>Sửa</a></td> 
			</tr>';
              
             }
             
             $output .= '</table>';
            echo $output;
         }
    
    
    }
}
?>

