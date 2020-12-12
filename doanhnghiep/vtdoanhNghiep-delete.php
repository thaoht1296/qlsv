<?php
	//include("config.php");
$conn = mysqli_connect("localhost", "root", "", "qlsv");
	//$userObj = mysqli_query($conn, "SELECT * FROM `user` ");
	
	if(isset($_POST['data'])){
		
		$dataArr = $_POST['data'];
		$del = 'DELETE FROM tbl_vitridn WHERE ma=?;';
                
                $stmt = mysqli_stmt_init($conn);
               // $stmt2 = mysqli_stmt_init($conn);
                //mysqli_stmt_prepare($stmt, $sql);
		foreach($dataArr as $id){
                    mysqli_stmt_prepare($stmt, $del);
                    mysqli_stmt_bind_param($stmt, "i",$id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_get_result($stmt);   
		}
	
	}