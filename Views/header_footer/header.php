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
        
        <!-- end top header -->
        <!-- mid header -->
        <div class="bg-main position-sticky">
            <div class="mid-header container">
                <a href="<?php echo URL; ?>" class="logo"><img src="<?php echo URL; ?>public/images/logo/logo.png" alt=""></a>
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
        <!-- end bottom header -->
    </div>
    <!-- end main header -->
</header>
<!-- end header -->