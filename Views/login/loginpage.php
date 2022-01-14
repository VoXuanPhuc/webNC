
 <link rel="stylesheet" href="<?php echo URL; ?>public/css/login.css">
 <div class="box">
    
 </div>
 <div id="container">
     <div class="section-header">
         <h4 class="active" id="dangnhaph4">Đăng nhập</h4>
         <h4 id="dangkyh4">Đăng ký</h4>
     </div>
     <div class="dangnhap_dangky">
         <div class="left_dangnhap">
             <div class="">
                 <div class="lg_dangnhap" id="dangnhap">
                     <br>
                     <br>
                     <?php if (isset($_COOKIE['msg1'])) { ?>
                         <div class="alert alert-success">
                             <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
                         </div>
                     <?php } ?>
                     <form action="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=dangnhap" method="POST" id="form1">
                         <input placeholder="Tài Khoản" type="text" name="taikhoan"><br>
                         <br>
                         <input name="matkhau" placeholder="Mật khẩu" type="password"><br>
                         <a href="#" class="my-3"><small>Quên mật khẩu?</small> </a><br>
                         <button name="submit" form="form1" class="btn btn btn-hover" type="submit">
                             <span>Đăng nhập</span>
                         </button>
                         <div class="my-2"><small>Or</small> </div>
                         <div class="d-flex justify-content-center">
                             <a href="<?php echo($client->createAuthUrl()) ?>">
                                 <img src="https://banner2.cleanpng.com/20201008/rtv/transparent-google-suite-icon-google-icon-5f7f985ccd60e3.5687494416021975968412.jpg" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover; margin-right: 30px;">
                             </a>
                             <a href="">
                                 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover;">
                             </a>

                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <div class="right_dangky" id="dangky">
             <div class="">
                 <div class="lg_dangnhap">
                     <br>
                     <br>
                     <?php if (isset($_COOKIE['msg'])) { ?>
                         <div class="alert alert-success">
                             <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                         </div>
                     <?php } ?>
                     <form action="?act=taikhoan&xuli=dangky" method="post" id="form2">
                         <input placeholder="Họ" name="Ho" type="text" required><br>
                         <br>
                         <input placeholder="Tên" name="Ten" type="text" required>
                         <br>
                         <br>
                         <input placeholder="Tên đăng nhập" name="TaiKhoan" type="text" required minlength="6">
                         <br>
                         <br>
                         <input type="email" placeholder="Địa chỉ email" name="Email" required><br><br>
                         <input placeholder="Số điện thoại" name="SĐT" type="text" required pattern="[0-9]+" minlength="10"><br>
                         <br>
                         <input placeholder="Mật khẩu" name="MatKhau" type="password" minlength="6" required><br><br>
                         <input placeholder="Nhập lại mật khẩu" name="check_password" type="password" minlength="6" required><br>
                         <br>
                         <button form="form2" class="btn btn btn-hover" type="submit">
                             <span>Đăng Ký</span>
                         </button>
                         <div class="my-2"><small>Or</small> </div>
                         <div class="d-flex justify-content-center">
                             <a href="<?php echo($client->createAuthUrl()) ?>">
                                 <img src="https://banner2.cleanpng.com/20201008/rtv/transparent-google-suite-icon-google-icon-5f7f985ccd60e3.5687494416021975968412.jpg" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover; margin-right: 30px;">
                             </a>
                             <a href="">
                                 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover;">
                             </a>

                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script>
     $(document).ready(function() {
         $('.right_dangky').hide();
         $('#dangnhaph4').click(function() {
             $('#dangnhaph4').addClass("active");
             $('.left_dangnhap').show(500);
             $('.right_dangky').hide(200);
             $('#dangkyh4').removeClass("active");
         });
         $('#dangkyh4').click(function() {
             $('.right_dangky').show(500);
             $('.left_dangnhap').hide(200);
             $('#dangkyh4').addClass("active");
             $('#dangnhaph4').removeClass("active");
         });
     })
 </script>