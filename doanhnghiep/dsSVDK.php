<!DOCTYPE html>
<?php  
    session_start();
    $_SESSION['madn'] = 11;
//    echo $_SESSION['madn'];
 ?> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ứng viên</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- jsGrid -->
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid-theme.min.css">
    <style>
        .cl{
          background-color: #153657 !important; 
        }
        .active{
          background-color: crimson !important; 
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
        <a href="index.php" class="nav-link">Trang chủ</a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4 cl">
    <!-- Brand Logo -->
    <a href="../doanhNghiep.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Doanh nghiệp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/doanhnghiep.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="suaTTDN.php" class="d-block">Tên doanh nghiệp</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="../doanhNghiep.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Quản lý bài đăng
                  </p>
                </a>
              </li>
         <!-- <li class="nav-item">
            <a href="themBV.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Thêm bài viết
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="dsSVDK.php" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>Danh sách đăng kí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dsViTriDN.php" class="nav-link">
              <i class="nav-icon far fas fa-briefcase"></i>
              <p>Danh sách vị trí</p>
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
            <h1>Thống kê sinh viên</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style=" margin-top: .275em;">Thống kê sinh viên</h3>
				  

                <!-- <a class="btn btn-primary btn-sm" href="#" style=" margin-left: .875em;">
                  <i class="fas fa-plus">
                  </i>
                  Nhận
                </a>
                  <a class="btn btn-danger btn-sm" href="#" style=" margin-left: .875em;">
                      <i class="fas fa-trash">
                      </i>
                       Loại
                  </a> -->

				<br>
			   <?php 
            include_once "config.php";
            //echo "kết nối dssvdky";
            $madn = $_SESSION['madn'];
            $sql = "SELECT tbl_vitridn.ma, tbl_vitri.ten FROM tbl_vitridn, tbl_vitri WHERE tbl_vitridn.madn = '$madn' AND tbl_vitridn.mavt = tbl_vitri.ma ;";
            $result = mysqli_query($conn,$sql);
            //echo "kết nối dssvdky";
				;?>

				<br>
				<!-- <label>Chọn ví trí  :</label>
				<select id="vitri">
				   <option value='0'>- Select -</option>
					<?php
            // echo "kết nối dssvdky";
						// while( $row = mysqli_fetch_array($result) ){
						// 	$ma = $row['ma'];
						// 	$ten = $row['ten'];
						// 	echo "<option value='$mavt'>$ten</option>";
            // }
            // echo "kết nối dssvdky";
					 ?>
         		</select> -->
              </div>
              
              <!-- /.card-header -->
              <div class="card-body" id="dn_table">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th >Mã sv</th>
                      <th >Tên sv</th>
                      <th >STT</th>
                      <th >Ngành</th>
                      <th >Điểm</th>
                      <th >Tên vị trí</th>
                    </tr>
                  </thead>
                  <?php
                    //echo 'lọc sinh viên đăng kí';
                    include_once("dssv-select.php");
                    //echo 'lọc sinh viên đăng kí';
                  ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  // $(function () {
  //   $("#example1").DataTable({
  //     "responsive": true,
  //     "autoWidth": false,
  //   });
  //   $('#example2').DataTable({
  //     "paging": true,
  //     "lengthChange": false,
  //     "searching": false,
  //     "ordering": true,
  //     "info": true,
  //     "autoWidth": false,
  //     "responsive": true,
  //   });
  // });
  
  $(document).ready(function(){

    $("#vitri").change(function(){
        var madn = <?php echo $_SESSION['madn'];?>;
        var mavt = $(this).val();
        //$('#vitri').children("option:selected").val();
        console.log(madn);
        console.log(ma);               
        $.ajax({
            url: 'filterViTri.php',
            type: 'post',
            data: {madn: madn, mavt : mavt},
            success:function(response){
                $('#dn_table').html(response);
                
            }
        });
    });

});
</script>
</body>
</html>
