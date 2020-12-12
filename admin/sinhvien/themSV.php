<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Chỉnh sửa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | Chỉnh sửa</span>
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
            <a href="#" class="nav-link active ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Chỉnh sửa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../sinhvien/themSV.php" class="nav-link  active">
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
            <a href="#" class="nav-link">
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

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm sinh viên</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
      
                  <div class="card card-success">
                    <div class="card-header">
                      
                    </div>
                    <form action="insert.php" method="POST">
                    <div class="card-body">
                    <div class="form-group">
                        <label>Họ :</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control" name="ho">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label>Tên sinh viên:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control" name="ten">
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
                          <input type="text" class="form-control" name="email">
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
                          <input type="text" class="form-control"  name = "ngaysinh" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
      
                      <!-- IP mask -->
                      <div class="form-group">
                        <label>Ngành:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                          </div>
                          <input type="text" class="form-control" name = "nganh">
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
                          <input type="text" class="form-control" name = "diem">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label>Quê quán:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                          </div>
                          <input type="text" class="form-control" name = "quequan">
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary ">Thêm</button>
                    </div>
                    </form>
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-md-3"></div>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })

    $('[data-mask]').inputmask()
  })

</script>

<script>  
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
		   var masv = $('#emId').val();
		   var ho = $('#upname').val();
		   console.log(tendn);
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
				  // console.log(response);
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
