<?php 

include "config.php";

$madn = $_POST['madn'];

$sql = "SELECT tbl_ViTridn.ma, tbl_vitri.ten FROM tbl_ViTridn, tbl_vitri WHERE tbl_ViTridn.madn = '$madn' AND tbl_ViTridn.mavt = tbl_vitri.ma ;";

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

?>