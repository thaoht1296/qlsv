<?php  

	//include_once("config.php");
	$conn = mysqli_connect("localhost", "root", "", "qlsv");
    $table = mysqli_query($conn, "SELECT * FROM tbl_sinhvien WHERE ma_nguoidung IS NOT NULL");
    while($row = mysqli_fetch_array($table)){
            $temp = $row["masv"];
            echo '<tr id ='.(string)$temp.'>';
			echo '<td class="jsgrid-cell jsgrid-align-center"><input class= "checkbox" type="checkbox" id="'.(string)$temp.'" ho="masv[]" ></td>';
			echo "<td data-target='ho'>". $row['ho']."</td>";
			echo '<td data-target="ten">'.$row['ten'].'</td>';
			echo '<td data-target="email">'.$row['email'].'</td>';
			echo '<td data-target="ngaysinh">'.$row['ngaysinh'].'</td>';
			echo '<td data-target="nganh">'.$row['nganh'].'</td>';
			echo '<td data-target="diem">'.$row['diem'].'</td>';
			echo '<td data-target="quequan">'.$row['quequan'].'</td>';

			echo ' <td><a class="btn btn-success btn-sm" href="#" data-role="update" data-id="'.(string)$temp.'"><i class="fas fa-tools">
			</i>Sửa</a></td>';

            echo '</tr>';
    }
?>