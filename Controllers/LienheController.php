<?php
require_once("../Models/home.php");
class LienheController
{
    var $home_model;
    public function __construct()
    {
       $this->home_model = new Home();
    }
    
    function list()
    {
        $data_danhmuc = $this->home_model->danhmuc();

        $data_chitietDM = array();

        for($i=4; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->home_model->chitietdanhmuc($i);
        }

        echo'<!DOCTYPE html>
        <html lang="vi-vn">
        
        <head>
            <meta charset="UTF-8">
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

            

                require_once("../Views/lienhe/index.php");

            
                require_once("../Views/header_footer/footer.php");
            '
            <script src="<?php echo URL; ?>public/js/index.js"></script>
            <script src="<?php echo URL; ?>public/js/app.js"></script>
        </body>
        
        </html>';
    }
}