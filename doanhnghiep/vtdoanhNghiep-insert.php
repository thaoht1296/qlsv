<?php
//insert.php  
//
$connect = mysqli_connect("localhost", "root", "", "qlsv");
if(!empty($_POST))
{
    $output = '';
    $mavt= mysqli_real_escape_string($connect, $_POST["mavt"]);  
    $diem = mysqli_real_escape_string($connect, $_POST["diem"]); 
    
    $madn = mysqli_real_escape_string($connect, $_POST["madn"]); 

    $query = "INSERT INTO tbl_vitridn(madn,mavt, diem) VALUES('$madn','$mavt', '$diem')";
    
    if(mysqli_query($connect, $query))
    {
		$output = '';
         $select_query = "SELECT tbl_vitridn.ma, ten, tbl_vitridn.mota, diem FROM tbl_vitridn, tbl_vitri WHERE mavt IS NOT NULL AND madn IS NOT NULL AND mavt = tbl_vitri.ma AND madn = '$madn' ORDER BY diem DESC";
         $result = mysqli_query($connect, $select_query);
         $output .= '
          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%;">Chọn</th>
                    <th style="width: 10%;">Ten vị trí</th>
				   <th style="width: 20%;">Mô tả</th>
				   <th style="width: 15%;">Điểm</th>
					<th style="width: 15%;">Chức năng</th>
                  </tr>
                  </thead>

         ';
         while($row = mysqli_fetch_array($result))
         {
            $temp = $row["ma"];
            $output .= '<tr id ='.(string)$temp.'>';
                    $output .= '<td class="jsgrid-cell jsgrid-align-center"><input class= "checkbox" type="checkbox" id="'.(string)$temp.'" name="ma[]" ></td>';
                    $output .= "<td data-target='ten'>". $row['ten']."</td>";

                    $output .= '<td data-target="mota">'.$row['mota'].'</td>';
                    $output .= '<td data-target="diem">'.$row['diem'].'</td>';

                    $output .= '<td class="project-actions text-center"><a class="btn btn-success btn-sm "  data-role="update" data-id="'.(string)$temp.'"><i class="fas fa-pen">
                            </i>
                              Sửa</a></td>';

            $output .= '</tr>';
         }
         $output .= '</table>';
       }
        echo $output;
    
    
    
}


?>

