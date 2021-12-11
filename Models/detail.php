<?php
require_once("model.php");
class Detail extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from SanPham where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    function saveVote($voute)
    {
        $f = "";
        $v = "";
        foreach ($voute as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO danhgia($f) VALUES ($v);";
        $status = $this->conn->query($query);
        if ($status == true) {
            header('Location: ' . '/baeshop.com');
        }
    }

    function selectVote($idSp)
    {
        $query =  "SELECT * from danhgia where idSanpham = $idSp ";
        $result = $this->conn->query($query);
        $voteSanPham = array();

        while ($row = $result->fetch_assoc()) {
            $voteSanPham[] = $row;
        }
        return $voteSanPham;
    }

    function selectKhachHang ($idKh)
    {
        $query =  "SELECT * from nguoidung where MaND = $idKh ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}
