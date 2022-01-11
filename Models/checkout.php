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
				$Size = $value['Size'];
				$Color = $value['Color'];
				$MaHD = $data_mahd['MaHD'];
				$query_ct = "INSERT INTO chitiethoadon(MaHD,MaSP,SoLuong,DonGia,Size,Color) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia,'$Size','$Color')";
				$status_ct = $this->conn->query($query_ct);
				
				$query_sp = "UPDATE sanpham SET SoLuong = SoLuong -1 WHERE MaSP = $MaSP";
				$status_sp = $this->conn->query($query_sp);
			}

			if ($status_ct == true) {
				unset($_SESSION['sanpham']);
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

		$query_detail = "SELECT hd.*, cthd.*, cthd.SoLuong as SL, sp.*
						from hoadon as hd, chitiethoadon as cthd, sanpham as sp
						where hd.MaHD=cthd.MaHD and hd.TrangThai = '1' and cthd.MaSP=sp.MaSP and hd.MaND = '" . $_SESSION['login']['MaND'] . "'
						order by hd.ngaylap desc";
		$data_listsp = $this->conn->query($query_detail);
		$data = array();
		while ($row = $data_listsp->fetch_assoc()) {
			$data[] = $row;
		}
		return $data_listsp;
	}

	function account()
	{
		$id = $_SESSION['login']['MaND'];
		return $this->conn->query("SELECT * from nguoidung where MaND = $id")->fetch_assoc();
	}
}
