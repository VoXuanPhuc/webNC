<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
    <div class="box-header mb-0">
        Sản phẩm liên quan
    </div>
    <div class="box">
        <div class="row" id="products">
            <?php
            if (isset($data_lq) and $data_lq != NULL) {
                foreach ($data_lq as  $value) {
            ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="<?php echo URL; ?>sanpham/?<?= $value['TenSP']; ?>&id=<?= $value['MaSP'] ?>">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="" width="100%" height="100%">
                                    <img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh2'] ?>" alt="" width="100%" height="100%">
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-name">
                                        <?= $value['TenSP']; ?>
                                    </div>
                                    <div class="product-card-price">
                                        <span><del></del></span>
                                        <span class="curr-price"><?= number_format($value['DonGia']) ?>₫</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- single product end -->
                    </div>
            <?php }
            } else {
                echo '<p> KHÔNG CÓ SẢN PHẨM NÀO TẠI ĐÂY </p>';
            } ?>
        </div>

    </div>
</div>