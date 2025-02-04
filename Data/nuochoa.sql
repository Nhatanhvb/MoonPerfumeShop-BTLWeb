-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonperfumeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTietDonHang` int(11) NOT NULL,
  `GhiChu` varchar(100) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` int(11) DEFAULT NULL,
  `MaSanPham` int(11) NOT NULL,
  `MaDon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `IDChiTietGioHang` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` int(11) DEFAULT NULL,
  `MaSanPham` int(11) NOT NULL,
  `MaGioHang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDon` int(11) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `ThanhTien` double NOT NULL,
  `TrangThai` char(1) NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `MaHTTT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giamgia`
--

CREATE TABLE `giamgia` (
  `MaGiamGia` int(11) NOT NULL,
  `TenGiamGia` varchar(50) NOT NULL,
  `PhanTramGiamGia` float NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` int(11) NOT NULL,
  `TongSo` int(11) DEFAULT NULL,
  `TongGiaTri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `MaHinhThucThanhToan` int(11) NOT NULL,
  `TenHinhThuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `TenKhachHang` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `IDTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKhuyenMai` int(11) NOT NULL,
  `TenKhuyenMai` varchar(50) NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `VatPham` varchar(50) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `ID` int(11) NOT NULL,
  `Quyen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(50) NOT NULL,
  `GiaTien` varchar(20) NOT NULL,
  `Mota` varchar(255) NOT NULL,
  `Status` char(1) DEFAULT '1',
  `SoLuong` int(11) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `MaDanhMuc` int(11) NOT NULL,
  `MaThuongHieu` int(11) NOT NULL,
  `MaGiamGia` int(11) NOT NULL,
  `MaKhuyenMai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `IDPhanQuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaThuongHieu` int(11) NOT NULL,
  `TenThuongHieu` varchar(50) NOT NULL,
  `Logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Table structure for table `news`
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaChiTietDonHang`);

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`IDChiTietGioHang`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`),
  ADD UNIQUE KEY `TenDanhMuc` (`TenDanhMuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDon`);

--
-- Indexes for table `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`MaGiamGia`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`);

--
-- Indexes for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`MaHinhThucThanhToan`),
  ADD UNIQUE KEY `TenHinhThuc` (`TenHinhThuc`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `IDTaiKhoan` (`IDTaiKhoan`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKhuyenMai`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Quyen` (`Quyen`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `thuonghieu`
--

ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaThuongHieu`),
  ADD UNIQUE KEY `TenThuongHieu` (`TenThuongHieu`);

-- Indexes for table `news`
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `giamgia`
MODIFY COLUMN `MaGiamGia` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `danhmuc`
MODIFY COLUMN `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `chitietdonhang`
MODIFY COLUMN `MaChiTietDonHang` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `chitietgiohang`
MODIFY COLUMN `IDChiTietGioHang` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `donhang`
MODIFY COLUMN `MaDon` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `giohang`
MODIFY COLUMN `MaGioHang` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `hinhthucthanhtoan`
MODIFY COLUMN `MaHinhThucThanhToan` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `khachhang`
  MODIFY COLUMN `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `khuyenmai`
MODIFY COLUMN `MaKhuyenMai` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `phanquyen`
MODIFY COLUMN `ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sanpham`
MODIFY COLUMN `MaSanPham` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `taikhoan`
MODIFY COLUMN `ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `thuonghieu`
MODIFY COLUMN `MaThuongHieu` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `news`
MODIFY COLUMN `id` int(11) NOT NULL AUTO_INCREMENT;

-- Chèn dữ liệu vào bảng `donhang`
INSERT INTO `donhang` (`DiaChi`, `ThanhTien`, `TrangThai`, `MaKhachHang`, `MaHTTT`) VALUES
('123 Đường ABC, Quận 1', 5000000, '1', 1, 1),
('456 Đường DEF, Quận 2', 4500000, '1', 2, 2),
('789 Đường GHI, Quận 3', 4000000, '1', 3, 3),
('101 Đường JKL, Quận 4', 6000000, '1', 4, 4),
('202 Đường MNO, Quận 5', 5500000, '1', 5, 5),
('303 Đường PQR, Quận 6', 4800000, '1', 6, 6),
('404 Đường STU, Quận 7', 4700000, '1', 7, 7),
('505 Đường VWX, Quận 8', 4900000, '1', 8, 8),
('606 Đường YZA, Quận 9', 5200000, '1', 9, 9),
('707 Đường BCD, Quận 10', 5300000, '1', 10, 10),
('808 Đường EFG, Quận 11', 5800000, '1', 11, 11),
('909 Đường HIJ, Quận 12', 4600000, '1', 12, 12);


-- Chèn dữ liệu vào bảng `giohang`
INSERT INTO `giohang` (`TongSo`, `TongGiaTri`) VALUES
(5,  19900000);

-- Chèn dữ liệu vào bảng `chitietdonhang`
INSERT INTO `chitietdonhang` (`GhiChu`, `SoLuong`, `DonGia`, `MaSanPham`, `MaDon`) VALUES
('Giao hàng nhanh', 1, 5000000, 1, 1),
('Giao hàng nhanh', 1, 4500000, 2, 2),
('Giao hàng nhanh', 1, 4000000, 3, 3),
('Giao hàng nhanh', 1, 6000000, 4, 4),
('Giao hàng nhanh', 1, 5500000, 5, 5),
('Giao hàng nhanh', 1, 4800000, 6, 6),
('Giao hàng nhanh', 1, 4700000, 7, 7),
('Giao hàng nhanh', 1, 4900000, 8, 8),
('Giao hàng nhanh', 1, 5200000, 9, 9),
('Giao hàng nhanh', 1, 5300000, 10, 10),
('Giao hàng nhanh', 1, 5800000, 11, 11),
('Giao hàng nhanh', 1, 4600000, 12, 12);


-- Chèn dữ liệu vào bảng `chitietgiohang`
INSERT INTO `chitietgiohang` (`SoLuong`, `DonGia`, `MaSanPham`, `MaGioHang`) VALUES
(1, 5000000, 1, 1),
(3, 4500000, 2, 1),
(2, 4000000, 3, 1),
(1, 5800000, 11, 1),
(1, 4600000, 12, 1);

-- Chèn dữ liệu vào bảng `danhmuc`
INSERT INTO `danhmuc` (`TenDanhMuc`) VALUES
('Nước hoa nữ'),
('Nước hoa nam'),
('Nước hoa unisex'),
('Nước hoa cao cấp'),
('Nước hoa cho bé'),
('Nước hoa hương hoa'),
('Nước hoa hương gỗ'),
('Nước hoa hương trái cây'),
('Nước hoa mùi tự nhiên'),
('Nước hoa hương vani');


-- Chèn dữ liệu vào bảng `giamgia`
INSERT INTO `giamgia` (`TenGiamGia`, `PhanTramGiamGia`, `NgayBatDau`, `NgayKetThuc`) VALUES
('Giảm giá 10%', 10, '2024-12-01', '2024-12-31'),
('Giảm giá 15%', 15, '2024-12-01', '2024-12-31'),
('Giảm giá 20%', 20, '2024-12-01', '2024-12-31'),
('Giảm giá 25%', 25, '2024-12-01', '2024-12-31'),
('Giảm giá 30%', 30, '2024-12-01', '2024-12-31'),
('Giảm giá 5%', 5, '2024-12-01', '2024-12-31'),
('Giảm giá 40%', 40, '2024-12-01', '2024-12-31'),
('Giảm giá 50%', 50, '2024-12-01', '2024-12-31'),
('Giảm giá 60%', 60, '2024-12-01', '2024-12-31'),
('Giảm giá 70%', 70, '2024-12-01', '2024-12-31');



-- Chèn dữ liệu vào bảng `hinhthucthanhtoan`
INSERT INTO `hinhthucthanhtoan` (`TenHinhThuc`) VALUES
('Tiền mặt'),
('Chuyển khoản'),
('Ví điện tử'),
('Thanh toán qua thẻ'),
('Thanh toán qua PayPal'),
('Thanh toán qua ZaloPay'),
('Thanh toán qua Momo'),
('Thanh toán qua VNPAY'),
('Thanh toán qua VNPayQR'),
('Thanh toán qua QRCode');

-- Chèn dữ liệu vào bảng `khachhang`
INSERT INTO `khachhang` (`TenKhachHang`, `DiaChi`, `Email`, `SDT`, `IDTaiKhoan`) VALUES
('Nguyễn Văn A', '123 Đường ABC, Quận 1', 'abc@gmail.com', '0123456789', 1),
('Nguyễn Văn B', '456 Đường DEF, Quận 2', 'xyz@gmail.com', '0987654321', 2),
('Nguyễn Văn C', '789 Đường GHI, Quận 3', 'xyz1@gmail.com', '0123456729', 3),
('Nguyễn Văn D', '101 Đường JKL, Quận 4', 'xyz2@gmail.com', '0987654321', 4),
('Nguyễn Văn E', '202 Đường MNO, Quận 5', 'xyz3@gmail.com', '0123456789', 5),
('Nguyễn Văn F', '303 Đường PQR, Quận 6', 'xyz4@gmail.com', '0987654321', 6);

-- Chèn dữ liệu vào bảng `khuyenmai`
INSERT INTO `khuyenmai` (`TenKhuyenMai`, `NgayBatDau`, `NgayKetThuc`, `VatPham`) VALUES
('Khuyến mãi 10%', '2024-12-01', '2024-12-31', 'Nước hoa nữ'),
('Khuyến mãi 20%', '2024-12-01', '2024-12-31', 'Nước hoa nam'),
('Khuyến mãi 30%', '2024-12-01', '2024-12-31', 'Nước hoa unisex'),
('Khuyến mãi 40%', '2024-12-01', '2024-12-31', 'Nước hoa cao cấp'),
('Khuyến mãi 50%', '2024-12-01', '2024-12-31', 'Nước hoa cho bé'),
('Khuyến mãi 60%', '2024-12-01', '2024-12-31', 'Nước hoa hương hoa'),
('Khuyến mãi 70%', '2024-12-01', '2024-12-31', 'Nước hoa hương gỗ'),
('Khuyến mãi 80%', '2024-12-01', '2024-12-31', 'Nước hoa hương trái cây'),
('Khuyến mãi 90%', '2024-12-01', '2024-12-31', 'Nước hoa mùi tự nhiên'),
('Khuyến mãi 100%', '2024-12-01', '2024-12-31', 'Nước hoa hương vani');

-- Chèn dữ liệu vào bảng `phanquyen`
INSERT INTO `phanquyen` (`Quyen`) VALUES
('Admin'),
("User");

-- Chèn dữ liệu vào bảng taikhoan
INSERT INTO `taikhoan` (`Username`, `Password`, `Email`, `Phone`, `IDPhanQuyen`) VALUES
('admin', 'admin', 'abc@gmail.com', '0123456789', 1),
('user', 'user', 'user1@gmail.com', '0987654321', 2),
('user1', 'user1', 'user2@gmail.com', '0123456789', 2),
('user2', 'user2', 'user3@gmail.com', '0987654321', 2),
('user3', 'user3', 'user4@gmail.com', '0123456789', 2),
('user4', 'user4', 'user5@gmail.com', '0987654321', 2),
('user5', 'user5', 'user6@gmail.com', '0123456789', 2),
('user6', 'user6', 'user7@gmail.com', '0987654321', 2),
('user7', 'user7', 'user8@gmail.com', '0123456789', 2),
('user8', 'user8', 'user9@gmail.com', '0987654321', 2);

-- Chèn dữ liệu vào bảng `thuonghieu`
INSERT INTO `thuonghieu` (`TenThuongHieu`, `Logo`) VALUES
('Chanel', 'assets/images/products/brand/br-1.png'),
('Versace', 'assets/images/products/brand/br-2.png'),
('Dior', 'assets/images/products/brand/br-3.png'),
('Yves Saint Laurent', 'assets/images/products/brand/br-4.png'),
('Victoria Secret', 'assets/images/products/brand/br-5.png');

-- Chèn dữ liệu vào bảng `sanpham` các loại nước hoa
INSERT INTO `sanpham` (`TenSanPham`, `GiaTien`, `Mota`, `Status`, `SoLuong`, `HinhAnh`, `MaDanhMuc`, `MaThuongHieu`, `MaGiamGia`, `MaKhuyenMai`) VALUES
('Bleu De Chanel', '5000000', 'Bleu De Chanel EDP là một trong những mùi hương nổi tiếng của Chanel. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Bleu De Chanel EDP.jpg', 1, 1, 1, 1),
('Kilian Black Phantom', '4500000', 'Kilian Black Phantom Memento Mori EDP là một trong những mùi hương nổi tiếng của Kilian. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Kilian Black Phantom Memento Mori EDP.jpg', 1, 2, 2, 2),
('Kilian Good Girl Gone Bad', '4000000', 'Kilian Good Girl Gone Bad EDP là một trong những mùi hương nổi tiếng của Kilian. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái đẹp.', '1', 10, 'assets/images/products/Kilian Good Girl Gone Bad EDP.jpg', 1, 2, 2, 2),
('Maison Francis Kurkdjian', '6000000', 'Maison Francis Kurkdjian Baccarat Rouge 540 Extrait là một trong những mùi hương nổi tiếng của Maison Francis Kurkdjian. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Maison Francis Kurkdjian Baccarat Rouge 540 Extrait_yythkg.jpg', 1, 3, 3, 3),
('Creed Aventus For Men', '5500000', 'Creed Aventus For Men EDP là một trong những mùi hương nổi tiếng của Creed. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Creed Aventus For Men EDP.jpg', 1, 4, 4, 4),
('Chanel Coco', '4800000', 'Chanel Coco Mademoiselle EDP là một trong những mùi hương nổi tiếng của Chanel. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái đẹp.', '1', 10, 'assets/images/products/Chanel Coco Mademoiselle EDP.jpg', 1, 1, 1, 1),
('Kilian Angels', '4700000', 'Kilian Angels Share EDP là một trong những mùi hương nổi tiếng của Kilian. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Kilian Angels_ Share EDP.jpg', 1, 2, 2, 2),
('Dior Sauvage', '4900000', 'Dior Sauvage EDP là một trong những mùi hương nổi tiếng của Dior. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Dior Sauvage EDP.jpg', 1, 5, 5, 5),
('Le Labo Another 13', '5200000', 'Le Labo Another 13 EDP là một trong những mùi hương nổi tiếng của Le Labo. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Le Labo Another 13 EDP.jpg', 1, 6, 6, 6),
('Louis Vuitton California Dream', '5300000', 'Louis Vuitton California Dream EDP là một trong những mùi hương nổi tiếng của Louis Vuitton. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Louis Vuitton California Dream EDP.jpg', 1, 7, 7, 7),
('Maison Francis Kurkdjian Grand Soir', '5800000', 'Maison Francis Kurkdjian Grand Soir EDP là một trong những mùi hương nổi tiếng của Maison Francis Kurkdjian. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái mạnh.', '1', 10, 'assets/images/products/Maison Francis Kurkdjian Grand Soir EDP.jpg', 1, 3, 3, 3),
('Narciso Rodriguez For Her', '4600000', 'Narciso Rodriguez For Her EDP là một trong những mùi hương nổi tiếng của Narciso Rodriguez. Mùi hương mang đến sự tinh tế, lịch lãm và sang trọng cho phái đẹp.', '1', 10, 'assets/images/products/Narciso Rodriguez For Her EDP.jpg', 1, 8, 8, 8);

-- Chèn dữ liệu vào bảng `news`
INSERT INTO `news` (`title`, `content`, `image`, `created_at`) VALUES
('NƯỚC HOA VERSACE EROS FOR MEN EDT - VŨ KHÍ GIÚP BẠN CHINH PHỤC MỌI CÔ GÁI', 'Nhan sắc thường là "vũ khí lợi hại" giúp các cánh mày râu chinh phục cô gái của mình và cũng là thứ làm họ dễ lung lay nhất. Thế nhưng, không những thế, sở hữu cho mình một mùi hương lịch thiệp, lôi cuốn, sẽ càng tăng thêm...', 'assets/images/products/blog/bl-1.jpg', '2024-12-01 00:00:00'),
('NƯỚC HOA GUCCI BLOOM - HƯƠNG THƠM QUYẾN RŨ CHO PHÁI ĐẸP', 'Dòng nước hoa Gucci Bloom nổi tiếng với hương thơm tinh tế và sang trọng dành cho phái đẹp. Đây là dòng nước hoa cực kỳ phù hợp với những cô nàng nhẹ nhàng, ngọt ngào và nữ tính. Bài viết dưới đây sẽ giúp các bạn hiểu rõ hơn...', 'assets/images/products/blog/bl-2.jpg', '2024-12-02 00:00:00'),
('CHỌN NƯỚC HOA MÙA HÈ VÀ NHỮNG BÍ MẬT KHÔNG PHẢI AI CŨNG BIẾT', 'Khi nói đến nước hoa, tiết trời là một yếu tố quan trọng, nhưng tiếc thay lại là một yếu tố mà nhiều người lãng quên. Một mùi hương nhẹ nhàng và tinh tế dưới lớp áo len của bạn có thể trở nên hắc nồng khi nhiệt độ tăng ...', 'assets/images/products/blog/bl-3.jpg', '2024-11-03 00:00:00'),
('NƯỚC HOA VERSACE EROS FOR MEN EDT - VŨ KHÍ GIÚP BẠN CHINH PHỤC MỌI CÔ GÁI', 'Nước hoa nam cho ngày hè thường mang những nốt hương nhẹ nhàng, thoáng mát phù hợp dùng trong những ngày thời tiết nắng nóng, oi bức. Việc tìm kiếm cho mình một mùi hương phù hợp cho mùa hè là một điều không...', 'assets/images/products/blog/bl-4.jpg', '2024-02-24 00:00:00'),
('HÉ LỘ 4 HƯƠNG NƯỚC HOA NỮ QUYẾN RŨ LÀM SAY ĐẮM NGƯỜI ĐỐI DIỆN', 'Nước hoa nữ được ví như món “vũ khí" để chị em chinh phục các quý ông và cũng là thứ phụ kiện không thể thiếu của những cô gái hiện đại. Cùng Thế Giới Nước Hoa điểm qua 6 mùi hương nước hoa nữ quyến rũ rất được...', 'assets/images/products/blog/bl-5.jpg', '2024-12-05 00:00:00'),
('TOP 5 NƯỚC HOA CREED ĐƯỢC YÊU THÍCH NHẤT', 'Khi nói đến nước hoa, tiết trời là một yếu tố quan trọng, nhưng tiếc thay lại là một yếu tố mà nhiều người lãng quên. Một mùi hương nhẹ nhàng và tinh tế dưới lớp áo len của bạn có thể trở nên hắc nồng khi nhiệt độ tăng ...', 'assets/images/products/blog/bl-6.jpg', '2024-12-06 00:00:00');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

