    <!-- end header -->

    <!-- products content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="<?php echo URL; ?>">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="<?php echo URL; ?>danhmuc/">Cửa hàng</a>
                    <small style="position: relative;right: -45rem;"><i>Số sản phẩm <?= $data_tong ?></i></small>
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