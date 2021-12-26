<?php
require_once("model.php");
class Checkout extends Model
{
	function save($data)
	{
		$f = "";
		$v = "";
		foreach ($data as $key => $value) {
			$f .= $key . ",";
			$v .= "'" . $value . "',";
		}
		$f = trim($f, ",");
		$v = trim($v, ",");
		
		$query = "INSERT INTO hoadon($f) VALUES ($v);";

		$status = $this->conn->query($query);
		
		if ($status == true) {
			$query_mahd = "select MaHD from hoadon ORDER BY NgayLap DESC LIMIT 1";
			$data_mahd = $this->conn->query($query_mahd)->fetch_assoc();
			
			foreach ($_SESSION['sanpham'] as $value) {
				$MaSP = $value['MaSP'];
				$SoLuong = $value['SoLuong'];
				$DonGia = $value['DonGia'];
				$MaHD = $data_mahd['MaHD'];
				$query_ct = "INSERT INTO chitiethoadon(MaHD,MaSP,SoLuong,DonGia) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia)";
	
				$status_ct = $this->conn->query($query_ct);
			}
			unset($_SESSION['sanpham']);


			if ($status_ct == true) {
				setcookie('msg', 'Đăng ký thành công', time() + 2);
				echo '<script language="javascript">';
				echo 'alert("message successfully sent")';
				echo '</script>';
				header('location: ?act=checkout&xuli=add');
			} else {
				setcookie('msg', 'Đăng ký không thành công', time() + 2);
				echo "lôi";
				header('location: ?act=order-error');
			}
		}

		
	}

	function detail($data)
	{

		$query_detail = "SELECT  hd.MaHD, cthd.MaSP, sp.TenSP, sp.HinhAnh1, cthd.SoLuong, cthd.DonGia
                    from hoadon as hd, chitiethoadon as cthd, sanpham as sp
                    where hd.MaHD=cthd.MaHD and cthd.MaSP=sp.MaSP and hd.MaHD= $data ";
		$data_listsp = $this->conn->query($query_detail);
		$data = array();
		while ($row = $data_listsp->fetch_assoc()) {
			$data[] = $row;
		}
		return $data_listsp;
	}
}
