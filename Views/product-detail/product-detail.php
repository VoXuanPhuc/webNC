<!DOCTYPE html>
<html lang="vi-vn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIÀY BAEShop – Hệ thống giày thể thao số 1 Đà Nẵng</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- app css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/app.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/grid.css">
    <link rel="stylesheet" href="../public/css/app.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/grid.css?v=<?php echo time(); ?>">
</head>

<body>

    <?php require_once('../Views/header_footer/header.php'); ?>
    <?php if ($data != null) { ?>
        <!-- product-detail content -->
        <div class="container-fluid">
            <div class="container">

                <div class="row product-row">
                    <div class="col-5 col-lg-5 col-md-4 col-12 col-lef-image">
                        <?php if ($data['HinhAnh1'] !=  null) { ?>
                            <div class="product-img" id="product-img">
                                <img src="<?php echo URL; ?>public/images/<?= $data['HinhAnh1'] ?>" alt="">
                            </div>
                        <?php } ?>
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
                    <div class="col-6 col-lg-6 col-md-8 col-12 " style="position: relative;left: 5rem;top: 1rem;">
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
                                <a href="<?php echo URL; ?>./giohang/checkout.php" class="btn-block btn-danger btn w-50">Mua ngay</a>
                            </div>
                            <div>
                                <a href="<?php echo URL; ?>./giohang/?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" class="btn-block btn-danger btn w-50">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box chitietttsp">
                    <div class="box-header">
                        Chi tiết
                    </div>
                    <div class="product-detail-description">
                        <div class="product-detail-description-content">
                            <p><?= $data['MoTa'] ?> </p>
                        </div>
                    </div>

                </div>

                <?php require_once('danhgia.php'); ?>

                <form class="form-rating" <?php if ($statusCheck == 1) {
                                                echo "hidden";
                                            } ?> action="<?php echo URL; ?>sanpham/?act=saveVote" method="post">
                    <div class="input-group">
                        <input type="hidden" value="<?php if (isset($_GET['MaHD'])) {
                                                        echo ($_GET['MaHD']);
                                                    } ?>" name="MaHD" />
                        <input name="MaSP" value="<?= $data['MaSP'] ?>" type="hidden" />
                        <input name="MaKH" value="14" type="hidden" />
                        <select name="sao" class="form-select form-select-rating" aria-label="Default select example">
                            <option selected>Chọn Sao</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <textarea placeholder="nhập cảm nghĩ sản phẩm tại đây" name="noidung" class="form-control form-control-rating-area" aria-label="With textarea"></textarea>
                        <button type="submit" class="input-group-text">Đánh giá</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="<?php echo URL; ?>public/js/product-detail.js"></script>
    <?php } else {
        require_once("../Views/error-404.php");
    } ?>
    <?php require_once("../Views/header_footer/footer.php"); ?>
    <script src="<?php echo URL; ?>public/js/index.js"></script>
    <script src="<?php echo URL; ?>public/js/app.js"></script>

</body>

</html>