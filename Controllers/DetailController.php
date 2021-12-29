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
        
       
        require_once("../Views/product-detail/product-detail.php");
    }
}
