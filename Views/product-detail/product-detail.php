<!DOCTYPE html>
<html lang="vi-vn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng giày dép Lucky Shoe</title>
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
                            <div class="product-img screen-image" id="product-img">
                                <img id=featured class="screen-image_img" src="<?php echo URL; ?>public/images/<?= $data['HinhAnh1'] ?>" alt="">
                                <div id="lens" class="screen-image_cover"></div>
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
                                    <?php
                                    if (!isset($avgStart)) {
                                        for ($i = 1; $i <= 5; $i++) {
                                            echo ('<i class="far fa-star"></i>');
                                        }
                                    } else {
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($avgStart >= $i) {
                                                echo ('<i class="fas fa-star"></i>');
                                            }
                                        }
                                        $nuasao = floor($avgStart) - $avgStart;
                                        if ($nuasao != 0) {
                                            echo ('<i class="fas fa-star-half"></i>');
                                        }
                                        for ($i = $avgStart + 1; $i <= 5; $i++) {
                                            echo ('<i class="far fa-star"></i>');
                                        }
                                    }

                                    ?>


                                </span>
                            </div>
                            <p style="font-weight: 0;" class="product-description">
                                <?= $data['KieuDang'] ?> </p>
                            <div class="">
                                <h6 class="">size : </h6>
                                <div class="d-flex">
                                    <button value="36" class="btn btn-size buttonsize">36</button>
                                    <button value="37" class="btn btn-size buttonsize">37</button>
                                    <button value="38" class="btn btn-size buttonsize">38</button>
                                    <button value="39" class="btn btn-size buttonsize">39</button>
                                    <button value="40" class="btn btn-size buttonsize">40</button>
                                    <button value="41" class="btn btn-size buttonsize">41</button>
                                    <button value="42" class="btn btn-size buttonsize">42</button>
                                </div>
                            </div>
                            <div class="">
                                <h6 class="">color : </h6>
                                <div class="d-flex">
                                    <button value="Xanh rêu" class="btn btn-color buttoncolor">Xanh rêu</button>
                                    <button value="Đỏ" class="btn btn-color buttoncolor">Đỏ</button>
                                    <button value="Trắng" class="btn btn-color buttoncolor">Trắng</button>
                                    <button value="Đen" class="btn btn-color buttoncolor">Đen</button>
                                    <button value="Đen trắng" class="btn btn-color buttoncolor">Đen trắng</button>
                                    <button value="Hồng nhạt" class="btn btn-color buttoncolor">Hồng nhạt</button>
                                </div>
                            </div>

                            <div class="product-info-price">Giá :  <?= number_format($data['DonGia']) ?> ₫</div>
                            <div>
                                <a href="<?php echo URL; ?>./giohang/checkout.php" class="btn-block btn-danger btn w-50">Mua ngay</a>
                            </div>
                            <div>
                                <form action="<?php echo URL; ?>./giohang/" method="get">
                                    <input type="hidden" name="id" value="<?= $data['MaSP'] ?>">
                                    <input type="hidden" name="xuli" value="add">
                                    <input type="hidden" name="act" value="cart">
                                    <input type="hidden" name="size" value="" id="sizeinput">
                                    <input type="hidden" name="color" value="" id="colorinput">
                                    <button type="submit" class="btn-block btn-danger btn w-50">Thêm vào giỏ hàng</button>
                                </form>
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


                <div <?php if ($statusCheck == 1) {
                            echo "hidden";
                        } ?> class="box chitietttsp">
                    <div class="box-header">
                        Đánh giá tôi
                    </div>
                    <div class="container container-rating">
                        <div class="post">
                            <div class="text">Thanks for rating us!</div>
                            <div class="edit">EDIT</div>
                        </div>
                        <div class="star-widget">
                            <input type="radio" name="rate" id="rate-5">
                            <label for="rate-5" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-4">
                            <label for="rate-4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-3">
                            <label for="rate-3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-2">
                            <label for="rate-2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-1">
                            <label for="rate-1" class="fas fa-star"></label>
                            <form class="form-rating" action="<?php echo URL; ?>sanpham/?act=saveVote" method="post">
                                <header></header>
                                <input name="MaSP" value="<?= $data['MaSP'] ?>" type="hidden" />
                                <input type="hidden" value="<?php if (isset($_GET['MaHD'])) {
                                                                echo ($_GET['MaHD']);
                                                            } ?>" name="MaHD" />
                                <input id="saodg" type="hidden" name="sao">
                                <div class="textarea">
                                    <textarea name="noidung" cols="30" placeholder="Đánh giá sản phẩm.."></textarea>
                                </div>
                                <div class="btn">
                                    <button type="submit">Đánh giá</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>



                <?php require_once('danhgia.php'); ?>

                <?php require_once('sanphamlienquan.php'); ?>
            </div>

            <script src="<?php echo URL; ?>public/js/product-detail.js"></script>
        <?php } else {
        require_once("../Views/error-404.php");
    } ?>
        <?php require_once("../Views/header_footer/footer.php"); ?>
        <script src="<?php echo URL; ?>public/js/index.js"></script>
        <script src="<?php echo URL; ?>public/js/app.js"></script>

        <script>
            $('#rate-1').click(function() {
                $('#saodg').val(1);
            });
            $('#rate-2').click(function() {
                $('#saodg').val(2);
            });
            $('#rate-3').click(function() {
                $('#saodg').val(3);
            });
            $('#rate-4').click(function() {
                $('#saodg').val(4);
            });
            $('#rate-5').click(function() {
                $('#saodg').val(5);
            });
            const btn = document.querySelector("button");
            const post = document.querySelector(".post");
            const widget = document.querySelector(".star-widget");
            const editBtn = document.querySelector(".edit");
            btn.onclick = () => {
                widget.style.display = "none";
                post.style.display = "block";
                editBtn.onclick = () => {
                    widget.style.display = "block";
                    post.style.display = "none";
                }
                return false;
            }
        </script>

        <script>
            $(".buttonsize").click(function() {
                $('#sizeinput').val($(this).val());
                $(".buttonsize").removeClass('btn-primary');
                $(this).addClass('btn-primary');
            });
            $(".buttoncolor").click(function() {
                $('#colorinput').val($(this).val());
                $(".buttoncolor").removeClass('btn-primary');
                $(this).addClass('btn-primary');
            });
        </script>

        <script>
            document.getElementById('product-img').addEventListener('mouseover', function() {
                imageZoom('featured')

            })

            function imageZoom(imgID) {
                let img = document.getElementById(imgID)
                let lens = document.getElementById('lens')

                lens.style.backgroundImage = `url( ${img.src} )`

                let ratio = 3

                lens.style.backgroundSize = (img.width * ratio) + 'px ' + (img.height * ratio) + 'px';

                img.addEventListener("mousemove", moveLens)
                lens.addEventListener("mousemove", moveLens)
                img.addEventListener("touchmove", moveLens)

                function moveLens() {


                    //1
                    let pos = getCursor()
                    //console.log('pos:', pos)

                    //2
                    let positionLeft = pos.x - (lens.offsetWidth / 2)
                    let positionTop = pos.y - (lens.offsetHeight / 2)

                    //5
                    if (positionLeft < 0) {
                        positionLeft = 0
                    }

                    if (positionTop < 0) {
                        positionTop = 0
                    }

                    if (positionLeft > img.width - lens.offsetWidth / 3) {
                        positionLeft = img.width - lens.offsetWidth / 3
                    }

                    if (positionTop > img.height - lens.offsetHeight / 3) {
                        positionTop = img.height - lens.offsetHeight / 3
                    }


                    //3
                    lens.style.left = positionLeft + 'px';
                    lens.style.top = positionTop + 'px';

                    //4
                    lens.style.backgroundPosition = "-" + (pos.x * ratio) + 'px -' + (pos.y * ratio) + 'px'
                }

                function getCursor() {


                    let e = window.event
                    let bounds = img.getBoundingClientRect()

                    //console.log('e:', e)
                    //console.log('bounds:', bounds)
                    let x = e.pageX - bounds.left
                    let y = e.pageY - bounds.top
                    x = x - window.pageXOffset;
                    y = y - window.pageYOffset;

                    return {
                        'x': x,
                        'y': y
                    }
                }

            }

            imageZoom('featured')
        </script>
</body>

</html>