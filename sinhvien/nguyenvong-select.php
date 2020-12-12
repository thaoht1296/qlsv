<?php  

        include("config.php");
        $masv = $_SESSION['masv'];
        $table = mysqli_query($conn, "SELECT manvong, mavtdn,stt, x.tendn AS tendn, x.tenvt AS tenvt FROM tbl_nguyenvong,(SELECT tbl_vitridn.ma AS matim, tbl_doanhnghiep.tendn AS tendn , tbl_vitri.ten AS tenvt FROM tbl_vitridn, tbl_vitri , tbl_doanhnghiep WHERE mavt IS NOT NULL AND tbl_vitridn.madn IS NOT NULL AND mavt = tbl_vitri.ma AND tbl_vitridn.madn = tbl_doanhnghiep.madn) AS x WHERE mavtdn IS NOT NULL AND masv IS NOT NULL AND masv = '$masv' AND tbl_nguyenvong.mavtdn = x.matim ORDER BY stt ASC");
        while($row = mysqli_fetch_array($table)){
            $temp = $row["manvong"];
            echo '<tr id ='.(string)$temp.'>';
                    
                    echo "<td data-target='stt'>". $row['stt']."</td>";
                    echo '<td data-target="tendn">'.$row['tendn'].'</td>';
                    echo '<td data-target="tenvt">'.$row['tenvt'].'</td>';

                    echo '<td class="project-actions text-center">
							<a data-role="check" class="btn btn-success btn-sm" data-id="'.(string)$temp.'" style="color:#fff;">
							<i class="fas fa-folder"></i>
							Xem hạng</a>
							<a data-role="delete" class="btn btn-danger btn-sm" data-id="'.(string)$temp.'" style="color:#fff;" >
							<i class="fas fa-trash"></i>
							Xóa</a>
						</td>';

        //data-role="check" data-id="'.(string)$temp.'"
            echo '</tr>';
    }
?>