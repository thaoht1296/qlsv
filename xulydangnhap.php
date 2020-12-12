
<?php
    /*  include_once: them file và hiển thị lỗi n vẫn tiếp tục chạy code phía dưới
        require_once: them file và hiển thị lỗi nếu có lỗi thì dừng
        cookie: lưu tại browser, time sống do mk thiết lập
        ession: bắt đầu 1 phiên và kết thúc khi đóng trình duyệt
    */

    include_once("db.php");
    session_start();
    $error = "";
    
    // 'start thực hiện kiểm tra dữ liệu người dùng đăng ký'
    if( isset($_POST['login'])){
        //echo("dang nhap");
        if(!isset($_POST['username'], $_POST['password'])){
                //$error = "Chưa nhập tài khoản/mật khẩu";
                echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Chưa nhập tài khoản/mật khẩu')
                        window.location.href='javascript:history.go(-1)';</SCRIPT>");
        } 
        else{
            $username = $_POST["username"];
            $password = $_POST["password"];

            //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
            //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
            //Làm sạch thông tin, xóa bỏ các tag html

            $username = strip_tags($username);
            $password = strip_tags($password);

            //Bỏ đi các kí tự gây lỗi injection
            $username = addslashes($username);
            $password = addslashes($password);

            //mã hóa mật khẩu bằng hàm băm md5
            $password = md5($password);
            if ($username == "" || $password =="") {
                echo "định dạng không hợp lệ!";
                exit;
            }
            else{
                $sql = "SELECT * FROM tbl_nguoidung WHERE tenDangNhap= '$username' AND matKhau = '$password'";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "ss", $_POST['username'], $_POST['password']);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1 ){
                    $row = mysqli_fetch_assoc($result);
                    session_regenerate_id();
                    
                    // thông tin người dùng nhập khớp với thông tin trong database 
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['tenDangNhap'] = $row['tenDangNhap'];
                    $_SESSION['ma'] = $row['ma'];
                    $_SESSION['quyen'] = $row['quyen'];

                    if(isset($_POST['name'])){
                        setcookie("tenDangNhap",$row['tenDangNhap'],time() + 86400,'/','',0,0);
                        setcookie("matKhau",$row['matKhau'],time() + 86400,'/','',0,0);
                        setcookie("quyen",$row['quyen'],time() + 86400,'/','',0,0);
                    }
                    if( strcasecmp( $row['quyen'],'admin' ) == 0 ){
                        header("Location: admin.php");
                      
                    }
                    else if(strcasecmp( $row['quyen'],'nhanvien' ) == 0){
                        $sv = "SELECT * FROM tbl_doanhnghiep WHERE ma_nguoidung = ?";
                        mysqli_stmt_prepare($stmt, $sql);
                        mysqli_stmt_bind_param($stmt, "i", $_SESSION['ma']);
                        mysqli_stmt_execute($stmt);
                        $rs = mysqli_stmt_get_result($stmt);
                        $record = mysqli_fetch_assoc($rs);
                        $_SESSION['tendn'] = $record['tendn'];
                        $_SESSION['diachi'] = $record['diachi'];
                        $_SESSION['madn'] = $record['madn'];
                        header("Location: doanhnghiep.php");
                    }   
                    else{
                        echo("đăng nhập thành công");
                        $sv = "SELECT * FROM tbl_sinhvien WHERE ma_nguoidung = ?";
                        mysqli_stmt_prepare($stmt, $sql);
                        mysqli_stmt_bind_param($stmt, "i", $_SESSION['ma']);
                        mysqli_stmt_execute($stmt);
                        $rs = mysqli_stmt_get_result($stmt);
                        $record = mysqli_fetch_assoc($rs);
                        $_SESSION['masv'] = $record['masv'];
                        $_SESSION['tensv'] = $record['tensv'];
                        $_SESSION['email'] = $record['email'];
                        header("Location: sinhVien.php");
                    }
                }
                else{
                    //header("Location: http://localhost/web/index.html");
                    // $error = "tài khoản/mật khẩu sai!";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Tài khoản hoặc mật khẩu sai! Yêu cầu nhập lại')
                        window.location.href='javascript:history.go(-1)';</SCRIPT>");       
                }
                $stmt->close();
            } 
        }          
    } 
?>