<?php
require_once("../Models/checkout.php");
class CheckoutController
{
    var $checkout_model;
    public function __construct()
    {
        $this->checkout_model = new Checkout();
    }
    function list()
    {
        if (isset($_SESSION['login'])) {
            $data_danhmuc = $this->checkout_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
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
                <link rel="stylesheet" href="<?php echo URL; ?>public/css/app.css">
                <link rel="stylesheet" href="<?php echo URL; ?>public/css/grid.css">
                <link rel="stylesheet" href="../public/css/app.css?v=<?php echo time(); ?>">
                <link rel="stylesheet"
                    href="../public/css/grid.css?v=<?php echo time(); ?>">
            </head>

            <body>';
                    require_once("../Views/header_footer/header.php");



                    require_once("../Views/giohang/thanhtoan.php");


                    require_once("../Views/header_footer/footer.php");
                '
                <script src="<?php echo URL; ?>public/js/index.js"></script>
                <script src="<?php echo URL; ?>public/js/app.js"></script>
            </body>

            </html>';
        } else {
            header('location: /baeshop.com/buyer/login-signup/?buyer-login&act=taikhoan');
            echo "<script>alert('Ban Chua Login');</script>";
        }
        //  else {
        //     header('location: ?buyer-login&act=add');
        // }
    }
    function  save()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        $data = array(
            'MaND' => $_SESSION['login']['MaND'],
            'NgayLap' => $ThoiGian,
            'NguoiNhan' => $_POST['name'],
            'SDT' => $_POST['phone'],
            'DiaChi' => $_POST['address'],
            'PhuongThucTT' => $_POST['tructiep'],
            'TongTien' => $count,
            'TrangThai'  =>  '0',
        );
        $this->checkout_model->save($data);

    }
    function order_complete()
    {
        $data_danhmuc = $this->checkout_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
        }
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }




        //require_once('Views/index.php');
        // header('location: ?act=checkout#dxd');
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



                    require_once("../Views/order/order-complete.php");


                    require_once("../Views/header_footer/footer.php");
                '
                <script src="<?php echo URL; ?>public/js/index.js"></script>
                <script src="<?php echo URL; ?>public/js/app.js"></script>
            </body>

            </html>';
    }

    function detail($data){


        $data_sanpham = $this->checkout_model->detail($data);

        $data = $this->checkout_model->account();



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
                <!-- link fontawesome -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
                <!-- boxicons -->
                <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
                <!-- app css -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
                <link rel="stylesheet" href="<?php echo URL; ?>public/css/app.css">
                <link rel="stylesheet" href="<?php echo URL; ?>public/css/grid.css">
                <link rel="stylesheet" href="../public/css/app.css?v=<?php echo time(); ?>">
                <link rel="stylesheet" href="../public/css/grid.css?v=<?php echo time(); ?>">
            </head>

            <body>';
                    require_once("../Views/header_footer/header.php");



                    require_once("../Views/order/chitiethoadon.php");


                    require_once("../Views/header_footer/footer.php");
                '
                <script src="<?php echo URL; ?>public/js/index.js"></script>
                <script src="<?php echo URL; ?>public/js/app.js"></script>
            </body>

            </html>';

      }
}
