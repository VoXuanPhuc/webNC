<div class="box" style="width: 1220px; margin: auto;">
	<div class="">
		<a href="<?php echo URL; ?>">Trang chủ</a>
		<span><i class='bx bxs-chevrons-right'></i></span>
		<a href="<?php echo URL; ?>danhmuc/">Giỏ hàng</a>
	</div>
</div>
<div style="position: relative; top: 2rem; max-width: 1150px; margin:auto; margin-bottom:100px;" class="section grid wide" id="blogs">
	<div class="section__wrap row">
		<div class="container col-8 mg-0">
			<div class="container__wrap">
				<div class="header">
					<div class="header-item col-4">Sản phẩm</div>
					<div class="header-item col-3">Số lượng</div>
					<div class="header-item col-3">Thành Tiền</div>
					<div class="header-item col-2">Xóa</div>
				</div>
				<div class="content">
					<?php
					if (isset($_SESSION['sanpham'])) {
						foreach ($_SESSION['sanpham'] as $value) { ?>
							<div class="content-cart">
								<div class="container__div-first col-4">
									<img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="" class="cart__img">
									<p class="content-name"><?= $value['TenSP'] ?></p>
								</div>
								<!-- <div class="col-2"><?= number_format($value['DonGia']) ?> VNĐ</div> -->

								<div class="col-3">
									<form action="" method="POST">
										<div class="plus-minus">
											<a href="<?php echo URL; ?>./giohang/?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>" class="dec qtybutton" type="button">-</a>&nbsp;&nbsp;
											<b class="plus-minus-box"><?= $value['SoLuong'] ?></b>&nbsp;&nbsp;
											<a href="<?php echo URL; ?>./giohang/?act=cart&xuli=update&id=<?= $value['MaSP'] ?>" class="inc qtybutton" type="button">+</a>
										</div>
									</form>
								</div>
								<div class="col-3"><?= number_format($value['ThanhTien']) ?> VNĐ</div>
								<div class="col-2"><a href="<?php echo URL; ?>./giohang/?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class='bx bx-eraser'></i></a></div>
							</div>
					<?php }
					} ?>
				</div>
				<div class="content-bottom">
					<div class="content-bottom-item">
						<a href="<?php echo URL; ?>" class=" btn-block btn-danger btn">
							< Back</a>
					</div>
					<div class="content-bottom-item">
						<a href="<?php echo URL; ?>./giohang/checkout.php" class=" btn-block btn-danger btn ">Mua hàng</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="body">
				<div class="body-header">Voucher</div>
				<div style="display: flex; margin: 0 0 10px 6px;">
					<input type="text" class="body-input" placeholder="Nhập voucher...">
					<button class="body-btn">Áp dụng</button>
				</div>
			</div>
			<div class="body">
				<div class="body-item">
					<span class="body-item-desc">Tổng tiền</span>
					<span class=".color-price"><?= number_format($count) ?>đ</span>
				</div>
				<div class="body-item">
					<span class="body-item-desc">Phí vận chuyển</span>
					<span class=".color-price">
						<?php
						if (isset($value)) {
							$ship = (int)($value['ThanhTien'] * 5 / 100);
							echo number_format($value['ThanhTien'] * 5 / 100);
						}
						?> đ
					</span>
				</div>
				<div class="body-item mg-bt-15">
					<span class="body-item-desc">Thành tiền</span>
					<span class=".color-price">
						<?php
						if (isset($value)) {
						echo  number_format($count + $ship);
						}
						?>đ
					</span>
				</div>

				<div class="body-item border-item-wrap">
					<div class="body-item_img">
						<img src="https://logodix.com/logo/1153474.png" alt="" class="body-item_img-cart">
					</div>
					<div class="body-item_img">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/mastercard-6-logo-png-transparent.png" alt="" class="body-item_img-cart">
					</div>
					<div class="body-item_img">
						<img src="https://thumbor.forbes.com/thumbor/fit-in/600x300/https://www.forbes.com/advisor/wp-content/uploads/2020/01/465ae070-3e99-11e9-bfd8-f13e5cef67ba.png" alt="" class="body-item_img-cart">
					</div>
				</div>

			</div>

		</div>
	</div>

</div>