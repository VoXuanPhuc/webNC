
<div class="box">
    <div class="breadcumb">
        <a href="<?php echo URL; ?>">Trang chủ</a>
        <span><i class='bx bxs-chevrons-right'></i></span>
        <a>Giỏ hàng</a>
    </div>
</div>
<div style="position: relative; top: 2rem;" class="section" id="blogs">
    <div class="container">
        <!-- <table>
            <tr id="header">
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Kích cỡ</th>
                <th>Số lượng</th>
                <th>Thành Tiền</th>
                <th>Xóa</th>
            </tr>
            <?php
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) { ?>
                    <tr>
                        <td class="container__td-first">
                            <img src="<?php echo URL; ?>public/images/<?= $value['HinhAnh1'] ?>" alt="" class = "cart__img">
                            <p class = "container-cart-name"><?= $value['TenSP'] ?></p>
                        </td>
                        <td><?= number_format($value['DonGia']) ?> VNĐ</td>
                        <td>
                            <?php # $value['KichCo'] ?>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <div class="plus-minus">
                                    <a href="<?php echo URL; ?>./giohang/?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>" class="dec qtybutton" type="button">-</a>&nbsp;&nbsp;
                                    <b class="plus-minus-box"><?= $value['SoLuong'] ?></b>&nbsp;&nbsp;
                                    <a href="<?php echo URL; ?>./giohang/?act=cart&xuli=update&id=<?= $value['MaSP'] ?>" class="inc qtybutton" type="button">+</a>
                                </div>
                            </form>
                        </td>
                        <td><?= number_format($value['ThanhTien']) ?> VNĐ</td>
                        <td><a href="<?php echo URL; ?>./giohang/?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class='bx bx-eraser'></i></a></td>

                    </tr>
            <?php }
            } ?>

        </table> -->

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
                    // unset($_SESSION['sanpham']);
                    // echo $_SESSION['sanpham'];
                    foreach ($_SESSION['sanpham'] as $value) { ?>
                        <div class="content__cart">
                            <div class="container__div-first col-4" >
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
        <div class="pagination">
            <ul class="pagination home-product__pagination">
                
                <li class="pagination-item pagination-item__active">
                    <a href="" class="pagination-item__link">1</a>
                </li>
                <li class="pagination-item">
                    <a href="" class="pagination-item__link">2</a>
                </li>
                <li class="pagination-item">
                    <a href="" class="pagination-item__link">3</a>
                </li>
                <li class="pagination-item">
                    <a href="" class="pagination-item__link">4</a>
                </li>
                <li class="pagination-item">
                    <a href="" class="pagination-item__link">5</a>
                </li>
                <li class="pagination-item">
                    <a href="" class="pagination-item__link">...</a>
                </li>
                <li class="pagination-item">
                    <a href="" class="pagination-item__link">14</a>
                </li>
                
            </ul>
        </div>
    </div>
</div>

