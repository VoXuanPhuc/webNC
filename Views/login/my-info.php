<link rel="stylesheet" href="<?php echo URL; ?>public/css/login.css">
<div class="container-info grid wide">
        <div class="info-desc">
            <div class="">
                <a href="<?php echo URL; ?>">Trang chủ</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=info">Tài khoản</a>
            </div>
        </div>
        <div class="row" style="padding-left: 16px;">
            <div class="col-2 container-info-navbar" >
                <div class="content-navbar">
                    <div class="header-navbar">
                        <div class="header-navbar-img">
                            <img src="../../public/images/avatar-4.png" alt="">
                        </div>
                        <div class="header-navbar-info">
                            <span><?php echo  $data['Ho'] . $data['Ten'] ?></span>
                        </div>
                    </div>
                    <ul class="container-info-list">
                        <li class="container-info-item container-info-item-active">
                            <a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=info" class="container-info-link">Tài khoản của tôi</a>
                        </li>
                        <li class="container-info-item">
                            <a href="<?php echo URL; ?>giohang/checkout.php?act=checkout&xuli=detail" class="container-info-link">Sản phẩm đã mua</a>
                        </li>
                        <li class="container-info-item">
                            <a href="#" class="container-info-link">Đơn mua</a>
                        </li>
                        <li class="container-info-item">
                            <a href="#" class="container-info-link">Kho voucher</a>
                        </li>
                        <li class="container-info-item">
                            <a href="#" class="container-info-link">Thông báo</a>
                        </li>
                        <li class="container-info-item">
                            <a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=dangxuat" class="container-info-link">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-10 body-info">
                <div id="container ">
                    <div class="content">
                        <div class="content-info" id="dangky">
                            <div class="">
                                <div class="content-info-avatar">
                                    <img src="../../public/images/avatar-4.png" alt="" class="content-info-img">
                                    <div class="content-info-edit-avatar">
                                        <a href="" class=""><i class="fas fa-edit"></i></a>
                                    </div>
                                </div>
                                <div class="info-form">
                                    <form action="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=account" method="post">
                                        <label for="" class="content-info-text">Họ</label>
                                        <input class="lg_dangnhap-input" placeholder="Họ" name="Ho" type="text" value="<?php echo  $data['Ho'] ?>" disabled><br><br>
                                        <label for="" class="content-info-text">Tên</label>
                                        <input class="lg_dangnhap-input" placeholder="Tên" name="Ten" type="text" value="<?php echo  $data['Ten'] ?>" disabled><br><br>
                                        <label for="" class="content-info-text">Giới tính</label>
                                        <input class="lg_dangnhap-input" placeholder="Giới tính" name="GioiTinh" type="text" value="<?php echo  $data['GioiTinh'] ?>" disabled><br><br>
                                        <label for="" class="content-info-text">Số điện thoại</label>
                                        <input class="lg_dangnhap-input" placeholder="Số điện thoại" name="SĐT" type="text" pattern="[0-9]+" minlength="10" value="<?php echo  $data['SDT'] ?>" disabled><br><br>
                                        <label for="" class="content-info-text">Email</label>
                                        <input class="lg_dangnhap-input" placeholder="Địa chỉ email" name="Email" type="text" value="<?php echo  $data['Email'] ?>" disabled><br><br>
                                        <label for="" class="content-info-text">Địa chỉ</label>
                                        <input class="lg_dangnhap-input" placeholder="Địa chỉ" name="DiaChi" type="text" value="<?php echo  $data['DiaChi'] ?>" disabled><br><br>
                                        <input type="submit" name="submit" value="Chỉnh sửa" class="btn btn-info">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>