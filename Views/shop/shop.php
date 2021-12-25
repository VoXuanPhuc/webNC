    <!-- end header -->

    <!-- products content bg-main -->
    <div class="">
        <div class="container">
            <div class="box">
                <div class="">
                    <a href="<?php echo URL; ?>">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="<?php echo URL; ?>danhmuc/">Cửa hàng</a>
                    <small style="position: relative;right: -44rem;"><i>Số sản phẩm <?= $data_tong ?></i></small>
                </div>

            </div>
            <div class="box">
                <div class="row">

                    <?php require_once('category.php'); ?>

                    <?php require_once("list-products.php") ?>
                </div>
            </div>
        </div>
    </div>


    <!-- end products content -->
    <!-- app js -->
    <script src="<?php echo URL; ?>public/js/app.js"></script>
    <script src="<?php echo URL; ?>public/js/products.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>