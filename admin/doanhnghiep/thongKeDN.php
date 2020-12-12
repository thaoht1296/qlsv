<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Thống kê DN</title>

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
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <a href="../admin.php" class="nav-link ">
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
                <a href="../admin/doanhnghiep/thongKeDN.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doanh nghiệp</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../baiviet/thongKeBV.php" class="nav-link">
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
            <a href="lenLich.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Lên lịch sự kiện
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="..admin/baiviet/qlBaiDang.php" class="nav-link">
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
            <h1>Thống kê doanh nghiệp</h1>
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
                <h3 class="card-title" style=" margin-top: .275em;">Thống kê doanh nghiệp</h3>

				  <button type="button"  data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary btn-sm" style=" margin-left: .875em;"><i class="fas fa-plus">
                  </i> Thêm</button>
				  
				  <button type="button" class="btn btn-danger pull-right" id="delete" class="btn btn-danger btn-sm" style=" margin-left: .875em;" ><i class="fas fa-trash">
                      </i> Xóa</button>

              </div>
              
              <!-- /.card-header -->
              <div class="card-body" id="dn_table">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="jsgrid-cell jsgrid-align-center"><input type ="checkbox" id='checkall'></th>
                    <th>Tên doanh nghiệp</th>
                    <th>Địa chỉ</th>
                    <th>Chức năng</th>
                  </tr>
                  </thead>
                  <?php
                    include_once("doanhnghiep-select.php");
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
  

<!-- thêm doanh nghiệp -->
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Quản lí doanh nghiệp</h4>
   </div>
   <div class="modal-body">
    
    <form method="post" id="insert_form">
     <label>Tên doanh nghiệp</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Địa chỉ</label>
     <textarea name="address" id="address" class="form-control"></textarea>
     
     <br />
     <input type="submit" name="insert" id="insert" value="Thêm" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
   </div>
  </div>
 </div>
</div>

<!--capnhat-->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Doanh nghiệp</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<label>Tên doanh nghiệp</label>
				<input type="text" id="upname" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Địa chỉ</label>
				<input type="text" id="upgen" class="form-control">
			</div>
			
			<input type='hidden' id='emId' class='form-control'>
		</div>
		<div class="modal-footer">
			<a href="#" id="save" class ="btn btn-primary pull-right">Cập nhật</a>
		  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
		</div>
	  </div>

	</div>
  </div>


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
<script src="../../dist/js/demo.js"></script>
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
	// JQuery
  // them doanh nghiep
  // ajax load bảng thống kế
	 $(document).ready(function(){
     $('#insert_form').on("submit", function(event){  
      event.preventDefault();  
      if($('#name').val() == "")  
      {  
       alert("Yêu cầu nhập tên");  
      }  
      else if($('#address').val() == '')  
      {  
       alert("Yêu cầu nhập địa chỉ");  
      }  
      else  
      {  
       $.ajax({  
        url:"doanhNghiep-insert.php",  
        method:"POST",  
        data:$('#insert_form').serialize(),  
        beforeSend:function(){  
         $('#insert').val("Inserting");  
        },  
        success:function(data){  
         $('#insert_form')[0].reset();  
         $('#add_data_Modal').modal('hide');  
         $('#dn_table').html(data);  
        }  
       });  
      }  
     });
     });
 

 // sửa thông tin dn
 // ajax load thông tin chi tiết của dn
	$(document).ready(function(){
	   $(document).on('click','a[data-role="update"]', function(){
		   console.log('ok');
		 //  alert($(this).data('id'));
		 // them gia tri vao input
		 var madn = $(this).data('id');
		   console.log(madn);
		 var tendn = $('#' + madn).children('td[data-target=tendn]').text();
		 var diachi = $('#' + madn).children('td[data-target=diachi]').text();
		 
		 
		 $('#upname').val(tendn);
		 $('#upgen').val(diachi);
		 $('#emId').val(madn);
		 
		 $('#myModal').modal('toggle');
		 
	   }) ;
	   
	   // cap nhat csdl
	   
	   $('#save').click(function(){
		   var madn = $('#emId').val();
		   var tendn = $('#upname').val();
		   console.log(tendn);
			var diachi = $('#upgen').val();
			
			
			$.ajax({
			   url: 'doanhNghiep-updatedata.php' ,
			   method: 'post',
				
			   data : { tendn : tendn, diachi : diachi, madn : madn},
			   success : function(response){
				  // console.log(response);
				   $('#' + madn).children('td[data-target=tendn]').text(tendn);
				   $('#' + madn).children('td[data-target=diachi]').text(diachi);
				   
				   $('#myModal').modal('toggle');
				   
			   }
				
			});
		   console.log(tendn);
	   });
	});


	$(document).ready(function(){
		$('#checkall').click(function(){
			if(this.checked ){
				$('.checkbox').each(function(){
					this.checked = true;
				});
			}else{
				$('.checkbox').each(function(){
					this.checked = false;
				});
			}
		});

        $('#delete').click(function(){
                console.log('ok');
                var dataArr = new Array();
                if($('input:checkbox:checked').length > 0){
					$('input:checkbox:checked').each(function(){
                             dataArr.push($(this).attr('id'));
                             $(this).closest('tr').remove();
                        });
                        sendResponse(dataArr)
                      //  console.log(dataArr);
                }else{
                        alert('Bạn chưa chọn ô cần xóa');
                }
        });

        function sendResponse(dataArr){
                $.ajax({
                    type: 'post',
                    url: 'doanhNghiep-delete.php',
                    data : {data : dataArr},
                    success : function(response){
                        alert(response);
                    },
                    error: function(errResponse){
                        alert(errResponse);
                    }
                });
                console.log(dataArr);
        }
});		
</script>
</body>
</html>