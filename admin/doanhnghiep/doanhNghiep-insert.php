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
        if(mysqli_query($connect, $query))
        {
             $output .= '<label class="text-success"><br>Đã thêm thành công</label>';
             $select_query = "SELECT * FROM tbl_doanhnghiep WHERE ma_nguoidung IS NOT NULL ORDER BY madn DESC";
             $result = mysqli_query($connect, $select_query);
             $output .= '
              <table id="example1" class="table table-bordered table-striped">  
			   <thead>
                  <tr>
					<th class="jsgrid-cell jsgrid-align-center"><input type ="checkbox" id="checkall"></th>
					<th>Tên doanh nghiệp</th>
					<th>Địa chỉ</th>
					<th>Chức năng</th>
				  </tr>
                  </thead>

             ';
             while($row = mysqli_fetch_array($result))
             {
				 $temp = $row["madn"];
              $output .= '<tr id ='.(string)$temp.'>';
                    $output .=  '<td class="jsgrid-cell jsgrid-align-center"><input class= "checkbox" type="checkbox" id="'.(string)$temp.'" tendn="madn[]" ></td>';
                    $output .=  "<td data-target='tendn'>". $row['tendn']."</td>";
                    $output .=  '<td data-target="diachi">'.$row['diachi'].'</td>';

                    $output .=  '<td class="project-actions text-center"><a class="btn btn-success btn-sm"  data-role="update" data-id="'.(string)$temp.'"><i class="fas fa-tools">
                        </i>
                        Sửa</a></td>';
            $output .=  '</tr>';
             
            }
			$output .= '</table>';
            echo $output;
    }
    
    }
    
}

?>

