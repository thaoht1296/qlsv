<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    require_once '../../db.php';
    //echo("dang nhap xem bai viet");
    $sql = "SELECT * FROM tbl_baiviet WHERE trangthai = 1";
    $baiviet = $conn->query($sql);

?>

<?php
require('Classes/PHPExcel.php');
require('config.php');

if(isset($_POST['btnExport'])){
	$objExcel = new PHPExcel;
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('Danh sách Bài viết');
	//xem nguoi dung o dong nao
	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount, 'Mã bài viết');
	$sheet->setCellValue('B'.$rowCount, 'Mã doanh nghiệp');
	$sheet->setCellValue('C'.$rowCount, 'Tên công việc');
	$sheet->setCellValue('D'.$rowCount, 'Ngày đăng');
	$sheet->setCellValue('E'.$rowCount, 'Ngày hết hạn');
	$sheet->setCellValue('F'.$rowCount, 'Tên doanh nghiệp');
	$sheet->setCellValue('G'.$rowCount, 'About us');
	$sheet->setCellValue('H'.$rowCount, 'Mô tả công việc');
	$sheet->setCellValue('I'.$rowCount, 'Địa chỉ');
	$sheet->setCellValue('J'.$rowCount, 'Quyền lợi');
	$sheet->setCellValue('K'.$rowCount, 'Số lượng');
	$sheet->setCellValue('L'.$rowCount, 'Đối tượng');
	$sheet->setCellValue('M'.$rowCount, 'Trạng thái duyệt');
	
	
//	data tra ve
	$result = mysqli_query($conn, "SELECT * FROM tbl_baiviet WHERE trangthai=1");
	
//	set du lieu tra ve
	while($row = mysqli_fetch_array($result)){
		$rowCount++;
		$sheet->setCellValue('A'.$rowCount, $row['mabv']);
		$sheet->setCellValue('B'.$rowCount, $row['madn']);
		$sheet->setCellValue('C'.$rowCount, $row['tencv']);
		$sheet->setCellValue('D'.$rowCount, $row['ngaydang']);
		
		$sheet->setCellValue('E'.$rowCount, $row['ngayhethan']);
		$sheet->setCellValue('F'.$rowCount, $row['tendn']);
		$sheet->setCellValue('G'.$rowCount, $row['aboutus']);
		$sheet->setCellValue('H'.$rowCount, $row['motacv']);
		$sheet->setCellValue('I'.$rowCount, $row['diachi']);
		$sheet->setCellValue('J'.$rowCount, $row['quyenloi']);
		$sheet->setCellValue('K'.$rowCount, $row['soluong']);
		$sheet->setCellValue('L'.$rowCount, $row['aicothenop']);
		$sheet->setCellValue('M'.$rowCount, $row['trangthai']);
	}
	//xuat sang file excel
	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'ds-baiviet.xlsx';
	$objWriter->save($filename);
	header('Content-Disposition: attachment; filename="' . $filename .'"');//tra ve file kieu attachment
	
	//tra ve du lieu khi filename duoc chay
	header('Content-Type: application/vnd.openxmlformatsofficedocument .spreadsheetml] . sheet');
	//tra ve kich thuoc file
	header('Content-Length: ' . filesize($filename)); 
	//dinh dang kieu truyen file
	header('Content-Transfer-Encoding: binary');
	//kiem soat bo nho cache
	header('Cache-Control: must-revalidate'); header('Pragma: no-cache');
	//doc file
	readfile($filename);
	return;
}

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Thống kê bài viết</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- jsGrid -->
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid-theme.min.css">


  

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
        <a href="../../index.php" class="nav-link">Trang chủ</a>
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Thông báo</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 7 Email mới
            <span class="float-right text-muted text-sm">3 phút</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 Thông báo
            <span class="float-right text-muted text-sm">1 phút</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Xem tất cả thông báo</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../admin.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | Thống kê</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../admin.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Chỉnh sửa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../sinhvien/themSV.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sinh viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../doanhnghiep/themDN.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm doanh nghiệp</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Thống kê
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../sinhvien/thongKeSV.php" class="nav-link">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Sinh viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../doanhnghiep/thongKeDN.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doanh nghiệp</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="thongKeBV.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Hoạt động</li>
          <li class="nav-item">
            <a href="../mailbox.html" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Hộp thư
                <span class="badge badge-info right">25</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../lenLich.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Lên lịch sự kiện
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../baiviet/qlBaiDang.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Quản lý bài đăng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
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
            <h1>Thống kê bài viết</h1>
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
                <h3 class="card-title" style=" margin-top: .275em;">Thống kê bài viết</h3>
                <form method="post">
                <button type="submit" class="btn btn-primary btn-sm" name="btnExport" style="float: right; margin-right: .875em;"><i class="fas fa-plus">
                        </i> Xuất file</button>
              </form>
                <!-- <a name="create_excel" id="create_excel" class="btn btn-danger btn-xs" href="#" style=" margin-left: .875em;">
                 Xuất Excel</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 10%;">Tên công ty</th>
                    <th style="width: 10%;">Tên công việc</th>
                    <th style="width: 20%;">Ngày áp dụng - Ngày hết hạn</th>
                    <th style="width: 20%;">Yêu cầu</th>
                    <th style="width: 10%;">Số lượng</th>
                    <th style="width: 5%;">Trạng thái</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    
                    <?php while($row = mysqli_fetch_assoc($baiviet)): ?>
                    <tr>
                      
                      <td><?=$row['tendn'];?></td>
                      <td><?=$row['tencv'];?></td>
                      <td><?=$row['ngayapdung'].' đến '.$row['ngayhethan'];?></td>
                      <td><?=$row['aicothenop'];?></td>                     
                      <td><?=$row['soluong'];?></td>
                      <td><?=$row['trangthai'];?></td>
                      
                    </tr>
                    <?php endwhile;?> 
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
