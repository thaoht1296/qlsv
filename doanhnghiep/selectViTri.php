<?php 

include "config.php";

$sql = "SELECT * FROM tbl_ViTri;";

$result = mysqli_query($conn,$sql);

$data = array();

while( $row = mysqli_fetch_array($result) ){
    $ma = $row['ma'];
    $ten = $row['ten'];
    $data[] = array("id" => $ma, "name" => $ten);
}
header('contentitype: application/json');
// encoding array to json format
echo json_encode($data);

