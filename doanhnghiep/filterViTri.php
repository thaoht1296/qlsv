<?php
    include_once("config.php");
    //$madn = 11;
    $madn = $_POST['madn'];
    //$mavt = 901;
    $mavt= $_POST['mavt'];

        $output = '';
        
        $result = mysqli_query($conn, "SELECT xx.ma AS ma, masv, ho, xx.ten, stt, nganh, xx.diem, tbl_vitri.ten FROM (SELECT x.ma AS ma ,masv, ho, ten, stt, nganh, mavt, madn , x.diem FROM (SELECT tbl_nguyenvong.manvong AS ma, tbl_sinhvien.masv, mavtdn, ho, ten, stt, nganh, tbl_sinhvien.diem FROM tbl_nguyenvong, tbl_sinhvien WHERE tbl_nguyenvong.masv = tbl_sinhvien.masv) AS x, tbl_vitridn WHERE x.mavtdn = tbl_vitridn.ma) AS xx, tbl_vitri WHERE xx.madn = '$madn' AND xx.mavt = '$mavt' AND xx.mavt = tbl_vitri.ma ORDER BY diem DESC");
        $output .= '
         <table table id="example1" class="table table-bordered table-striped">
            <tr>

                <th >Ma sv</th>
                <th >Tên sv</th>
			   <th >STT</th>
			   <th >Ngành</th>
			   <th >Điểm</th>
			   <th >Tên vị trí</th>
      
            </tr>

        ';
        while($row = mysqli_fetch_array($result))
        {
            $temp = $row["ma"];
			$output .= '<tr>';
            $output .= "<td data-target='masv'>". $row['masv']."</td>";
            $output .= '<td data-target="tensv">'.$row['ho']." ".$row['ten'].'</td>';
            $output .= '<td data-target="stt">'.$row['stt'].'</td>';
            $output .= '<td data-target="nganh">'.$row['nganh'].'</td>';
            $output .= '<td data-target="vitri">'.$row['diem'].'</td>';
            $output .= '<td data-target="diem">'.$row['ten'].'</td>';
			$output .= '</tr>';
        }
        $output .= '</table>';
            
        echo $output;
   // }

?>