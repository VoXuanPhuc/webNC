<!-- hero section -->

<div class="hero  " style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-3" style="width: 300px; height:auto">
        <div class="bg-second">
            <div class="bottom-header container">
                <ul class="main-menu" style=" display: block;
                    height:auto;  
                    justify-content: center;
                    align-items: center;">
                    <li style="height: 70px;"><a href="<?php echo URL;?>danhmuc?giay-nike&sp=1">giày nike</a></li>
                    <li style="height: 70px;"><a href="<?php echo URL;?>danhmuc?giay-adidas&sp=2">GIÀY ADIDAS</a></li>
                    <li style="height: 70px;"><a href="<?php echo URL;?>danhmuc?giay-vans&sp=3">GIÀY VANS</a></li>
                    <?php $i = 4;
                    foreach ($data_chitietDM as $row): ?>
                        <!-- mega menu -->
                        <li class="mega-dropdown" style="height: 70px;">
                            <a href="<?php echo URL; ?>danhmuc?giay-the-thao&sp=<?= $i ?>">giày thể thao</a>
                        </li>
                    <?php 
                    break;
                    endforeach; ?>
                </ul>
            </div>
        </div>
       
        </div>
        <div class="col-lg-9" style="height: 280px;">
        <!-- <div class="slider"> -->
            <!-- <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" style="height: 280px;">
                <div class="carousel-inner" style="height: 280px;">
                    <div class="carousel-item active" data-interval="10000">
                    <img src="<?php echo URL; ?>public/images/slide/1.png" class="d-block w-100" alt="...">
                    
                    </div>
                    <div class="carousel-item" data-interval="2000">
                    <img src="<?php echo URL; ?>public/images/slide/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php echo URL; ?>public/images/slide/3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div> -->
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                <img src="<?php echo URL; ?>public/images/slide/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                <img src="<?php echo URL; ?>public/images/slide/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo URL; ?>public/images/slide/3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
            </div>
                    <!-- </div> -->
                    </div>
                </div>
                
            </div>
<!-- end hero section -->

<!-- promotion section -->
<div class="promotion">
    <div class="row">
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>GIAO HÀNG TOÀN QUỐC</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Vận chuyển khắp Việt Nam</span></button></center>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>THANH TOÁN KHI NHẬN HÀNG</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Nhận hàng tại nhà rồi thanh toán</span></button></center>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>BẢO HÀNH DÀI HẠN</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Bảo hàng lên đến 60 ngày</span></button></center>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12  text-row">
            <div class="promotion-box">
                <div class="text">
                    <h3>ĐỔI HÀNG DỄ DÀNG</h3>
                    <center><button class="btn-flat btn-hover btn"><span>Đổi hàng thoải mái trong 30 ngày</span></button></center>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- end promotion section -->