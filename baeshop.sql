-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 31, 2021 lúc 02:43 AM
-- Phiên bản máy phục vụ: 8.0.25
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baeshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Id` int NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `TenBN` varchar(250) NOT NULL,
  `MoTaBN` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Id`, `HinhAnh`, `TenBN`, `MoTaBN`) VALUES
(27, 'p1.jpg', 'p1', ''),
(28, 'p2.jpg', 'p2', ''),
(29, 'p3.jpg', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int NOT NULL,
  `MaSP` int NOT NULL,
  `SoLuong` int NOT NULL,
  `DonGia` float NOT NULL,
  `voted` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`, `voted`) VALUES
(19, 74, 1, 10900000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int NOT NULL,
  `noidung` text,
  `sao` int DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `idNguoidung` int DEFAULT NULL,
  `idSanpham` int DEFAULT NULL,
  `ngayVote` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id`, `noidung`, `sao`, `hinhanh`, `idNguoidung`, `idSanpham`, `ngayVote`) VALUES
(7, 'hàng quá xịn', 5, '', 18, 67, '2021-12-19 17:05:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `HinhAnh`) VALUES
(1, 'GIÀY NIKE', 'https://ragus.vn/wp-content/uploads/2019/08/logo-Nike-swoosh-12-765x400.jpg'),
(2, 'GIÀY ADIDAS', 'https://banner2.cleanpng.com/20180810/ubq/kisspng-shoe-adidas-logo-eyesmith-sport-fashion-optical-bir-logonun-ekli-ve-izgisiyle-letmeniz-5b6d8feaeb8290.1711674615339069229647.jpg'),
(3, 'GIÀY VANS', 'https://drake.vn/image/catalog/H%C3%ACnh%20content/vans-logo-repeat/vans-logo-repeat-7.jpg'),
(4, 'GIÀY THỜI TRANG', 'https://tui-giay.com/logo-giay-dep/imager_4_19065_700.jpg'),
(5, 'GIÀY THỂ THAO', 'https://cdn.printgo.vn/uploads/media/774255/logo-giay-1_1586510617.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int NOT NULL,
  `MaND` int NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaND`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`) VALUES
(19, 23, '2021-12-31 08:23:32', 'võ xuan phuc', '0988406374', '02 Thanh Son', 'Thanh toán khi nhận hàng', 10900000, 'Đã xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int NOT NULL,
  `TenKM` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float(11,0) NOT NULL,
  `NgayBD` datetime NOT NULL,
  `TrangThai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `TrangThai`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', 1),
(2, 'Giảm giá', 'GiamGia', 500000, '2019-05-01 00:00:00', 1),
(3, '35%', '35%', 200000, '2019-05-01 00:00:00', 1),
(4, '45%', '45%', 200000, '2019-05-01 00:00:00', 1),
(5, '50%', '50%', 250000, '2019-05-01 00:00:00', 1),
(13, 'Thích thì khuyến mãi', 'Khuyến mãi Ok', 100, '2020-07-18 11:26:06', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsutimkiem`
--

CREATE TABLE `lichsutimkiem` (
  `id` int NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `ngaygio` datetime DEFAULT NULL,
  `MaND` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int NOT NULL,
  `TenLSP` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`, `MaDM`) VALUES
(44, 'GIÀY BALENCIAGA', '555088-018_2_1.png', 'GIÀY BALENCIAGA', 4),
(45, 'GIÀY CONVERSE', 'CV2365-400_2.png', 'GIÀY CONVERSE', 4),
(46, 'GIÀY NIKE', '555088-018_3_1.png', 'GIÀY NIKE', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int NOT NULL,
  `Ho` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int NOT NULL,
  `TrangThai` int NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`, `session`) VALUES
(18, 'Vo', 'Xuan', '', '0988406374', 'phucpro746@gmail.com', '', 'xuanphuc', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, NULL),
(21, '', 'Nguyễn Thị Thu Thuỷ', '', '', 'thuthuyxh1311@gmail.com', '', 'Nguyễn Thị Thu Thuỷ', 'Czw7wy909D', 1, 1, 'z2CwD7987w'),
(23, 'Phúc', 'Võ Xuân', '', '', 'voxuanphuc746@gmail.com', '', 'Phúc Võ Xuân', 'BDAwDDBzvw', 1, 1, 'yxwC82yzxy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int NOT NULL,
  `TenQuyen` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Nhân Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int NOT NULL,
  `MaLSP` int NOT NULL,
  `MaDM` int NOT NULL,
  `TenSP` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int NOT NULL,
  `SoLuong` int UNSIGNED NOT NULL DEFAULT '1',
  `HinhAnh1` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKM` int NOT NULL,
  `KieuDang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrangThai` int NOT NULL,
  `MoTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `MaDM`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `MaKM`, `KieuDang`, `TrangThai`, `MoTa`, `ThoiGian`) VALUES
(64, 44, 1, 'Nike Air Force 1 Low 07 LX Turtle', 350000, 10, 'DA8482-200-1.jpg', 'DA8482-200-2.jpg', 'DA8482-200-3.jpg', 3, 'Phối màu Midnight Navy / University Red / White / ', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Air Jordan 1 Low Denim</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;DH1259-400</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Midnight Navy / University Red / White / Hemp\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Midnight Navy / University Red / White / Hemp</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;8 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Peter Moore</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;<a href=\"https://shoegameviet.com/all-air-jordan-shoes/air-jordan-1/air-jordan-1-low\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Air Jordan 1 Low</a></span></div></div></div></div>', '2021-09-29 19:16:56'),
(65, 46, 1, 'Nike Air Force 1 Low Cordura Cargo Khaki', 450000, 20, 'DO6701-300-1.jpg', 'DO6701-300-2.jpg', 'DO6701-300-3.jpg', 1, 'Phối màu Cargo Khaki / Cargo Khaki — Black', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Nike Air Force 1 Low Cordura Cargo Khaki</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;DO6701-300</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Cargo Khaki / Cargo Khaki — Black\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Cargo Khaki / Cargo Khaki — Black</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;9 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Bruce Kilgore</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;<a href=\"https://shoegameviet.com/nike/nike-lifestyle/air-force-1\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Air Force 1</a></span></div></div></div></div>', '2021-09-29 19:28:50'),
(66, 46, 1, 'Nike Air Max 90 Premium Sanddrift', 4500000, 5, 'DA1641-201-1.jpg', 'DA1641-201-2.jpg', 'DA1641-201-3.jpg', 3, 'Phối màu Hemp / Sanddrift / Light Orewood', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Nike Air Max 90 Premium Sanddrift</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;DA1641-201</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Hemp / Sanddrift / Light Orewood\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Hemp / Sanddrift / Light Orewood</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;9 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Tinker Hatfield</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;<a href=\"https://shoegameviet.com/nike/nike-air-max/air-max-90\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Air Max 90</a></span></div></div></div></div>', '2021-09-29 19:31:55'),
(67, 46, 1, 'Nike Air Max Pre Day Hasta Anthracite', 5000000, 3, 'DC5330-301-1.jpg', 'DC5330-301-2.jpg', 'DC5330-301-3.jpg', 1, 'Phối màu Hasta / Iron Grey — Cave Stone — Anthraci', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Nike Air Max Pre Day Hasta Anthracite</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;DC5330-301</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Hasta / Iron Grey — Cave Stone — Anthracite\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Hasta / Iron Grey — Cave Stone — Anthracite</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;8 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Nike</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;<a href=\"https://shoegameviet.com/nike/nike-air-max/nike-air-max-pre-day\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Nike Air Max Pre Day</a></span></div></div></div></div>', '2021-09-29 19:33:11'),
(68, 44, 2, 'Adidas Ultra Boost 2021 Arizona State', 4600000, 5, 'GX7968-1.jpg', 'GX7968-2.jpg', 'GX7968-3.jpg', 1, 'Phối màu Cloud White / Team Maroon — Team / Colleg', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">adidas Ultra Boost 2021 Arizona State</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;GX7968</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Cloud White / Team Maroon — Team / College Gold\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Cloud White / Team Maroon — Team / College Gold</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;25 tháng 8 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;adidas</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;<a href=\"https://shoegameviet.com/adidas/ultraboost\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Ultra-Boost</a></span></div></div></div></div>', '2021-09-29 19:35:45'),
(69, 44, 1, 'Nike Dunk High Midnight Navy', 5900000, 10, 'DB2179-104-1.jpg', 'DB2179-104-2.jpg', 'DB2179-104-3.jpg', 1, '<br /><b>Notice</b>:  Undefined index: ManHinh in ', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Nike Dunk High Midnight Navy</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> DD1399-104</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"White / Midnight Navy\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> White / Midnight Navy</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> 3 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Peter Moore</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Nike</span></div></div></div></div>', '2021-09-29 19:43:28'),
(70, 46, 2, 'Nike Dunk High Sports Specialties White Navy', 10300000, 2, 'DH0953-400-1.jpg', 'DH0953-400-2.jpg', 'DH0953-400-3.jpg', 1, 'Phối màu White / Midnight Navy — Green — Volt', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Nike Dunk High Sports Specialties White Navy</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> DH0953-400</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"White / Midnight Navy — Green — Volt\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> White / Midnight Navy — Green — Volt</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> 9 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Peter Moore</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Nike</span></div></div></div></div>', '2021-10-01 12:24:43'),
(71, 46, 1, 'Nike Dunk Mid Social Status Free Lunch Chocolate Milk', 16200000, 10, 'DJ1173-700-1.jpg', 'DJ1173-700-2.jpg', 'DJ1173-700-3.jpg', 1, 'Phối màu Dark Curry / Tan — Shy Pink — University ', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Nike Dunk Mid Social Status Free Lunch Chocolate Milk</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;DJ1173-700</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Dark Curry / Tan — Shy Pink — University Blue\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Dark Curry / Tan — Shy Pink — University Blue</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;2 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Peter Moore</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Nike</span></div></div></div></div>', '2021-09-29 19:45:23'),
(72, 44, 1, 'Nike Dunk Mid Social Status Free Lunch Strawberry Milk', 13300000, 10, 'GX7970-1.jpg', 'GX7970-2.jpg', 'GX7970-3.jpg', 1, 'Phối màu Light Soft Pink / Shy Pink — Tan', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">Nike Dunk Mid Social Status Free Lunch Strawberry Milk</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> DJ1173-600</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Light Soft Pink / Shy Pink — Tan\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Light Soft Pink / Shy Pink — Tan</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> 17 tháng 9 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Peter Moore</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> <a href=\"https://shoegameviet.com/nike/nike-lifestyle/dunk\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Dunk</a></span></div></div></div></div>', '2021-09-29 19:52:01'),
(73, 44, 1, 'Adidas Ultra Boost 2021 Indiana', 5000000, 0, 'DJ1173-600-1.jpg', 'DJ1173-600-2.jpg', 'DJ1173-600-3.jpg', 1, 'Phối màu Cloud White / Team Victory Red / Cloud Wh', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">adidas Ultra Boost 2021 Indiana</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> GX7970</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Cloud White / Team Victory Red / Cloud White\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Cloud White / Team Victory Red / Cloud White</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> 25 tháng 8 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> adidas</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> <a href=\"https://shoegameviet.com/adidas/ultraboost\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Ultra-Boost</a></span></div></div></div></div>', '2021-10-01 12:27:33'),
(74, 44, 2, 'adidas Ultra Boost 2021 Kansas', 10900000, 4, 'GX7969-1.jpg', 'GX7969-2.jpg', 'GX7969-3.jpg', 1, 'Phối màu Grey / Royal Blue / Grey', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">adidas Ultra Boost 2021 Kansas</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;GX7969</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Grey / Royal Blue / Grey\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;Grey / Royal Blue / Grey</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;25 tháng 8 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;adidas</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\">&nbsp;<a href=\"https://shoegameviet.com/adidas/ultraboost\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Ultra-Boost</a></span></div></div></div></div>', '2021-09-29 19:51:40');
INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `MaDM`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `MaKM`, `KieuDang`, `TrangThai`, `MoTa`, `ThoiGian`) VALUES
(75, 44, 2, 'adidas Ultra Boost 2021 Louisville', 6700000, 10, 'GY0427-1.jpg', 'GY0427-2.jpg', 'GY0427-4.jpg', 1, 'Phối màu Cloud White / Core Black / Team Power Red', 1, '<h1 style=\"-webkit-tap-highlight-color: transparent; line-height: 28px; font-size: 18px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; padding-top: 10px;\">adidas Ultra Boost 2021 Louisville</h1><div class=\"product-view\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"product-info\" style=\"-webkit-tap-highlight-color: transparent; margin: unset; display: unset; padding: unset;\"><div class=\"product-details detail-column\" style=\"-webkit-tap-highlight-color: transparent; width: auto; margin-right: unset; flex-direction: unset; justify-content: unset; text-align: unset; max-width: unset;\"><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Mã giày</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> GY0427</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phối màu</span></div><span title=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Cloud White / Core Black / Team Power Red\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> Cloud White / Core Black / Team Power Red</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Phát hành</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> 25 tháng 8 năm 2021</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Nhà thiết kế</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> adidas</span></div><div class=\"detail\" style=\"-webkit-tap-highlight-color: transparent; font-size: 15px; letter-spacing: 1px; margin-left: 0px; white-space: nowrap; text-overflow: ellipsis; max-width: 100%; overflow: hidden; margin-bottom: 0px; color: rgb(68, 68, 68);\"><div class=\"pinfo-container\" style=\"-webkit-tap-highlight-color: transparent; display: inline;\"><span class=\"title\" style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s; font-weight: 700; -webkit-font-smoothing: antialiased;\">Danh mục</span></div><span style=\"-webkit-tap-highlight-color: transparent; transition: all 0.3s ease 0s;\"> <a href=\"https://shoegameviet.com/adidas/ultraboost\" style=\"-webkit-tap-highlight-color: transparent; color: inherit; display: inline-block; line-height: inherit; cursor: pointer; transition: all 0.3s ease 0s;\">Ultra-Boost</a></span></div></div></div></div>', '2021-10-01 12:41:23'),
(76, 44, 2, 'adidas Ultra Boost 2021 Washington', 10300000, 2, 'GX7967-2.jpg', 'GX7967-1.jpg', 'GX7967-3.jpg', 1, '', 1, '', '2021-10-01 16:13:07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNguoidung` (`idNguoidung`),
  ADD KEY `idSanpham` (`idSanpham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`) USING BTREE;

--
-- Chỉ mục cho bảng `lichsutimkiem`
--
ALTER TABLE `lichsutimkiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaND` (`MaND`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaLSP`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaLSP`) USING BTREE;

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE,
  ADD KEY `MaKM` (`MaKM`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `lichsutimkiem`
--
ALTER TABLE `lichsutimkiem`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`idNguoidung`) REFERENCES `nguoidung` (`MaND`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`idSanpham`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `lichsutimkiem`
--
ALTER TABLE `lichsutimkiem`
  ADD CONSTRAINT `lichsutimkiem_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
