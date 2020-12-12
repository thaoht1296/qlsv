<?php  

    include_once("config.php");
    $table = mysqli_query($conn, "SELECT * FROM tbl_doanhnghiep WHERE ma_nguoidung IS NOT NULL");
    while($row = mysqli_fetch_array($table)){
            $temp = $row["madn"];
            echo '<tr id ='.(string)$temp.'>';
                    echo '<td class="jsgrid-cell jsgrid-align-center"><input class= "checkbox" type="checkbox" id="'.(string)$temp.'" tendn="madn[]" ></td>';
                    echo "<td data-target='tendn'>". $row['tendn']."</td>";
                    echo '<td data-target="diachi">'.$row['diachi'].'</td>';
                    echo '<td class="project-actions text-center"><a class="btn btn-success btn-sm"  data-role="update" data-id="'.(string)$temp.'"><i class="fas fa-tools">
                        </i>
                        Sửa</a></td>';
            echo '</tr>';
    }
?>