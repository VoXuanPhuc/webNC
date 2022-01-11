<!-- pages-title-start -->
<div class="box" style="width: 1220px; margin: auto;">
	<div class="">
		<a href="<?php echo URL; ?>">Trang chủ</a>
		<span><i class='bx bxs-chevrons-right'></i></span>
		<a href="<?php echo URL; ?>danhmuc/">Thanh toán</a>
	</div>
</div>
<!-- pages-title-end -->

<!-- Checkout content section start -->
<section class="checkout-container">
	<div class="container">
		<div class="checkout-wrap">
			<div class="checkout-body row">
				<div class="content__cart checkout-content__cart mt-0 col-6">
					<div class="checkout-content__cart-body">
						<?php
						if (isset($_SESSION['sanpham'])) {
							foreach ($_SESSION['sanpham'] as $value) { ?>
								<div class="content__car-item">
									<img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="" class="content__cart-img">
									<div class="content__cart-body">
										<div class="content__cart-body-item">
											<div class="">
												<p class="container-cart-name"><?= $value['TenSP'] ?></p>
											</div>
											<div style="width: 12%;">
												<form action="" method="POST">
													<div class="plus-minus">
														<b class="plus-minus-box">x <?= $value['SoLuong'] ?></b>&nbsp;&nbsp;
													</div>
												</form>
											</div>
										</div>
										<div class="content__cart-body-item">
											<div class="">Giá:<?= number_format($value['DonGia']) ?> VNĐ</div>
											<div class="text-red" style="font-weight:600;"><?= number_format($value['ThanhTien']) ?> VNĐ</div>
										</div>
									</div>
								</div>
						<?php }
						} ?>
					</div>

					<div class="checkout-content-total">
						<div class="body-item">
							<span class="body-item-desc">Tổng tiền</span>
							<span class=".color-price"><?= number_format($count) ?>đ</span>
						</div>
						<div class="body-item">
							<span class="body-item-desc">Mã giảm giá</span>
							<span class=".color-price">0đ</span>
						</div>

						<div class="body-item">
							<span class="body-item-desc">Phí vận chuyển</span>
							<span class=".color-price"><?php
														$ship = (int)($value['ThanhTien'] * 5 / 100);
														echo number_format($value['ThanhTien'] * 5 / 100) ?>đ
							</span>
						</div>
						<div class="body-item body-item-active text-red ">
							<span class="body-item-desc">Thành tiền</span>
							<span class=".color-price"><?= number_format($count + $ship) ?>đ</span>
						</div>
					</div>
				</div>

				<div class="checkout-bill col-6">
					<h3 class="checkout-bill-desc">Thông tin thanh toán</h3>
					<form action="<?php echo URL; ?>giohang/checkout.php?act=checkout&xuli=save" method="post">
						<div class="checkout-bill-name">
							<div class="checkout-bill-form">
								<input type="text" value="<?php echo $_SESSION['login']['Ho'] . " " . $_SESSION['login']['Ten'] ?>" name="name" class="checkout-bill-form-input" required>
							</div>
							<div class="checkout-bill-form">
								<input type="email" value="<?= $_SESSION['login']['Email'] ?>" name="email" class="checkout-bill-form-input" required>
							</div>
							<div class="checkout-bill-form">
								<input type="text" pattern="[0-9]+" minlength="10" value="" name="phone" class="checkout-bill-form-input" required placeholder="Số điện thoại">
							</div>
							<div class="checkout-bill-form">
								<select name="tructiep" id="" class="checkout-bill-form-input">
									<option>Thanh toán khi nhận hàng</option>
									<option>Thanh toán online</option>
								</select>
								<!-- <input type="text" value ="Thanh toán khi nhận hàng" name="tructiep" class="checkout-bill-form-input" required> -->
							</div>
							<div class="checkout-bill-form">
								<input type="text" value="" name="address" class="checkout-bill-form-input" required placeholder="ĐỊa chỉ nhận hàng">
							</div>
							<div class="checkout-bill-form">
								<input type="submit" value=" Đặt hàng" name="submit" class="btn-block btn-danger btn w-25 btn-order" required>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Checkout content section end -->