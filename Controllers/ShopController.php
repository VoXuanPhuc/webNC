<?php
require_once("../Models/shop.php");
class ShopController
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    function list()
    {

        $data_danhmuc = $this->shop_model->danhmuc();

        $data_loaisp = $this->shop_model->loaisp(0, 8);

        $data_chitietDM = array();

        for ($i = 4; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->shop_model->chitietdanhmuc($i);
        }
        if (isset($_GET['page'])) {
            $id = $_GET['page'];
            $limit = 9;
            $start = ($id - 1) * $limit;
            $data = $this->shop_model->limit($start, $limit);
            $data_count = $this->shop_model->count_sp();
            $data_tong = $data_count['tong'];
            $test = 0;
        }


        if (isset($_GET['sp']) and isset($_GET['loai'])) {
            $data_loai = $this->shop_model->chitiet_loai($_GET['loai'], $_GET['sp']);
            if ($data_loai != null) {
                $data = $this->shop_model->chitiet($data_loai[0]['MaLSP'], $_GET['sp']);
                $data_noibat = $this->shop_model->sanpham_noibat();
                $data_count = $this->shop_model->count_sp_ctdm($_GET['sp'], $data_loai[0]['MaLSP']);
                $data_tong = $data_count['tong'];
            }
        } else {
            if (isset($_GET['sp'])) {
                $data = $this->shop_model->sanpham_danhmuc(0, 9, $_GET['sp']);
                $data_noibat = $this->shop_model->sanpham_noibat();
                $data_count = $this->shop_model->count_sp_dm($_GET['sp']);
                $data_tong = $data_count['tong'];
            } else {
                if (isset($_POST['keyword'])) {
                    $data = $this->shop_model->keywork($_POST['keyword']);
                    $data_noibat = $this->shop_model->sanpham_noibat();

                    $data_tong = count($data);
                } else {
                    $id = isset($_GET['page']) ? $_GET['page'] : 1;
                    $limit = 9;
                    $start = ($id - 1) * $limit;
                    $data = $this->shop_model->limit($start, $limit);
                    $data_noibat = $this->shop_model->sanpham_noibat();
                    $data_count = $this->shop_model->count_sp();
                    $data_tong = $data_count['tong'];
                    $test = 0;
                }
            }
        }

        echo '<!DOCTYPE html>
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
            <link rel="icon" href="../public/images/logo/BAEShop_transparent.png">
            <link rel="stylesheet" href="../public/css/app.css">
            <link rel="stylesheet" href="../public/css/grid.css">
        </head>
        
        <body>';
        require_once("../Views/header_footer/header.php");



        require_once("../Views/shop/shop.php");


        require_once("../Views/header_footer/footer.php");
        '
            <script src="<?php echo URL; ?>public/js/index.js"></script>
            <script src="<?php echo URL; ?>public/js/app.js"></script>
        </body>
        
        </html>';
    }
}
