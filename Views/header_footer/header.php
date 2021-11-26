<!-- header -->
<header>
    <!-- mobile menu -->
    <div class="mobile-menu bg-second">
        <a href="index.php" class="mb-logo">BAEShop</a>
        <span class="mb-menu-toggle" id="mb-menu-toggle">
            <i class='bx bx-menu'></i>
        </span>
    </div>
    <!-- end mobile menu -->
    <!-- main header -->
    <div class="header-wrapper" id="header-wrapper">
        <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
            <i class='bx bx-x'></i>
        </span>
        <!-- top header -->
        <div class="bg-second">
            <div class="top-header container">
                <ul class="devided">
                    <li>
                        <a style="font-size: 14px;">Hệ thống cửa hàng BaeShop</a>
                    </li>
                </ul>
                <ul class="devided" style="text-transform: uppercase;">
                    <li class="dropdown">
                        <a href="">Kiểm tra đơn hàng</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>gioithieu/">giới thiệu</a>
                    </li>
                    <li><a href="<?php echo URL; ?>gioithieu/lienhe.php">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <!-- end top header -->
        <!-- mid header -->
        <div class="bg-main">
            <div class="mid-header container">
                <a href="<?php echo URL; ?>" class="logo"><img src="<?php echo URL; ?>public/images/logo/BAEShop_transparent.png" alt=""></a>
                <form class="search" action="<?php echo URL; ?>danhmuc/" method="post">
                    <input type="text" placeholder="Tìm kiếm..." name="keyword">
                    <button class="btn-search"><i class="bx bx-search-alt"></i></button>
                </form>

                <ul class="user-menu">
                    <li><a href="#"><i class='bx bx-bell'></i></a></li>
                    <li id="user-circle"><a><i class='bx bx-user-circle'></i></a>
                        <ul id="dang_nhap">
                            <?php if (isset($_SESSION['login'])) { ?>
                                <li><b>Chào <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></b></li>
                                <li><a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=account">Tài khoản</a></li>
                                <li><a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                <?php
                                if (isset($_SESSION['isLogin_Admin'])) { ?>
                                    <li><a href="<?php echo URL; ?>admin/?mod=login">Trang quản lý</a></li>
                                <?php }
                            } else { ?>
                                <li><b>Khách hàng</b></li>
                                <li><a href="<?php echo URL; ?>buyer/login-signup/?buyer-login&act=taikhoan">Đăng nhập</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="#"><i class='bx bx-cart'></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end mid header -->
        <!-- bottom header -->
        <div class="bg-second">
            <div class="bottom-header container">
                <ul class="main-menu">
                    <li><a href="<?php echo URL;?>danhmuc?giay-nike&sp=1">giày nike</a></li>
                    <li><a href="<?php echo URL;?>danhmuc?giay-adidas&sp=2">GIÀY ADIDAS</a></li>
                    <li><a href="<?php echo URL;?>danhmuc?giay-vans&sp=3">GIÀY VANS</a></li>
                    <?php $i = 4;
                    foreach ($data_chitietDM as $row): ?>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="<?php echo URL; ?>danhmuc?giay-the-thao&sp=<?= $i ?>">giày thể thao</a>
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-3 col-md-12" id="loaisanpham">
                                        <div class="box" style="display: flex;">
                                            <?php foreach ($row as $value) { ?>
                                                <h3><a href="<?php echo URL; ?>danhmuc?sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP'] ?></a></h3>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php 
                    break;
                    endforeach; ?>
                </ul>
            </div>
        </div>
        <!-- end bottom header -->
    </div>
    <!-- end main header -->
</header>
<!-- end header -->