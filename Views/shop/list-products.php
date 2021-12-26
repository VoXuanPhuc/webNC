<div class="col-lg-9 col-md-9 col-sm-12">
    
    <div class="box">
        <div class="row" id="products">
            <?php
            if (isset($data) and $data != NULL) {
                foreach ($data as  $value) {
            ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
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
        <div class="box">
            
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link m-0" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php $nextpage = $data_tong / 9;
                    $nextpage = ceil($nextpage);
                for ($i = 1; $i <= $nextpage; $i++) { ?>                        
                    <li class="page-item">
                        <a class="page-link m-0 
                        <?php if(isset($_GET['page'])){ 
                                if ($_GET['page'] == $i) 
                                {echo "active";} }
                            else if ($i==1) echo"active";  
                                ?>" href="?page=<?= $i ?>">
                            <?= $i ?>
                        </a>
                    </li>
                <?php } ?>
                <li class="page-item">
                <a class="page-link m-0" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
            </nav>
        </div>
    </div>