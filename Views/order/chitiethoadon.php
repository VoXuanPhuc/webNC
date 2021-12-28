
<div class="box">
    <div class="breadcumb">
        <a href="<?php echo URL; ?>">Trang chủ</a>
        <span><i class='bx bxs-chevrons-right'></i></span>
        <a>Chi tiết hóa đơn</a>
    </div>
</div>

<section class="checkout-container">
	<div class="container">
		<p class="checkout-content-header">Sản phẩm đã mua</p>
		<div class="container-wrap">
			<div class="">
				<?php
                    if (isset( $data_sanpham )) {
						foreach($data_sanpham as $row_sp){?>
                        <div class="container-wrap-item">
							<div class="container-wrap-item-header">
								<div class="container-wrap-item-header-text">
									<span class="checkout-btn">
										<i class="far fa-comment-dots checkout-icon-whit"></i> Chat
									</span>
									<span class="checkout-lable-header checkout-lable-header-active">
										<i class="fas fa-store checkout-icon"></i> Xem shop
									</span>
								</div>
								<div class="container-wrap-item-header-text">
									<span class="checkout-lable-header">
										<i class="fas fa-truck checkout-icon"></i>
										Giao hàng thành công
									</span>
									<span class="checkout-btn">
										<a href="" class="checkout-btn-link">Đánh giá</a>
									</span>
								</div>
							</div>
							<div class="container-wrap-item-body">
								<div class="container-wrap-item-img">
									<img src="<?php echo URL; ?>public/images/<?= $row_sp['HinhAnh1'] ?>" alt="">
								</div>
								<div class="container-wrap-item-content">
									<div class="container-wrap-item-price">
										<div class="container-wrap-item-name">
											<?php echo  $row_sp['TenSP'] ?>
										</div>
										<div class="container-wrap-item-quantity">
											<?php echo  $row_sp['DonGia'] ?>đ x <?php echo  $row_sp['SoLuong'] ?>
										</div>
									</div>
									<div class="container-wrap-item-total">
										Tổng tiền:
										<?php echo $row_sp['TongTien'] ?>đ
									</div>
								</div>
							</div>
							<div class="container-wrap-item-bottom">
								<div class="checkout-bill-form checkout-btn-submit">
									<input type="submit" value="Mua lại" name="submit" class="btn-block btn-danger btn" required>
								</div>
								<div class="checkout-bill-form checkout-btn-submit">
									<input type="submit" value="Liên hệ người bán" name="submit" class="btn-block btn-danger btn" required>
								</div>
							</div>
						</div>            
				<?php 
				} }?> 
			</div>
		</div>
	</div>
</section>


		
<!-- <a href="<?php echo URL;?>sanpham?act=voteSp&MaHD=<?= $_GET['MaHD'] ?>&id=<?php echo($row_sp['MaSP']);?>">
	Đánh giá
</a> -->