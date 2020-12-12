<!DOCTYPE html>
<html>

<?php 
    
   
        include('include/header.php');
    
 ?>
<body>
<section class="special-area bg-white section_padding_100" >
<div class="container login1">
      <div class="row">
          <div class="col-md-4 single-special">
              <!-- Form Start-->
                <div class="contact_from">
                    <form action="xulydangnhap.php" method="POST">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control input_user" value="<?php if(isset($_COOKIE["tenDangNhap"]) )echo $_COOKIE["tenDangNhap"] ;?>" placeholder="Tên đăng nhập">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control input_pass" value="<?php if(isset($_COOKIE["matKhau"]) )echo $_COOKIE["matKhau"];?>" placeholder="Mật khẩu">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                        <!-- class="custom-control-input" id="customControlInline"/ -->
                                        <input type="checkbox"  name="name" value='checked'>
                                            <label class="custom-control-label" for="customControlInline">Nhớ mật khẩu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="login" value="Đăng nhập" class="btn submit-btn ver-center">Đăng nhập</button>
                                </div>
                            </div>
                        </div>
                    </form>
				    <!-- <div class="d-flex justify-content-center links">
						Bạn chưa có tài khoản? <a href="#" class="ml-2">Tạo tài khoản</a>
					</div> -->
					<div class="d-flex justify-content-center links">
						<a href="#">Quên mật khẩu?</a>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>
</html>
