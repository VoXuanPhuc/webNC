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


        if (!isset($_GET['sp']) && !isset($_GET['loai']) && !isset($_GET['page'])) {
                $id = 1;
                $limit = 9;
                $start = ($id - 1) * $limit;
                $data = $this->shop_model->limit($start, $limit);
                $data_count = $this->shop_model->count_sp();
                $data_tong = $data_count['tong'];
                
        } else {
            if (isset($_GET['sp'])) {
                $data = $this->shop_model->sanpham_danhmuc(0, 9, $_GET['sp']);
                $data_noibat = $this->shop_model->sanpham_noibat();
                $data_count = $this->shop_model->count_sp_dm($_GET['sp']);
                $data_tong = $data_count['tong'];
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
        
        if (isset($_POST['keyword'])) {
            $data = $this->shop_model->keywork($_POST['keyword']);
        
            $data_tong = count($data);
        }

        require_once("../Views/shop/shop.php");
    }
}
