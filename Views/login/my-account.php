<link rel="stylesheet" href="<?php echo URL; ?>public/css/login.css">
 <div class="box">
     <div class="breadcumb">
         <a href="<?php echo URL; ?>">Trang chủ</a>
         <span><i class='bx bxs-chevrons-right'></i></span>
         <a href="<?php echo URL; ?>/Views/products.php">Tài khoản cá nhân</a>
     </div>
 </div>
 <div id="container">
     <div class="section-header">
         <h2>Tài khoản cá nhân</h2>
     </div>
     <div class="dangnhap_dangky">
         <div class="left_dangnhap">
             <div class="">
                 <h3>KHÁNH HÀNG ĐÃ ĐĂNG KÝ</h3>
                 <div class="lg_dangnhap" id="dangnhap">
                     <small>Đăng nhập tại đây!</small>
                     <br>
                     <br>
                     <?php if (isset($_COOKIE['msg1'])) { ?>
                         <div class="alert alert-success">
                             <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
                         </div>
                     <?php } ?>
                     <form action="?act=taikhoan&xuli=dangnhap" method="POST" id="form1">
                         <input placeholder="Tài Khoản" type="text" name="taikhoan"><br>
                         <br>
                         <input name="matkhau" placeholder="Mật khẩu" type="password"><br>
                         <a href="#"><small>Quên mật khẩu?</small> </a><br> <br>
                         <button name="submit" form="form1" class="btn-flat btn-hover" type="submit">
                             <span>Đăng nhập</span>
                         </button>
                     </form>
                 </div>
             </div>
         </div>
         <div class="right_dangky" id="dangky">
             <div class="">
                 <h3>Đăng ký</h3>
                 <div class="lg_dangnhap">
                     <small>Đăng ký tài khoản tại đây!</small>
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
                         <input placeholder="Tên đăng nhập" name="TaiKhoan" type="text" required  minlength="6"> 
                         <br>
                         <br>
                         <input placeholder="Địa chỉ email" name="Email" type="text" required><br><br>
                         <input placeholder="Số điện thoại" name="SĐT" type="text" required pattern="[0-9]+" minlength="10"><br>
                         <br>
                         <input placeholder="Mật khẩu" name="MatKhau" type="password" minlength="6" required><br><br>
                         <input placeholder="Nhập lại mật khẩu" name="check_password" type="password" minlength="6" required><br>
                         <br>
                         <button form="form2" class="btn-flat btn-hover" type="submit">
                             <span>Đăng Ký</span>
                         </button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>