<?php  

include("config.php");
	$madn = $_SESSION['madn'];
	// lấy các vị trị của 1 doanh nghiệp mà nhân viên đó thuộc doanh nghiệp đó
    $table = mysqli_query($conn, "SELECT tbl_vitridn.ma, ten, tbl_vitridn.mota, diem FROM tbl_vitridn, tbl_vitri WHERE mavt IS NOT NULL AND madn IS NOT NULL AND mavt = tbl_vitri.ma AND madn = '$madn'");
    while($row = mysqli_fetch_array($table)){
		$temp = $row["ma"];
		echo '<tr id ='.(string)$temp.'>';
		echo '<td class="jsgrid-cell jsgrid-align-center"><input class= "checkbox" type="checkbox" id="'.(string)$temp.'" name="ma[]" ></td>';
		echo "<td data-target='ten'>". $row['ten']."</td>";
//		echo '<td data-target="mota">'.$row['mota'].'</td>';
		echo '<td data-target="diem">'.$row['diem'].'</td>';
		echo '<td class="project-actions text-center"><a class="btn btn-success btn-sm "  data-role="update" data-id="'.(string)$temp.'"><i class="fas fa-pen">
						</i>
						  Sửa</a></td>';

		echo '</tr>';
    }
?>