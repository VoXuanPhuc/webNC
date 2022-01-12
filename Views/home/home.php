<link rel="stylesheet" href="public/css/mycss/skin-demo-4.css">
<link rel="stylesheet" href="public/css/mycss/demo-4.css">
<?php
require_once("banner.php");
?>
<?php
    if (isset($_SESSION['isLogin_Admin'])) {
        require_once("notification.php");
    }

?>
<div class="container">
    <h4 class="title text-center my-4">Explore Popular Categories</h4><!-- End .title text-center -->

    <div class="cat-blocks-container">
        <div class="row">
            <?php
            foreach ($data_danhmuc as $item) { ?>
                <div class="col-6 col-sm-4 col-lg-2 mx-3">
                    <a href="<?php echo URL; ?>danhmuc" class="cat-block">
                        <figure>
                            <span>
                                <img src="<?= $item['HinhAnh'] ?>" alt="Category image">
                            </span>
                        </figure>

                        <h6 class="cat-block-title">
                            <?= $item['TenDM'] ?>
                        </h6><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 -->
            <?php
            } ?>
        </div><!-- End .row -->
    </div><!-- End .cat-blocks-container -->
</div><!-- End .container -->
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
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <a href="<?php echo URL; ?>sanpham/?<?= $data_sanpham1[$i]['TenSP'] ?>&id=<?= $data_sanpham1[$i]['MaSP'] ?>">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <img src="public/images/<?= $data_sanpham1[$i]['HinhAnh1'] ?>" alt="" height="100%">
                                    <img src="public/images/<?= $data_sanpham1[$i]['HinhAnh2'] ?>" alt="" height="100%">
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
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <a href="<?php echo URL; ?>sanpham/?<?= $data_sanpham1[$i]['TenSP'] ?>&id=<?= $data_sanpham2[$i]['MaSP'] ?>">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <img src="public/images/<?= $data_sanpham2[$i]['HinhAnh1'] ?>" alt="" height="100%">
                                    <img src="public/images/<?= $data_sanpham2[$i]['HinhAnh2'] ?>" alt="" height="100%">
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
                        </a>
                    </div>
                <?php } ?>
            <?php

            } ?>
        </div>
    </div>
</div>


<!-- end product list -->