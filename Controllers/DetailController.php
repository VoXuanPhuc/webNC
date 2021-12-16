<?php
require_once("../Models/Detail.php");
class DetailController
{
    var $detail_model;
    var $statusCheck = 1;
    public function __construct()
    {
        $this->detail_model = new Detail();
    }

    function checkVote($idSP, $MaHD)
    {
        if (isset($_SESSION['login']['MaND'])) {

            $MaND = $_SESSION['login']['MaND'];
            $VoteStatus = $this->detail_model->checkVoted($MaND, $idSP, $MaHD);
            
            if (isset($VoteStatus['voted'])) {
                $statusCheck = $VoteStatus['voted'];
                if ($statusCheck == 0) {
                    $this->statusCheck = $statusCheck;
                }
            }
            $this->list();
        }
    }

    function vote()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        if (isset($_SESSION['login']['MaND'])) {
            $data = array(
                'idNguoidung' => $_SESSION['login']['MaND'],
                'idSanpham' => $_POST['MaSP'],
                'ngayVote' => $ThoiGian,
                'sao' => $_POST['sao'],
                'noidung' => $_POST['noidung'],
                'hinhanh' => ''
            );
            $this->detail_model->saveVote($data, $_POST['MaHD']);
        }
    }

    function list()
    {
        $statusCheck = $this->statusCheck;
        $data_danhmuc = $this->detail_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->detail_model->chitietdanhmuc($i);
        }

        $id = $_GET['id'];

        $data = $this->detail_model->detail_sp($id);
        $voteSP = $this->detail_model->selectVote($id);

        if ($data != null) {
            $data_lq = $this->detail_model->sanpham_danhmuc(0, 4, $data['MaDM']);
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
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <!-- boxicons -->
            <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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



        require_once("../Views/product-detail/product-detail.php");


        require_once("../Views/header_footer/footer.php");
        '
            <script src="<?php echo URL; ?>public/js/index.js"></script>
            <script src="<?php echo URL; ?>public/js/app.js"></script>
            
        </body>
        
        </html>';
    }
}
