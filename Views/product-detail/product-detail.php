<?php if ($data != null) { ?>
    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="<?php echo URL; ?>">Trang Chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="<?php echo URL; ?>danhmuc/">Cửa hàng</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a style="text-transform: capitalize;"><?= $data['TenSP'] ?></a>
                </div>
            </div>
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <?php if ($data['HinhAnh1'] !=  null) { ?>
                        <div class="product-img" id="product-img">
                            <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh1'] ?>" alt="">
                        </div>
                    <?php } ?>
                    <div class="box">
                        <center>
                            <h4>Hình ảnh :</h4>
                        </center>
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh2'] ?>" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh3'] ?>" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh1'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12" style="position: relative;left: 5rem;top: 1rem;">
                    <div class="product-info">
                        <h3>
                            <?= $data['TenSP'] ?>
                        </h3>

                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Đã đánh giá:</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </span>
                        </div>
                            <p style="font-weight: 0;" class="product-description">
                                <?= $data['KieuDang'] ?> </p>
                        <div class="product-info-price"><?= number_format($data['DonGia']) ?> ₫</div>
                        <div class="cart__active">
                            <div >
                                <a href="<?php echo URL;?>./giohang/cart.php" class="btn-flat btn-hover">Mua ngay</a>
                            </div>
                            <div class = "add__cart">
                                <a href="<?php echo URL;?>./giohang/?act=cart&xuli=add&id=<?=$data['MaSP']?>" class="btn-flat btn-hover">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    Chi tiết
                </div>
                <div class="product-detail-description">
                    <div class="product-detail-description-content">
                            <?= $data['MoTa'] ?> </p>
                            <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh1'] ?>" alt="">
                            <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh2'] ?>" alt="">
                            <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh3'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo URL; ?>public/js/product-detail.js"></script>
<?php } else {
    require_once("../Views/error-404.php");
} ?>