<!-- header -->
<header>
    <!-- main header -->
    <div class="header-wrapper" id="header-wrapper">
        <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
            <i class='bx bx-x'></i>
        </span>
        <!-- top header -->

        <!-- end top header -->
        <!-- mid header -->
        <div class="bg-main position-sticky">
            <div class="mid-header container" style="position: relative;">
                <a href="<?php echo URL; ?>" class="logo"><img src="<?php echo URL; ?>public/images/logo/logo.png" alt=""></a>
                <form autocomplete="off" class="search" action="<?php echo URL; ?>danhmuc/" method="post">
                    <input id="searchInput" type="text" placeholder="Tìm kiếm ..." name="keyword" />
                    <button class="btn-search">
                        <i class="bx bx-search-alt"></i>
                    </button>

                </form>
                <ul id="dexuat" style="
                        position: absolute;
                        top: 49px;
                        width: 49%;
                        max-height: 250px;
                        left: 277px;
                        z-index: 1000;
                        display: block;
                        overflow-y:scroll;
                    " class="list-group">

                </ul>
                <script>
                    $(document).ready(function() {
                        $('#searchInput').keyup(function() {
                            var search = $('#searchInput').val();

                            if (search != "") {
                                $.ajax({
                                    url: '/baeshop.com/index.php?act=search',
                                    method: 'POST',
                                    data: {
                                        search: search
                                    },
                                    success: function(data) {
                                        $('#dexuat').html(data);
                                    }
                                });
                            } else {
                                $('#dexuat').html("");
                            }
                            $(document).on('click', 'span', function() {
                                $('#searchInput').val($(this).text());
                                $('#dexuat').html('');
                            });
                        });
                    })
                </script>

                <ul class="user-menu">
                    <li><a href="#"><i class='bx bx-bell'></i></a></li>
                    <li id="user-circle" class="js-model"><a><i class='bx bx-user-circle'></i></a>
                        <ul id="dang_nhap" class="modal-cart">
                            <?php if (isset($_SESSION['login'])) { ?>
                                <li><b><a class="submenu-a" href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=info">Chào <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></a></b></li>
                                <li><a class="submenu-a" href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                <?php
                                if (isset($_SESSION['isLogin_Admin'])) { ?>
                                    <li><a class="submenu-a" href="<?php echo URL; ?>admin/?mod=login">Trang quản lý</a></li>
                                <?php }
                            } else { ?>
                                <li><b style="color: #0000;">Khách hàng</b></li>
                                <li><a class="submenu-a" href="<?php echo URL; ?>buyer/login-signup/?buyer-login&act=taikhoan">Đăng nhập</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li id="user-circle" class="js-model"><a href="<?php echo URL; ?>giohang/?act=cart#dxd"> <i class='bx bx-cart'></i></a>
                        <div id="dang_nhap" class="cart modal-cart">
                            <?php
                            if (isset($_SESSION['sanpham'])) {
                                foreach ($_SESSION['sanpham'] as $value) { ?>
                                    <div class="cart__item">
                                        <div class="cart-img">
                                            <img src="<?php echo URL; ?>./public/images/<?= $value['HinhAnh1'] ?>" alt="" class="cart__item-img">
                                            <span class="container-cart-name container__name"><?= $value['TenSP'] ?></span>
                                        </div>
                                        <div class="cart__price">
                                            <?= number_format($value['DonGia']) ?> VNĐ
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                    </li>

                    <div class="item-quantity">
                        <?php if (isset($_SESSION['sanpham'])) { ?>
                            <span class="item-quantity-notice"><?php echo count($_SESSION['sanpham']); ?></span>
                        <?php } else { ?>
                            <span class="item-quantity-notice"><?php echo "0"; ?></span>
                        <?php } ?>
                        <!-- <span class="item-quantity-notice">3</span> -->
                    </div>
                </ul>
            </div>
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul id="submenu" class="main-menu">
                        <li><a href="<?php echo URL; ?>danhmuc/?loai=giay-nike&sp=1&page=1">giày nike</a></li>
                        <li><a href="<?php echo URL; ?>danhmuc/?loai=giay-adidas&sp=2&page=1">GIÀY ADIDAS</a></li>
                        <li><a href="<?php echo URL; ?>danhmuc/?loai=giay-vans&sp=3&page=1">GIÀY VANS</a></li>

                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="<?php echo URL; ?>danhmuc/?loai=khong-ten&sp=3&page=1">giày thương hiệu khác</a>
                        </li>
                        <!-- end mega menu -->

                    </ul>
                </div>
            </div>
        </div>
        <!-- end mid header -->
        <!-- bottom header -->

        <!-- end bottom header -->
    </div>
    <!-- end main header -->
</header>

<!-- end header -->