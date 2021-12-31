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

    function saveVote($vote, $MaHD)
    {
        $f = "";
        $v = "";
        foreach ($vote as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO danhgia($f) VALUES ($v);";
        $status = $this->conn->query($query);
        if ($status == true) {
            $idSP = $vote['idSanpham'];
            $mand = $_SESSION['login']['MaND'];
            $queryupdatevoute = 
            "UPDATE chitiethoadon cthd, hoadon hd
            set cthd.voted = 1 where cthd.MaHD = hd.MaHD and hd.MaND =  $mand and cthd.MaSP = $idSP and hd.MaHD = $MaHD";
            $this->conn->query($queryupdatevoute);
            header('Location: ' . '/baeshop.com/sanpham/?id='.$idSP);
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

    function checkVoted($idKh, $MaSP, $MaHD) {
        $query = "SELECT voted from chitiethoadon cthd, hoadon h, nguoidung n
        where cthd.MaHD = h.MaHD and h.MaND = n.MaND and n.MaND = $idKh and cthd.voted = 0 and cthd.MaSP = $MaSP and h.MaHD = $MaHD";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}
