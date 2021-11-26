<?php
require_once("banner.php");
?>
<!-- product list -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>TOP SẢN PHẨM MỚI NHẤT</h2>
        </div>
        <div class="row" id="latest-products">
            <?php
            if ($data_sanpham1 != NULL) {
            ?> <?php
                for ($i = 0; $i < count($data_sanpham1); $i++) {
                ?>

                    <div class="col-3 col-md-6 col-sm-12">
                        <a href="<?php echo URL; ?>sanpham/?<?= $data_sanpham1[$i]['TenSP'] ?>&id=<?= $data_sanpham1[$i]['MaSP'] ?>">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <img src="public/images/<?= $data_sanpham1[$i]['HinhAnh1'] ?>" alt="">
                                    <img src="public/images/<?= $data_sanpham1[$i]['HinhAnh2'] ?>" alt="">
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-name">
                                        <?= $data_sanpham1[$i]['TenSP'] ?>
                                    </div>
                                    <div class="product-card-price">
                                        <span><del></del></span>
                                        <span class="curr-price"><?= number_format($data_sanpham1[$i]['DonGia']) ?>₫</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?>
            <?php

            } ?>
        </div>
    </div>
</div>
<!-- end product list -->

<!-- product list -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>top Sản phẩm bán chạy</h2>
        </div>
        <div class="row" id="best-products">
            <?php
            if ($data_sanpham2 != NULL) {
            ?>
                <?php
                for ($i = 0; $i < count($data_sanpham2); $i++) {
                ?>
                    <div class="col-3 col-md-6 col-sm-12">

                        <a href="<?php echo URL; ?>sanpham/?<?= $data_sanpham1[$i]['TenSP'] ?>&id=<?= $data_sanpham2[$i]['MaSP'] ?>">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <img src="public/images/<?= $data_sanpham2[$i]['HinhAnh1'] ?>" alt="">
                                    <img src="public/images/<?= $data_sanpham2[$i]['HinhAnh2'] ?>" alt="">
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-name">
                                        <?= $data_sanpham2[$i]['TenSP'] ?>
                                    </div>
                                    <div class="product-card-price">
                                        <span><del></del></span>
                                        <span class="curr-price"><?= number_format($data_sanpham2[$i]['DonGia']) ?>₫</span>
                                    </div>
                                </div>
                            </div>

                    </div></a>
                <?php } ?>
            <?php

            } ?>
        </div>
    </div>
</div>
<!-- end product list -->