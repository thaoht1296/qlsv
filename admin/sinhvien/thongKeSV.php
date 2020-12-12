<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Thống kê</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body class="hold-transition cl sidebar-mini sidebar-collapse">
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
                <a href="themSV.php" class="nav-link">
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
                <a href="../admin/sinhvien/thongKeSV.php" class="nav-link  active">
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
                <h3 class="card-title" style=" margin-top: .275em;">Thống kê sinh viên  </h3>
                <!-- <a class="btn btn-primary btn-xs" href="../forms/themSV.html" style=" margin-left: .875em;">
                  <i class="fas fa-plus">
                  </i>
                  Thêm
                </a> -->
                
                <button type="button"  data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary btn-sm"    style=" margin-left: .875em;"><i class="fas fa-plus">
                </i> Thêm</button>
                  <!-- <a class="btn btn-danger btn-xs" href="#" style=" margin-left: .875em;">
                      <i class="fas fa-trash">
                      </i>
                       Xóa
                  </a> -->
                  <button type="button" class="btn btn-danger btn-sm" id="delete" style=" margin-left: .875em;"><i class="fas fa-trash">
                  </i> Xóa</button>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body" id="dn_table">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><input type ="checkbox" id='checkall'></th>
                      <th>Họ đệm</th>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Ngày sinh</th>
                      <th>Ngành</th>
                      <th>Điểm</th>
                      <th>Quê quán</th>
                      <th>Chức năng</th>
                      </tr>
                  </thead>
                  <!-- <tbody>
                    <tr>
                      <td class="jsgrid-cell jsgrid-align-center">
                        <input type="checkbox">
                      </td>
                      <td>001
                      </td>
                      <td>Hương</td>
                      <td> huong@gmail.com</td>
                      <td>Phố Nụa, Hà Dông, Hà Nội</td>
                      <td>+84 0192 9123</td>
                      <td class="project-actions text-center">
                        <a class="btn btn-success btn-sm" href="#">
                          <i class="fas fa-tools">
                          </i>
                           Sửa
                        </a>
                        </td>
                    </tr> -->
                    <?php
  
                      include("sv-select.php");
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

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Quản lí sinh viên</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Họ đệm</label>
     <input type="text" name="ho" id="ho" class="form-control" />
     <br />
     <label>Tên</label>
     <textarea name="ten" id="ten" class="form-control"></textarea>
	<br />
     <label>Email</label>
     <textarea name="email" id="email" class="form-control"></textarea>
		<br />
     <label>Ngày sinh</label>
     <input type="date" name="ngaysinh" id="ngaysinh" class="form-control">
		<br />
     <label>Ngành</label>
     <select name="nganh" id="nganh" class="form-control">
      <option value="An toàn thông tin">An toàn thông tin</option>  
      <option value="Công nghệ thông tin">Công nghệ thông tin</option>
	  <option value="Quản trị kinh doanh">Quản trị kinh doanh</option>
	  <option value="Công nghệ đa phương tiện">Công nghệ đa phương tiện</option>
	  <option value="Truyền thông đa phương tiện">Truyền thông đa phương tiện</option>
     </select>
     
	   <br />
     <label>Điểm</label>
     <textarea name="diem" id="diem" class="form-control"></textarea>
	  
	  <br />
     <label>Quê quán</label>
     <input type="text" name="quequan" id="quequan" class="form-control">
	 
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
		  <h4 class="modal-title">Cập nhật thông tin</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<label>Tên</label>
				<input type="text" id="upname" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Họ</label>
				<input type="text" id="upgen" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Email</label>
				<input type="text" id="upgen1" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Ngày sinh</label>
				<input type="text" id="upgen2" class="form-control">
			</div>
			
			<div class="form-group">
				  <label>Ngành</label>
				  <select id="upgen3" class="form-control">
					  <option value="An toàn thông tin">An toàn thông tin</option>  
					  <option value="Công nghệ thông tin">Công nghệ thông tin</option>
					  <option value="Quản trị kinh doanh">Quản trị kinh doanh</option>
					  <option value="Công nghệ đa phương tiện">Công nghệ đa phương tiện</option>
					  <option value="Truyền thông đa phương tiện">Truyền thông đa phương tiện</option>
				 </select>
			</div>
			
			<div class="form-group">
				<label>Điểm</label>
				<input type="text" id="upgen4" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Quên quán</label>
				<input type="text" id="upgen5" class="form-control">
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

  $(document).ready(function(){
     $('#insert_form').on("submit", function(event){  
      event.preventDefault();  
      if($('#ho').val() == "")  
      {  
       alert("Yêu cầu nhập họ");  
      }  
      else if($('#ten').val() == '')  
      {  
       alert("Yêu cầu nhập tên");  
      }
	  else if($('#email').val() == '')  
      {  
       alert("Yêu cầu nhập email");  
      }
	  else if($('#diem').val() == '')  
      {  
       alert("Yêu cầu nhập điểm");  
      }
	  else if($('#ngaysinh').val() == '')  
      {  
       alert("Yêu cầu nhập ngày sinh");  
      }
	  else if($('#quequan').val() == '')  
      {  
       alert("Yêu cầu nhập quê quán");  
      }
      else  
      {  
       $.ajax({  
        url:"sv-insert.php",  
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
 
	$(document).ready(function(){
	   $(document).on('click','a[data-role="update"]', function(){
		   console.log('ok');
		 //  alert($(this).data('id'));
		 // them gia tri vao input
		 var masv = $(this).data('id');
		   console.log(masv);
		 var ho = $('#' + masv).children('td[data-target=ho]').text();
		 var ten = $('#' + masv).children('td[data-target=ten]').text();
		   var email = $('#' + masv).children('td[data-target=email]').text();
		   var ngaysinh = $('#' + masv).children('td[data-target=ngaysinh]').text();
		   var nganh = $('#' + masv).children('td[data-target=nganh]').text();
		   var diem = $('#' + masv).children('td[data-target=diem]').text();
		   var quequan = $('#' + masv).children('td[data-target=quequan]').text();
		 
		 
		 $('#upname').val(ho);
		 $('#upgen').val(ten);
		 $('#upgen1').val(email);
		 $('#upgen2').val(ngaysinh);
		 $('#upgen3').val(nganh);
		 $('#upgen4').val(diem);
		 $('#upgen5').val(quequan);
		 
		 $('#emId').val(masv);
		 
		 $('#myModal').modal('toggle');
		 
	   }) ;
	   
	   // cap nhat csdl
	   
	   $('#save').click(function(){
      console.log('ok');
		   var masv = $('#emId').val();
		   var ho = $('#upname').val();
		   
		   var ten = $('#upgen').val();
		   var email = $('#upgen1').val();
		   var ngaysinh = $('#upgen2').val();
		   var nganh = $('#upgen3').val();
		   var diem = $('#upgen4').val();
		   var quequan = $('#upgen5').val();
			
			$.ajax({
			   url: 'sv-updatedata.php' ,
			   method: 'post',
				
			   data : { ho:ho, ten:ten, email : email, ngaysinh:ngaysinh, nganh:nganh, diem:diem, quequan:quequan, masv:masv},
			   success : function(response){
				   console.log(response);
          
				   $('#' + masv).children('td[data-target=ho]').text(ho);
				   $('#' + masv).children('td[data-target=ten]').text(ten);
				   $('#' + masv).children('td[data-target=email]').text(email);
				   $('#' + masv).children('td[data-target=ngaysinh]').text(ngaysinh);
				   $('#' + masv).children('td[data-target=nganh]').text(nganh);
				   $('#' + masv).children('td[data-target=diem]').text(diem);
				   $('#' + masv).children('td[data-target=quequan]').text(quequan);
				   
				   $('#myModal').modal('toggle');
				   
			   }
				
			});
//		   console.log(tendn);
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
//                console.log('ok');
                var dataArr = new Array();
                if($('input:checkbox:checked').length > 0){
                        $('input:checkbox:checked').each(function(){
                                dataArr.push($(this).attr('id'));

                                $(this).closest('tr').remove();
                        });
                        sendResponse(dataArr)
                      //  console.log(dataArr);
                }else{
                        alert('Không có mục nào được chọn');
                }
        });

        function sendResponse(dataArr){
                
                $.ajax({
                    type: 'post',
                    url: 'sv-delete.php',
                    data : {data : dataArr},
                    success : function(response){
                        alert(response);
                    },
                    error: function(errResponse){
                        alert(errResponse);
                    }
                });
//                console.log(dataArr);
        }
});
		
</script>
</body>
</html>


