<div class="col-9 col-md-12">
    <div class="box filter-toggle-box">
        <button class="btn-flat btn-hover" id="filter-toggle">filter</button>
    </div>
    <div class="box">
        <div class="row" id="products">
            <?php
            if (isset($data) and $data != NULL) {
                foreach ($data as  $value) {
            ?>
                    <div class="col-4 col-md-6 col-sm-12">
                        <a href="<?php echo URL; ?>sanpham/?<?= $value['TenSP']; ?>&id=<?= $value['MaSP'] ?>">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="">
                                    <img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh2'] ?>" alt="">
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


        <div class="box">
            <ul class="pagination">

                <?php $nextpage = $data_tong / 3;
                 for ($i = 1; $i <= $nextpage; $i++) { ?>
                    <li><a href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>