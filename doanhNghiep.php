<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doanh nghiệp</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- jsGrid -->
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <style>
    .cl{
      background-color: #153657 !important; 
    }
    .active{
      background-color: crimson !important; 
    }
  </style>
</head>

<?php 
//  echo "login vao them bai viet doanh nghiep";
  session_start();
  include 'db.php';
?>

<?php 
    $tennv = $_SESSION['tenDangNhap'];
    $sql = "SELECT * FROM tbl_nguoidung, tbl_doanhnghiep WHERE tenDangNhap = '$tennv' 
    AND tbl_nguoidung.ma = tbl_doanhnghiep.ma_nguoidung";
    $result = $conn->query($sql);
    while ($row_pro = mysqli_fetch_array($result)) {
      $madn = $row_pro['madn'];
      $tendn = $row_pro['tendn'];
      $ma_nguoidung = $row_pro['ma'];
      $matKhau = $row_pro['matKhau'];
      $email = $row_pro['email'];
      $diachi = $row_pro['diachi'];
    }
    //echo "linhtinh";
?>

<?php 
  if(!isset($_SESSION['tenDangNhap'])){
      echo "<script>window.open('dangnhap.php','_self')</script>";
    }else{
?>
    
<body class="hold-transition cl sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
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
    <a href="doanhNghiep.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Doanh nghiệp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/doanhnghiep.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="./doanhnghiep/suaTTDN.php" class="d-block">Tên doanh nghiệp</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="doanhNghiep.php" class="nav-link  active">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Quản lý bài đăng
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="doanhnghiep/dsSVDK.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Danh sách đăng kí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="doanhnghiep/dsViTriDN.php" class="nav-link">
              <i class="nav-icon far fas fa-briefcase"></i>
              <p>Danh sách vị trí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../qlsv/logout.php" class="nav-link">
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
          <h1>Quản lý bài đăng</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

    <?php
      if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $conn->query("DELETE FROM tbl_baiviet WHERE mabv = '$id'");
        //header('Location: ../qlsv/doanhNghiep.php'); // can chinh sua
      }

      if(isset($_GET['add']) || isset($_GET['edit'])){
          $tencv = "";
          $ngaydang = null; 
          $ngayapdung = null;
          $ngayhethan = null;
          //$tendn = $tendn; 
          $aboutus ="";       
          $motacv = "";
          //$diachi = $_SESSION['diachi'];    
          $quyenloi = "";
          $soluong = "";
          $aicothenop = "";

        if(isset($_GET['edit'])){
          $edit_id = (int)$_GET['edit'];
          $baivietResults = $conn->query("SELECT * FROM tbl_baiviet WHERE mabv = '$edit_id'");
          $baiviet = mysqli_fetch_assoc($baivietResults);
          $tencv = $baiviet['tencv'];
          $ngaydang = $baiviet['ngaydang']; 
          $ngayapdung = $baiviet['ngayapdung'];
          $ngayhethan = $baiviet['ngayhethan'];
          $tendn = $baiviet['tendn']; 
          $aboutus =$baiviet['aboutus'];       
          $motacv = $baiviet['motacv'];
          $diachi = $baiviet['diachi'];    
          $quyenloi = $baiviet['quyenloi'];
          $soluong = $baiviet['soluong'];
          $aicothenop = $baiviet['aicothenop'];
          
        }

        if($_POST){
          $tencv = $_POST['tencv'];
          $ngaydang = $_POST['ngaydang']; 
          $ngayapdung = $_POST['ngayapdung'];
          $ngayhethan = $_POST['ngayhethan'];
          $tendn = $_POST['tendn']; 
          $aboutus =$_POST['aboutus'];       
          $motacv = $_POST['motacv'];
          $diachi = $_POST['diachi'];    
          $quyenloi = $_POST['quyenloi'];
          $soluong = $_POST['soluong'];
          $aicothenop = $_POST['aicothenop'];
          $insertSql = "INSERT INTO tbl_baiviet (`tencv`,`madn`,`ngaydang`,`ngayapdung`,`ngayhethan`,`tendn`,`aboutus`,`motacv`,`diachi`,`quyenloi`,`soluong`,`aicothenop`,`trangthai`) 
                        VALUES ('$tencv','$madn','$ngaydang','$ngayapdung','$ngayhethan','$tendn','$aboutus','$motacv','$diachi','$quyenloi','$soluong','$aicothenop', 0)";
          if(isset($_GET['edit'])){
            $insertSql = "UPDATE tbl_baiviet SET tencv = '$tencv', madn = '$madn', ngaydang = '$ngaydang', ngayapdung = '$ngayapdung', 
            ngayhethan = '$ngayhethan',tendn= '$tendn', aboutus = '$aboutus', motacv = '$motacv', diachi= '$diachi', quyenloi = '$quyenloi',soluong = '$soluong', 
                          aicothenop = '$aicothenop' , trangthai = 0 WHERE mabv = '$edit_id'";
            echo "<script>alert('Sửa thông tin thành công!')</script>";
            echo "<script>window.open('doanhNghiep.php','_self')</script>";
          }
          $conn->query($insertSql);
          echo "<script>alert('Thêm bài viết thành công!')</script>";
          echo "<script>window.open('doanhNghiep.php','_self')</script>";
        }
    ?>
  <section class="content">

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          
          <div class="col-md-8">
          
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?=((isset($_GET['edit']))?'Sửa':'Thêm');?> bài đăng</h3>
              </div>
              <!-- /.card-header -->
<!-- form start -->
              <form action="doanhNghiep.php?<?=((isset($_GET['edit']))?'edit='.$edit_id:'add=1');?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

<!-- Tên cv-->
                    <div class="form-group">
                  <label for="tencv">Tên công việc</label>
                  <input type="text" class="form-control"   id="tencv" name="tencv" value="<?=$tencv;?>" required>
                </div>
<!--Ngày up-->
                    <div class="form-group">
                  <label for="ngaydang">Ngày đăng:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask name="ngaydang"
                    id="ngaydang" name="ngaydang" class="form-control" value="<?=$ngaydang;?>">
                  </div>
                  <!-- /.input group -->
                </div>
<!--Ngày start-->
                    <div class="form-group">
                  <label for="ngayapdung">Ngày bắt đầu:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" 
                    data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask name="ngayapdung"
                    id="ngayapdung" name="ngayapdung" value="<?=$ngayapdung;?>" required>
                  </div>
                  <!-- /.input group -->
                </div>

<!--Ngày end-->
                    <div class="form-group">
                  <label for="ngayhethan">Ngày kết thúc:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask name="ngayhethan" id="ngayhethan" name="ngayhethan" value="<?=$ngayhethan;?>" required>
                  </div>
                  <!-- /.input group -->
                </div>
            
<!--Thông tin-->
                    <div class="form-group">
                  <label for="aboutus">Thông tin về công ty</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="aboutus" name="aboutus" rows="3" value="<?=$aboutust;?>" required></textarea>
                    </div>
                </div>
<!--Mô tả-->
                    <div class="form-group">
                  <label for="motacv">Mô tả công việc</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="motacv" name="motacv" rows="3" value="<?=$motacv;?>" required></textarea>
                    </div>
                </div>
<!--Quyền lợi-->
                    <div class="form-group">
                  <label for="quyenloi">Quyền lợi</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                id="motacv" name="motacv" rows="3" required></textarea>
                    </div>
                </div>
<!--Số lượng-->
                    <div class="form-group">
                  <label for="soluong">Số lượng</label>
                  <input type="text" class="form-control" type="text" 
                  id="soluong" name="soluong" value="<?=$soluong;?>" required>
                </div>
<!--Yêu cầu-->
                    <div class="form-group">
                    <label for="aicothenop">Yêu cầu</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder=""
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                        id="aicothenop" name="aicothenop" rows="3" value="<?=$aicothenop;?>" required></textarea>
                    </div>
                    </div>

                </div>
<!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="add"><?=((isset($_GET['edit']))?'Sửa':'Thêm');?>bài viết</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <div class="col-md-2">
            
            </div>
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?php } 
  else{
  $sql = "SELECT * FROM tbl_baiviet WHERE madn = '$madn'";
  $presults = $conn->query($sql);        
?>

  <!-- Main content -->
  <section class="content">
    
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"  style="margin-top: .165em; font-size: 24px;">Danh sách</h3>

        <a class="btn btn-success btn-sm" href="doanhNghiep.php?add=1"  id="add-product-btn" style="margin-left: .875em;">
          <i class="fas fa-plus">
          </i>
          Thêm
          </a>
<!--          <div class="clearfix"></div><br>-->
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 15%">Tên công việc</th>
              <th class="text-center" style="width: 10%">Số lượng</th>
              <th style="width: 15%">Ngày đăng</th>
              <th style="width: 20%">Thời hạn</th>
              <th class="text-center" style="width: 10%">Trạng thái</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php 
              $sql = "SELECT * FROM tbl_baiviet WHERE  madn = '$madn'";
              $baiviet = $conn->query($sql);
          ?>
              
          <?php while($row_baiviet = mysqli_fetch_assoc($baiviet)):?>
              <tr>
                <td>
                  <?=$row_baiviet['tencv']?>
                </td>
                <td class="text-center">
                  <?=$row_baiviet['soluong'];?>         
                </td>
                <td>
                  <?=$row_baiviet['ngaydang'];?>
                </td>
                  <td class="project_progress">
                <?=$row_baiviet['ngayapdung'].' đến '.$row_baiviet['ngayhethan'];?>
                </td>
                <td class="project-state text-center">
                    <span class="badge badge-danger"><?=$row_baiviet['trangthai'];?></span>
                </td>
                <td class="project-actions text-right">
                  
                  <a class="btn btn-primary btn-sm" href="../qlsv/doanhnghiep/xembaiDangDN.php?baiviet=<?=$row_baiviet['mabv'];?>">
                  <i class="fas fa-folder"></i> Xem
                  </a>

                  <a class="btn btn-success btn-sm"  href="../qlsv/doanhNghiep.php?edit=<?=$row_baiviet['mabv'];?>">
                  <i class="far fa-edit"></i>
                  sửa</a>

                  <a class="btn btn-danger btn-sm"  href="../qlsv/doanhNghiep.php?delete=<?=$row_baiviet['mabv'];?>">
                  <i class="far fa-trash"></i>
                  Xóa</a>
                </td>
              </tr>
            <?php endwhile;?>
          </tbody>
        </table>
      </div>
        <!-- /.card-body -->
    </div>
      <!-- /.card -->
  </section>
  <?php } } ?>

</div>

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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })

    $('[data-mask]').inputmask()
      
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