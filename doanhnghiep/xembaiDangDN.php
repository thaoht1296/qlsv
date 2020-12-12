<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiêu đề bài viết</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
    session_start();
    include_once("../db.php");
    $sql = "SELECT * FROM tbl_baiviet";
    $baiviet = $conn->query($sql);
    //echo "kết nôi dữ liệu bài viết";
?>
<?php 
  // Lấy thông tin chi tiết v bài viết tuyển dụng
  if(isset($_GET['baiviet'])){
    //echo "vào chi tiết bài viết";
    $id =filter_var((int)$_GET['baiviet'], FILTER_VALIDATE_INT);
    $sql = "SELECT * FROM tbl_baiviet WHERE mabv = '$id'";
    $sqlResult = $conn->query($sql);
    $internshipCount = mysqli_num_rows($sqlResult);
    if($internshipCount > 0){
      while ($row = mysqli_fetch_array($sqlResult)) {
        $tencv = $row['tencv'];
        $tendn= $row['tendn'];
        $ngaydang = $row['ngaydang'];
        $ngayapdung = $row['ngayapdung'];
        $ngayhethan = $row['ngayhethan'];
        $aboutus = $row['aboutus'];
        $motacv = $row['motacv'];
        $soluong = $row['soluong'];
        $diachi = $row['diachi'];
        $quyenloi = $row['quyenloi'];
        $aicothenop = $row['aicothenop'];
        $madn= $row['madn'];
      }
    }else{
      echo "Vị trí thực tập này không tìm thấy";
      exit();
    }
  }
  else{
    echo "Dữ liệu bị thiếu, vui lòng chọn thực tập";
    exit();
  }
  ?>
<body class="hold-transition sidebar-mini sidebar-collapse">
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4 cl">
    <!-- Brand Logo -->
    <a href="doanhNghiep.php" class="brand-link">
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
          <a href="../doanhnghiep/suaTTDN.php" class="d-block">Tên doanh nghiệp</a>
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
            <a href="../doanhnghiep/dsSVDK.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Danh sách đăng kí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../doanhnghiep/dsViTriDN.php" class="nav-link">
              <i class="nav-icon far fas fa-briefcase"></i>
              <p>Danh sách vị trí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
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
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Chi tiết bài đăng</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Số lượng</span>
                      <span class="info-box-number text-center text-muted mb-0"><?=$soluong;?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Ngày bắt đầu</span>
                      <span class="info-box-number text-center text-muted mb-0"><?=$ngayapdung;?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Ngày kết thúc</span>
                      <span class="info-box-number text-center text-muted mb-0"><?=$ngayhethan;?></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4><?=$tencv;?></h4>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/doanhnghiep.png" alt="User Image">
                        <span class="username">
                          <a href="#"><?=$tendn;?></a>
                        </span>
                        <span class="description"><?=$ngaydang;?></span>
                      </div>
                      <!-- /.user-block -->
                      <h4>Yêu cầu:</h4>
                      <p>
                      <?=nl2br($aicothenop);?>
                      </p>
                    </div>

                    <div class="post clearfix">
                      <p>
                      <?=nl2br($motacv);?>
                      </p>
                    </div>

                    <div class="post">
                      <!-- /.user-block -->
                      <p>
                      Quyền lợi: <?=$quyenloi;?>
                      </p>

                      <p>
                        <a href="https://hoanghuongthao.blogspot.com/" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Link công ty</a>
                      </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Thông tin thêm</h3>
              <p class="text-muted"><?=$aboutus;?></p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Địa chỉ
                  <b class="d-block"><?=$diachi;?></b>
                </p>
                <p class="text-sm">Hot line
                  <b class="d-block">1900-1008</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Liên hệ</h5>
              <ul class="list-unstyled">
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> emaildn@gmail.com</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> 1029-20192-102</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="../doanhNghiep.php" class="btn btn-sm btn-warning">Quay lại</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>  
    $(document).ready(function(){
     $('#insert_form').on("submit", function(event){  
      event.preventDefault();  
      var mavtdn = $('#vitri').children("option:selected").val();
        var masv = "<?php echo $_SESSION['masv'];?>"
        ;
        $.ajax({
            url: 'nguyenvong-insert.php' ,
            method: 'post',
            data : { mavtdn : mavtdn,  masv: masv},
           success:function(data){  
            $('#insert_form')[0].reset();  
            $('#add_data_Modal').modal('hide');  
            }  

         });    
     });
     });

     
    

    function selectViTri(madn){
      console.log (madn);

      $.ajax({
          url: 'selectViTri.php',
          type: 'post',
          data: {madn: madn},
          dataType: 'json',
          success:function(response){

              var len = response.length;

              $("#vitri").empty();
              for( var i = 0; i<len; i++){
                  var id = response[i]['id'];
                  var name = response[i]['name'];
                  
                  $("#vitri").append("<option value='"+id+"'>"+name+"</option>");

              }
          }
      });
        };
        
</script>
</body>
</html>
