<?php
require_once("model.php");
class Home extends Model
{
    function top_sp_moinhat()
    {
        $query = "SELECT * from baeshop.sanpham  WHERE TrangThai = 1 
        order by ThoiGian desc limit 8;";

        require("result.php");
        return $data;
    }

    function top_sp_banchay()
    {
        $query = "SELECT sum(cthd.SoLuong) as sl, sp.*
            from baeshop.sanpham as sp, baeshop.chitiethoadon as cthd 
            WHERE sp.MaSP = cthd.MaSP and TrangThai = 1
            group by cthd.MaSP
            order by sl desc
            limit 8;";
        require("result.php");
        return $data;
    }
}
