
<div class="box">
    <div class="breadcumb">
        <a href="<?php echo URL; ?>">Trang chủ</a>
        <span><i class='bx bxs-chevrons-right'></i></span>
        <a>Chi tiết hóa đơn</a>
    </div>
</div>

<section class="checkout-container">
	<div class="container">
		<div class="checkout-wrap">
			<div class="checkout-body">
				<div class="checkout-bill order-history">
					<h3 class="checkout-bill-desc" id= "order-desc">Sản phẩm đã mua</h3>
					<div class="header">
						<div class = "header-item col-6" >Sản phẩm</div>
						<div class = "header-item col-3" >Đơn giá</div>
						<div class = "header-item col-3" >Thao tác</div>
					</div>
					
					<?php
                    if (isset( $data_sanpham )) {
						foreach($data_sanpham as $row_sp){
						?>
                        <div class="content__cart">
							<div class="col-2">
								<img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="">
							</div>
                            <div class="col-4" >
								<?php echo  $row_sp ['TenSP'] ?>
							</div>
                            <div class="col-3"><?php echo  $row_sp ['DonGia'] ?></div>
                            <div class="col-3">
								<a href="">Đánh giá</a>
							</div> 
                        </div>                 
                        <?php 
                        } }?> 
				</div>
        	</div>
		</div>
	</div>
</section>
