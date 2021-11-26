<!-- hero section -->
<div class="hero">
    <div class="slider">
        <?php $i = 2;
        foreach ($data_banner as  $value) {  ?>
            <div class="container">
                <!-- slide item -->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                sản phẩm mới
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                <?= $value['TenBN'] ?>
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                <?= $value['MoTaBN'] ?>
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" target="_blank" rel="noopener" onclick="location.href='<?php echo URL; ?>danhmuc/'">
                                    <span>Xem ngay</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="<?php echo URL; ?>Public/images/<?= $value['HinhAnh'] ?>" alt="">
                    </div>
                </div>
            <?php } ?>
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
    </div>
</div>
<!-- end hero section -->

<!-- promotion section -->
<div class="promotion">
    <div class="row">
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>GIAO HÀNG TOÀN QUỐC</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Vận chuyển khắp Việt Nam</span></button></center>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>THANH TOÁN KHI NHẬN HÀNG</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Nhận hàng tại nhà rồi thanh toán</span></button></center>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>BẢO HÀNH DÀI HẠN</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Bảo hàng lên đến 60 ngày</span></button></center>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>ĐỔI HÀNG DỄ DÀNG</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Đổi hàng thoải mái trong 30 ngày</span></button></center>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- end promotion section -->