<?php
require_once("../Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $data_danhmuc = $this->cart_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 4; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->cart_model->chitietdanhmuc($i);
        }

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        echo'<!DOCTYPE html>
        <html lang="vi-vn">
        
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>GIÀY BAEShop – Hệ thống giày thể thao số 1 Đà Nẵng</title>
            <!-- google font -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
            <!-- boxicons -->
            <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
            <!-- app css -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/app.css">
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/grid.css">
            <link rel="stylesheet" href="../public/css/app.css?v=<?php echo time(); ?>">
            <link rel="stylesheet"
                href="../public/css/grid.css?v=<?php echo time(); ?>">
        </head>
        
        <body>';
                require_once("../Views/header_footer/header.php");

            

                require_once("../Views/giohang/giohang.php");

            
                require_once("../Views/header_footer/footer.php");
            '
            <script src="<?php echo URL; ?>public/js/index.js"></script>
            <script src="<?php echo URL; ?>public/js/app.js"></script>
        </body>
        
        </html>';
    }
    function add_cart()
    {
        $id = $_GET['id'];
        $data = $this->cart_model->detail_sp($id);
        $count = 0;
        if (isset($_SESSION['sanpham'][$id])) {
            $arr = $_SESSION['sanpham'][$id];
            $arr['SoLuong'] = $arr['soluong'] + 1;
            $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$id] = $arr;
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = 1;
            $arr['ThanhTien'] = $data['DonGia'];
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $_SESSION['sanpham'][$id] = $arr;
        }

        foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['ThanhTien'];
        }

        header('Location:?act=cart#dxd');
    }
    function update_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['SoLuong'] = $arr['SoLuong'] + 1;
        $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location: ?act=cart#dxd');
    }
    function delete_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        if ($arr['SoLuong'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
        } else {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
        }
        header('Location: ?act=cart#dxd');
    }
    function deleteall_cart()
    {
        unset($_SESSION['sanpham'][$_GET['id']]);
        header('Location: ?act=cart#dxd');
    }
}
