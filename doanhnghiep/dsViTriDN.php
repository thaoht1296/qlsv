<!DOCTYPE html>
<html lang="en">
<?php  

    session_start();
    $_SESSION['madn'] = 11;
  //  echo  $_SESSION['madn'];
 ?>  
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
          <a href="../doanhnghiep/suaTTDN.php" class="d-block">Tên doanh nghiệp</a>
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
          <li class="nav-item">
            <a href="../doanhnghiep/dsSVDK.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Danh sách đăng kí</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../doanhnghiep/dsViTriDN.php" class="nav-link active">
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
            <h1>Danh sách vị trí</h1>
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
                <h3 class="card-title" style=" margin-top: .275em;">Danh sách vị trí</h3>

				          <button type="button"  class="btn btn-primary btn-sm" style=" margin-left: .875em;" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning pull-left" onclick="selectViTri()"><i class="fas fa-plus">
                      </i> Thêm</button>
				          <button type="button" class="btn btn-danger btn-sm" style=" margin-left: .875em;" id="delete" ><i class="fas fa-trash">
                      </i> Xóa</button>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body" id="dn_table">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%;">Chọn</th>
                    <th style="width: 30%;">Tên vị trí</th>
<!--                    <th style="width: 20%;">Mô tả</th>-->
                    <th style="width: 15%;">Điểm</th>
                    <th style="width: 15%;">Chức năng</th> 
                  </tr>
                  </thead>
                  <tbody>
<!--
                    <tr>
                      <td class="jsgrid-cell jsgrid-align-center">
                        <input type="checkbox">
                      </td>
                      <td>001
                      </td>
                      <td>Web</td>
                      <td> 2.5</td>
                      <td>Chăm, giỏi, xuất sắc</td>
                      <td class="project-actions text-center">
                        <a class="btn btn-success btn-sm " href="../forms/suaVT.html">
                            <i class="fas fa-pen">
                            </i>
                              Sửa
                        </a>
                      </td>
					</tr>
-->
                  <?php
          
                    include("vtdoanhnghiep-select.php");
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
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">vị trí doanh nghiệp</h4>
   </div>
   <div class="modal-body">
   
    <form method="post" id="insert_form">
     <label>Tên vị trí</label>
     <!--input type="text" name="name" id="name" class="form-control" /-->
     <select id="vitri">
        <option value="0">- Select -</option>
     </select>
     <br />
     <label>Điểm</label>
     <!--textarea name="address" id="address" class="form-control"></textarea-->
     <input type="text" name="diem" id="diem" class="form-control" />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

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
				<label>Tên vị trí</label>
				<input type="text" id="upname" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Điểm</label>
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
  
  function selectViTri(){
         $("#vitri").empty();
         $("#vitri").append("<option >loading....</option>");
         
         $.ajax({
            url: 'selectViTri.php',
            method:"POST",
            
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            success:function(data){
                console.log("data");
                $("#vitri").empty();
                var len = data.length;
				$("#vitri").append("<option value='0'>- Select -</option>");
                
                for( var i = 0; i<len; i++){
                    var id = data[i]['id'];
                    var name = data[i]['name'];
                    
                    $("#vitri").append("<option value='"+id+"'>"+name+"</option>");

                }
            },
            complete: function(){
                
            }
        });
        
    }
    
    // them
    $(document).ready(function(){
     $('#insert_form').on("submit", function(event){  
      event.preventDefault();    
        var mavt = $('#vitri').children("option:selected").val();
		console.log(mavt);
		var diem = $('#diem').val();
        var madn = '<?php echo $_SESSION['madn'];?>';
        $.ajax({
            url: 'vtdoanhNghiep-insert.php' ,
            method: 'post',
            data : { mavt : mavt, diem : diem, madn: madn},
           success:function(data){  
            $('#insert_form')[0].reset();  
            $('#add_data_Modal').modal('hide');  
            $('#dn_table').html(data); 
            }  

         });
       //       $.ajax({  
//        url:"vtdoanhNghiep-insert.php",  
//        method:"POST",  
//        data:$('#insert_form').serialize(),  
//        beforeSend:function(){  
//         $('#insert').val("Inserting");  
//        },  
//        success:function(data){  
//         $('#insert_form')[0].reset();  
//         $('#add_data_Modal').modal('hide');  
//         $('#dn_table').html(data);  
//        }  
//       }); 
     });
     });
 
	$(document).ready(function(){
	   $(document).on('click','a[data-role="update"]', function(){
		   console.log('ok');
		 //  alert($(this).data('id'));
		 // them gia tri vao input
		 var ma = $(this).data('id');
		   
		 var ten = $('#' + ma).children('td[data-target=ten]').text();
		 var diem = $('#' + ma).children('td[data-target=diem]').text();
		 
		 
		 $('#upname').val(ten);
		 $('#upgen').val(diem);
		 
		 $('#emId').val(ma);
		 
		 $('#myModal').modal('toggle');
		 
	   }) ;
	   
	   // cap nhat csdl
	   
	   $('#save').click(function(){
		   var ma = $('#emId').val();
		   var ten = $('#upname').val();
		   
			var diem = $('#upgen').val();
			
			
			$.ajax({
			   url: 'vtdoanhNghiep-updatedata.php' ,
			   method: 'post',
				
			   data : { diem : diem, ma : ma},
			   success : function(response){
				  // console.log(response);
				  // $('#' + madn).children('td[data-target=ten]').text(tendn);
				   $('#' + ma).children('td[data-target=diem]').text(diem);
				   
				   $('#myModal').modal('toggle');
				console.log(response);   
			   }
				
			});
                        
                     
		   
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
                        alert('Khong co muc duoc chon');
                }
        });

        function sendResponse(dataArr){
                
                $.ajax({
                    type: 'post',
                    url: 'vtdoanhNghiep-delete.php',
                    data : {data : dataArr},
                    sucess : function(response){
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
