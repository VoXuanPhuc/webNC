<?php if ($data != null) { ?>
    <!-- product-detail content -->
    <div class="container-fluid">
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
                <div class="col-5 col-lg-5 col-md-4 col-12">
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
                <div class="col-7 col-lg-7 col-md-8 col-12" style="position: relative;left: 5rem;top: 1rem;">
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
                        <div>
                            <a href="../giohang/cart.php" class="btn-block btn-danger btn w-25">Mua ngay</a>
                        </div>
                        <div>
                            <a href="<?php echo URL; ?>./giohang/?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" class="btn-block btn-danger btn w-25">Thêm vào giỏ hàng</a>
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
                        <p><?= $data['MoTa'] ?> </p>
                    </div>
                </div>
                <?php require_once('danhgia.php'); ?>
                
                <form <?php if($statusCheck == 1) {echo "hidden";}?> action="<?php echo URL; ?>sanpham/?act=saveVote" method="post">
                    <div class="input-group">
                        <input name="MaSP" value="<?= $data['MaSP'] ?>" type="hidden"/>
                        <input name="MaKH" value="14" type="hidden"/>
                        <select name="sao" class="form-select" aria-label="Default select example">
                            <option selected>Chọn Sao</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <textarea name="noidung" class="form-control" aria-label="With textarea"></textarea>
                        <button type="submit" class="input-group-text">Đánh giá</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="<?php echo URL; ?>public/js/product-detail.js"></script>
<?php } else {
    require_once("../Views/error-404.php");
} ?>