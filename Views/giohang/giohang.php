<div class="box">
    <div class="breadcumb">
        <a href="<?php echo URL; ?>">Trang chủ</a>
        <span><i class='bx bxs-chevrons-right'></i></span>
        <a>Giỏ hàng</a>
    </div>
</div>
<div style="position: relative; top: 2rem;" class="section" id="blogs">
    <div class="container">
        <div class="header">
            <div class = "header-item col-4" >Sản phẩm</div>
            <div class = "header-item col-2" >Giá</div>
            <div class = "header-item col-1" >Kích cỡ</div>
            <div class = "header-item col-2" >Số lượng</div>
            <div class = "header-item col-2" >Thành Tiền</div>
            <div class = "header-item col-1" >Xóa</div>
        </div>
        <div class="content">
            <?php
                if (isset($_SESSION['sanpham'])) {
                    foreach ($_SESSION['sanpham'] as $value) { ?>
                        <div class="content__cart">
                            <div class="container__div-first col-4" >
								<input clas="content__cart-input" type="checkbox" value="" name="" id="">
                                <img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="" class = "cart__img">
                                <p class = "container-cart-name"><?= $value['TenSP'] ?></p>
                            </div>
                            <div class="col-2"><?= number_format($value['DonGia']) ?> VNĐ</div>
                            <div class="col-1">
                                <?php # $value['KichCo'] ?>
                            </div>
                            <div class="col-2">
                                <form action="" method="POST">
                                    <div class="plus-minus">
                                        <a href="<?php echo URL; ?>./giohang/?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>" class="dec qtybutton" type="button">-</a>&nbsp;&nbsp;
                                        <b class="plus-minus-box"><?= $value['SoLuong'] ?></b>&nbsp;&nbsp;
                                        <a href="<?php echo URL; ?>./giohang/?act=cart&xuli=update&id=<?= $value['MaSP'] ?>" class="inc qtybutton" type="button">+</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-2"><?= number_format($value['ThanhTien']) ?> VNĐ</div>
                            <div class="col-1"><a href="<?php echo URL; ?>./giohang/?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class='bx bx-eraser'></i></a></div> 
                        </div>                 
                <?php }
                } ?>  
        </div>

		<div class="checkout">
			<div class="checkout-desc">
				<div class = "checkout-desc-text">
					<span>Tổng sản phẩm : </span>
					<span class=""><?php if(isset($_SESSION['sanpham'])) {echo count($_SESSION['sanpham']); }?></span>
				</div>
				<div class = "checkout-desc-price">
					<span>Tổng thanh toán : </span>
					<span class=""><?= number_format($count) ?> đ</span>
				</div>
				<div>
                    <a href="<?php echo URL;?>./giohang/checkout.php" class="btn-block btn-danger btn w-100">Mua hàng</a>
                </div>
			</div>
		</div>
        <!-- <div class="row margin-top">
			<div class="col-6">
				<div class="single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết đơn hàng</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<form action="?act=checkout" method="post">
							<table>
								<tbody>
									<tr>
										<th>Tổng Giỏ Hàng</th>
										<td><?= number_format($count) ?> VNĐ</td>
									</tr>
									<tr>
										<th>Giảm giá</th>
										<td>0%</td>
									</tr>
									<tr>
										<th>Vận Chuyển</th>
										<td>15,000 VNĐ</td>
									</tr>
									<tr>
										<th>Vat</th>
										<td>0 VNĐ</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th class="tfoot-padd">Tổng tiền</th>
										<td class="tfoot-padd"><?=number_format($count+15000)?> VNĐ</td>
									</tr>
								</tfoot>
							</table>
							<div class="submit-text coupon">
								<button type="submit">Đặt hàng</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Mã giảm giá</strong></h3>
					</div>
					<div class="cart-form-text custom-input">
						<p>Nhập mã giảm giá nếu bạn có !!</p>
						<form action="" method="post">
							<input type="text" name="subject" placeholder="Nhập mã tại đây..." />
							<div class="submit-text coupon">
								<button type="submit">Áp dụng</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->
    </div>
</div>

