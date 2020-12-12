<?php
	//include("../config.php");
    $conn = mysqli_connect("localhost", "root", "", "qlsv");

    $ma = $_POST['ma'];
    $masv = $_POST['masv'];
    $stt = $_POST['stt'];
    $output = "";
    
    $update = 'UPDATE tbl_nguyenvong SET stt=stt-1 WHERE masv=? AND stt>?';
    $del = 'DELETE FROM tbl_nguyenvong WHERE manvong=?;';
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $update);
    mysqli_stmt_bind_param($stmt, "ii",$masv,$stt);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_get_result($stmt);
    
    mysqli_stmt_prepare($stmt, $del);
    mysqli_stmt_bind_param($stmt, "i",$ma);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_get_result($stmt);  

         $select_query = "SELECT manvong, mavtdn,stt, x.tendn AS tendn, x.tenvt AS tenvt FROM tbl_nguyenvong,(SELECT tbl_vitridn.ma AS matim, tbl_doanhnghiep.tendn AS tendn , tbl_vitri.ten AS tenvt FROM tbl_vitridn, tbl_vitri , tbl_doanhnghiep WHERE mavt IS NOT NULL AND tbl_vitridn.madn IS NOT NULL AND mavt = tbl_vitri.ma AND tbl_vitridn.madn = tbl_doanhnghiep.madn) AS x WHERE mavtdn IS NOT NULL AND masv IS NOT NULL AND masv = '$masv' AND tbl_nguyenvong.mavtdn = x.matim ORDER BY stt ASC";
         $result = mysqli_query($conn, $select_query);
         $output .= '
          <table class="table table-bordered" id="bang">  
                        <tr>
                                
                                <th >STT</th>
                                <th >Tên doanh nghiệp</th>
                                <th >Tên vị trí</th>
                                <th class="text-center">Chức năng</th>
                       </tr>

         ';
         while($row = mysqli_fetch_array($result))
         {
            $temp = $row["manvong"];
            $output .= '<tr id ='.(string)$temp.'>';
                    
                    

                    $output .= "<td data-target='stt'>". $row['stt']."</td>";
                    $output .= '<td data-target="tendn">'.$row['tendn'].'</td>';
                    $output .= '<td data-target="tenvt">'.$row['tenvt'].'</td>';
                    $output .= '<td class="text-center">
					<a data-role="check" class="btn btn-success btn-sm" data-id="'.(string)$temp.'" style="color:#fff;">
					<i class="fas fa-folder"></i>
					Xem hạng</a>
					
					<a data-role="delete" class="btn btn-danger btn-sm" data-id="'.(string)$temp.'" style="color:#fff;">
					<i class="fas fa-trash"></i>
					Xóa</a>
					</td>';
                    
            $output .= '</tr>';
         }
         $output .= '</table>';
  //     }
        echo $output;