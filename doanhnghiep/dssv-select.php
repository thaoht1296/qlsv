<?php  

	include_once("config.php");
	//echo ("lọc sinh viên");
    $madn = $_SESSION['madn'];
    $table = mysqli_query($conn, "SELECT xx.ma AS ma, masv, ho, xx.ten, stt, nganh, xx.diem, tbl_vitri.ten AS tenvt FROM (SELECT x.ma AS ma ,masv, ho, ten, stt, nganh, mavt, madn , x.diem FROM (SELECT tbl_nguyenvong.manvong AS ma, tbl_sinhvien.masv, mavtdn, ho, ten, stt, nganh, tbl_sinhvien.diem FROM tbl_nguyenvong, tbl_sinhvien WHERE tbl_nguyenvong.masv = tbl_sinhvien.masv) AS x, tbl_vitridn WHERE x.mavtdn = tbl_vitridn.ma) AS xx, tbl_vitri WHERE xx.madn = '$madn' AND xx.mavt = tbl_vitri.ma");
    while($row = mysqli_fetch_array($table)){
		//echo 'lọc sinh viên đăng kí';
		$temp = $row["ma"];
		echo '<tr id ='.(string)$temp.'>';
		echo "<td data-target='masv'>". $row['masv']."</td>";
		echo '<td data-target="tensv">'.$row['ho']." ".$row['ten'].'</td>';
		echo '<td data-target="stt">'.$row['stt'].'</td>';
		echo '<td data-target="nganh">'.$row['nganh'].'</td>';
		echo '<td data-target="vitri">'.$row['diem'].'</td>';
		echo '<td data-target="diem">'.$row['tenvt'].'</td>';
		echo '</tr>';
	}
	
?>