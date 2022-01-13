<link rel="stylesheet" href="<?php echo URL; ?>public/css/login.css">
<div class="container-info grid wide">
	<div class="info-desc">
		<div class="">
			<a href="<?php echo URL; ?>">Trang chủ</a>
			<span><i class='bx bxs-chevrons-right'></i></span>
			<a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=info">Tài khoản</a>
		</div>
	</div>
	<div class="row" style="padding-left: 16px;">
		<div class="col-2">
			<div class="row content-navbar">
				<div class="header-navbar">
					<div class="header-navbar-img">
						<img src="https://iconape.com/wp-content/png_logo_vector/avatar-4.png" alt="">
					</div>
					<div class="header-navbar-info">
						<span><?php echo  $data['Ho'] . $data['Ten'] ?></span>
					</div>
				</div>
				<ul class="container-info-list">
					<li class="container-info-item">
						<a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=info" class="container-info-link">Tài khoản của tôi</a>
					</li>
					<li class="container-info-item container-info-item-active">
						<a href="<?php echo URL; ?>giohang/checkout.php?act=checkout&xuli=detail" class="container-info-link">Sản phẩm đã mua</a>
					</li>
					<li class="container-info-item">
						<a href="#" class="container-info-link">Đơn mua</a>
					</li>
					<li class="container-info-item">
						<a href="#" class="container-info-link">Kho voucher</a>
					</li>
					<li class="container-info-item">
						<a href="#" class="container-info-link">Thông báo</a>
					</li>
					<li class="container-info-item">
						<a href="<?php echo URL; ?>buyer/login-signup/?act=taikhoan&xuli=dangxuat" class="container-info-link">Đăng xuất</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container col-10" style="margin-top: 0;">
			<div class="container-wrap">
				<div class="">
					<?php

					foreach ($data_sanpham as $row_sp) { ?>
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
										<a href="<?php echo URL; ?>sanpham?act=voteSp&MaHD=<?= $row_sp['MaHD'] ?>&id=<?php echo ($row_sp['MaSP']); ?>" class="checkout-btn-link">Đánh giá</a>
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
											<?php echo  number_format($row_sp['DonGia']) ?>đ x <?php echo $row_sp['SL'] ?>
										</div>
									</div>
									<div class="">
										<div class="container-wrap-item-size-color">
											<div class="container-wrap-item-size">Size:
												<?php echo  $row_sp['Size'] ?>
											</div>
											<div class="container-wrap-item-color">Màu:
												<?php echo  $row_sp['Color'] ?>
											</div>
										</div>
										<div class="container-wrap-item-total">
											Tổng tiền:
											<?php echo number_format($row_sp['TongTien']) ?>đ
										</div>
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
					}
					?>
				</div>
			</div>
		</div>
		</section>
	</div>
</div>