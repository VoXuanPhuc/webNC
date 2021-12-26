<!-- pages-title-start -->
<div class="box">
    <div class="breadcumb">
        <a href="<?php echo URL; ?>">Trang chủ</a>
        <span><i class='bx bxs-chevrons-right'></i></span>
        <a href="#" >Thanh toán</a>
    </div>
</div>
<!-- pages-title-end -->

<!-- Checkout content section start -->
<section class="checkout-container">
	<div class="container">
		<div class="checkout-wrap">
			<div class="checkout-header">
				<h3>Chi tiết thanh toán</h3>
			</div>
			<div class="checkout-body">
				<div class="checkout-body-header">
					<div class = "header-item col-6" >Sản phẩm</div>
					<div class = "header-item col-2" >Đơn giá</div>
					<div class = "header-item col-2" >Số lượng</div>
					<div class = "header-item col-2" >Thành Tiền</div>
				</div>
				<?php
                if (isset($_SESSION['sanpham'])) {
                    foreach ($_SESSION['sanpham'] as $value) { ?>
                        <div class="content__cart checkout-content__cart mt-0">
                            <div class="container__div-first col-6" >
                                <img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="" class = "cart__img">
                                <p class = "container-cart-name"><?= $value['TenSP'] ?></p>
                            </div>
                            <div class="col-2"><?= number_format($value['DonGia']) ?> VNĐ</div>
                            <div class="col-2">
                                <form action="" method="POST">
                                    <div class="plus-minus">
                                        <b class="plus-minus-box"><?= $value['SoLuong'] ?></b>&nbsp;&nbsp;
                                    </div>
                                </form>
                            </div>
                            <div class="col-2"><?= number_format($value['ThanhTien']) ?> VNĐ</div>
                        </div>                 
                <?php }
                } ?> 


				<div class="checkout-bill">
					<h3 class="checkout-bill-desc">Thông tin hóa đơn</h3>
					<form action="<?php echo URL; ?>giohang/checkout.php?act=checkout&xuli=save" method="post">
						<div class="checkout-bill-name">
							<div class="checkout-bill-form">
								<label for="" class="checkout-bill-form-text">Họ tên khách hàng</label>
								<input type="text" value="<?php echo $_SESSION['login']['Ho']." ".$_SESSION['login']['Ten']?>" name="name" class="checkout-bill-form-input" required> 
							</div>
							<div class="checkout-bill-form">
								<label for="" class="checkout-bill-form-text">Email</label>
								<input type="email" value="<?=$_SESSION['login']['Email']?>" name="email" class="checkout-bill-form-input" required>
							</div>
							<div class="checkout-bill-form">
								<label for="" class="checkout-bill-form-text">Số điện thoại</label>
								<input type="text" pattern="[0-9]+" minlength="10"  value="" name="phone" class="checkout-bill-form-input" required>
							</div>
							<div class="checkout-bill-form">
								<label for="" class="checkout-bill-form-text">Phương thức thanh toán</label>
								<select name="tructiep" id="" class="checkout-bill-form-input">
									<option>Thanh toán khi nhận hàng</option>
									<option>Thanh toán online</option>
								</select>
								<!-- <input type="text" value ="Thanh toán khi nhận hàng" name="tructiep" class="checkout-bill-form-input" required> -->
							</div>
							<div class="checkout-bill-form">
								<label for="" class="checkout-bill-form-text">Địa chỉ nhận hàng</label>
								<input type="text" value="" name="address" class="checkout-bill-form-input" required>
							</div>
							<div class="checkout-bill-form">
								<label for="" class="checkout-bill-form-text">Tổng tiền</label>
								<input type="text" value="<?= number_format($count) ?> VNĐ" name="sumprice" class="checkout-bill-form-input" required>
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