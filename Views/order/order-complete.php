<!-- pages-title-start -->
<div class="box">
    <div class="breadcumb">
        <a href="<?php echo URL; ?>">Trang chủ</a>
        <span><i class='bx bxs-chevrons-right'></i></span>
        <a>Hóa đơn</a>
    </div>
</div>
<!-- pages-title-end -->
<!-- order-complete content section start -->
<section class="checkout-container">
	<div class="container">
		<div class="checkout-wrap">
			<div class="checkout-body">
				<div class="checkout-bill order-history">
					<h3 class="checkout-bill-desc" id= "order-desc">Lịch sử mua hàng</h3>
					<div class="header">
						<div class = "header-item col-1" >Mã HD</div>
						<div class = "header-item col-3" >Tên khách hàng</div>
						<div class = "header-item col-2" >SDT</div>
						<div class = "header-item col-2" >Ngày mua</div>
						<div class = "header-item col-2" >Tổng tiền</div>
						<div class = "header-item col-2" >Thao tác</div>
					</div>
					<?php
					// require_once("../../Models/connection.php");
					$servername = "localhost";
					$username = "root";
					$password = "admin1234";
					$dbname = "baeshop";
					// tạo connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// kiểm tra connection
					$sql = "SELECT * FROM hoadon";
					$result = mysqli_query($conn, $sql);
					?>
					<?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="content__cart">
                            <div class="col-1" ><?php echo $row['MaHD'] ?></div>
                            <div class="col-3"><?php echo $row['NguoiNhan'] ?></div>
                            <div class="col-2"><?php echo $row['SDT'] ?></div>
                            <div class="col-2"><?php echo $row['NgayLap'] ?></div>
                            <div class="col-2"><?php echo $row['TongTien'] ?></div>
                            <div class="col-2">
								<a
								 href="<?php echo URL; ?>giohang/checkout.php?act=checkout&xuli=detail&MaHD=<?php echo $row['MaHD']?>">
								 Xem chi tiết
								</a>
							</div> 
                        </div>                 
                <?php }
                } ?> 
				</div>
        	</div>
		</div>
	</div>
</section>
<!-- order-complete content section end -->