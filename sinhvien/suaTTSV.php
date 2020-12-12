
<!DOCTYPE html>

<html lang="en">

<?php 
    session_start();
    include('../db.php');
    
?>
<?php
	  $tenDangNhap = $_SESSION['tenDangNhap'];
    $sql = "SELECT * FROM tbl_nguoidung, tbl_sinhvien WHERE tenDangNhap = '$tenDangNhap' AND ma = ma_nguoidung";
    //echo "thao linh tinh";
    $result = $conn->query($sql);
    while ($row_pro = mysqli_fetch_array($result)) {
          $masv = $row_pro['masv'];
          $ma_nguoidung = $row_pro['ma_nguoidung'];
          $ten = $row_pro['ten'];
          $email = $row_pro['email'];
          $nganh = $row_pro['nganh'];
          $quequan = $row_pro['quequan'];
          $diem = $row_pro['diem'];
          $ngaysinh = $row_pro['ngaysinh'];

    }
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chỉnh sửa | Sinh viên</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
    .cl{
      background-color: #009688 !important; 
    }
  </style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Trang chủ</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-teal elevation-4 cl">
    <!-- Brand Logo -->
    <a href="../sinhVien.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sinh viên</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/sinhvien.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="../sinhvien/suaTTSV.php" class="d-block" style="text-decoration: underline; color: rgb(255, 255, 255);">Tên sinh viên</a>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="../sinhvien/danhsachBaiDang.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Dánh sách bài đăng
                  </p>
                </a>
              </li>
         <li class="nav-item">
            <a href="../sinhvien/suaNVong.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p >
                Chỉnh sửa nguyện vọng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../sinhvien/dsNVong.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Xem hạng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Đăng xuất
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa thông tin sinh viên</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Sửa thông tin</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Tên sinh viên:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" id="ten" class="form-control" name="ten">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                      <div class="form-group">
                        <label>Email:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                          </div>
                          <input type="email" id="email" class="form-control" name="email" >
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
      
                      <div class="form-group">
                        <label>Ngày sinh:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask name="ngaysinh">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
      
                      <div class="form-group">
                        <label>Ngành:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                          </div>
                          <input type="text" class="form-control" name="nganh">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                      <div class="form-group">
                        <label>Điểm:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-marker"></i></span>
                          </div>
                          <input type="text" class="form-control" name="diem">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label>Quê quán:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                          </div>
                          <input type="text" class="form-control" name="quequan">
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary " name="update">Xác nhận</button>
                      </div>
                  </div>
                  <!-- /.card -->
                </form>
                </div>

                <!-- /.col (right) -->
                <div class="col-md-6">
                  <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Sửa tài khoản</h3>
                      </div>
                      <div class="card-body">
                      <form  method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>Tài khoản</label>
        
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="mkhientai" required>
                          </div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
        
                        <div class="form-group">
                          <label>Mật khẩu hiện tại:</label>
        
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="mkhientai" required>
                          </div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                          <label>Mật khẩu mới:</label>
        
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="mkmoi" required>
                          </div>
                          <!-- /.input group -->
                        </div>
                        
                        <div class="form-group">
                            <label>Xác nhận lại mật khẩu:</label>
          
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                              <input type="password" class="form-control" name="mkxacnhan" required>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                          <button type="submit" class="btn btn-primary" name="update_password">Xác nhận</button>
                      </div>
                     </form>
                    </div>
                    <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 1999-2020 <a href="https://hoanghuongthao.blogspot.com/">DH.hoangthao</a>.</strong>
    Chúng tôi luôn bên bạn
    <div class="float-right d-none d-sm-inline-block">
      <b>Phiên bản</b> thao.at
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })

    $('[data-mask]').inputmask()
  })
</script>


</body>
</html>
<!-- sua sesstion -->
<?php
	if(isset($_POST['update'])){
        //echo("thảo linh tinh");
        $ma = $ma_nguoidung;
        $masv_1 = $masv;
	    	$email = $_POST['email'];
        $quequan = $_POST['quequan'];
        $ten = $_POST['ten'];
        $nganh = $_POST['nganh'];
        $diem = $_POST['diem'];
        $ngaysinh = $_POST['ngaysinh'];

        $updateSV = "UPDATE tbl_sinhvien SET quequan = '$quequan', email = '$email', ten = '$ten', 
                    nganh = '$nganh', diem= '$diem', ngaysinh = '$ngaysinh' WHERE ma_nguoidung = '$ma'";
        $updateNguoiDung = "UPDATE tbl_nguoidung SET  email = '$email' WHERE ma = '$ma'";
        $run_query = $conn->query($updateSV);
        $run_1_query = $conn->query($updateNguoiDung);
		if($run_query &&  $run_1_query){
			echo "<script>alert('Tài khoản của bạn đã được cập nhật thành công')</script>";
			echo "<script>window.open('suaTTSV.php','_self')</script>";
		}
  }
  $tenDangNhap = $_SESSION['tenDangNhap'];
	if(isset($_POST['update_password'])){
		//$ip = getIp();
		$current_password = md5($_POST['mkhientai']);
		$new_password = md5($_POST['mkmoi']);
		$confirm_password = md5($_POST['mkxacnhan']);

		$sqlPass = "SELECT * FROM tbl_nguoidung WHERE matKhau = '$current_password' AND tenDangNhap = '$tenDangNhap'";
		$runPass = $conn->query($sqlPass);
		$checkPass = mysqli_num_rows($runPass);
		if($checkPass == 0){
			echo "<script>alert('Mật khẩu hiện tại của bạn sai')</script>";
			exit();
		}
		if($confirm_password != $new_password){
			echo "<script>alert('Mật khẩu của bạn không khớp')</script>";
			exit();
		}
		else{
			$updatePassword = "UPDATE tbl_nguoidung SET matKhau = '$new_password' WHERE tenDangNhap = '$tenDangNhap'";
			$runUpdate = $conn->query($updatePassword);
			echo "<script>alert('Mật khẩu của bạn đã được cập nhật thành công!')</script>";
			echo "<script>window.open('suaTTSV.php','_self')</script>";
		}
	}
?>