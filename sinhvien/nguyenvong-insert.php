<?php

$connect = mysqli_connect("localhost", "root", "", "qlsv");
if(!empty($_POST))
{
    $output = '';
    $masv= mysqli_real_escape_string($connect, $_POST["masv"]);
    $mavt = mysqli_real_escape_string($connect, $_POST["mavtdn"]); 
    
    $stt = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM tbl_nguyenvong WHERE masv='$masv'" )) + 1 ;

    $query = "INSERT INTO tbl_nguyenvong(masv,mavtdn,stt) VALUES('$masv','$mavt','$stt')";
    
    if(mysqli_query($connect, $query))
    {
         $select_query = "SELECT manvong, mavtdn,stt, x.tendn AS tendn, x.tenvt AS tenvt FROM tbl_nguyenvong,(SELECT tbl_vitridn.ma AS matim, tbl_doanhnghiep.tendn AS tendn , tbl_vitri.ten AS tenvt FROM tbl_vitridn, tbl_vitri , tbl_doanhnghiep WHERE mavt IS NOT NULL AND tbl_vitridn.madn IS NOT NULL AND mavt = tbl_vitri.ma AND tbl_vitridn.madn = tbl_doanhnghiep.madn) AS x WHERE mavtdn IS NOT NULL AND masv IS NOT NULL AND masv = '$masv' AND tbl_nguyenvong.mavtdn = x.matim ORDER BY stt ASC";
         $result = mysqli_query($connect, $select_query);
         $output .= '
          <table class="table table-head-fixed text-nowrap">  
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
                    $output .= '<td class="project-actions text-center">
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
       }
        echo $output;
    
    
    
}


?>

