-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 04:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `time_dangbai` date NOT NULL,
  `time_suabai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdh`
--

CREATE TABLE `chitietdh` (
  `masp` int(11) NOT NULL,
  `madonhang` int(11) NOT NULL,
  `mabl` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diachikhachhang`
--

CREATE TABLE `diachikhachhang` (
  `id_diachi` int(11) NOT NULL,
  `id_makh` int(11) NOT NULL,
  `tinh_thanh` text NOT NULL,
  `quan_huyen` text NOT NULL,
  `diachigh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diachikhachhang`
--

INSERT INTO `diachikhachhang` (`id_diachi`, `id_makh`, `tinh_thanh`, `quan_huyen`, `diachigh`) VALUES
(1, 18, 'thanh pho', 'quan 3', 'duong 1'),
(8, 25, 'Long An', 'quận 3', 'dahah');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_km` int(11) NOT NULL,
  `ngaydathang` date NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachigiaohang` text NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hangsanpham`
--

CREATE TABLE `hangsanpham` (
  `mahang` varchar(15) NOT NULL,
  `tenhang` varchar(255) NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hangsanpham`
--

INSERT INTO `hangsanpham` (`mahang`, `tenhang`, `trangthai`) VALUES
('IP01', 'iphone', 0),
('LT01', 'lenovo', 0),
('LT02', 'Dell', 0),
('LT03', 'nasus', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `madonhang` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(55) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `tongtien` double NOT NULL,
  `soluongdonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `email`, `matkhau`, `hoten`, `sdt`, `tongtien`, `soluongdonhang`) VALUES
(18, 'dh51703123@student.stu.edu.vn', '$2y$10$WgLv1FU5Q6GK58XWg4X2G.NmZOTd6rPQcVZAbRIh7yPDmO3WrhrAS', 'hahaha', '12331241515', 0, 0),
(25, 'quanmap123@gmail.com', '$2y$10$WMN2M1bMm0NA.PWDrAO5U.DwvZm0BTUVCoThwfbKV8bSKcWFtVLdG', 'khanh12312385', '0344288640', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `ma_km` int(11) NOT NULL,
  `muckm` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `loaigiamgia` tinyint(1) NOT NULL,
  `giatrigiamgia` int(11) NOT NULL,
  `ngaybd_km` double NOT NULL,
  `ngaykt_km` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`, `trangthai`) VALUES
(8, 'máy tính', 0),
(12, 'laptop', 0),
(15, 'máy in', 0),
(17, 'tivi', 0),
(21, 'Phone', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `tennv` varchar(55) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `diachi` text NOT NULL,
  `mabophan` varchar(11) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `giagoc` int(11) NOT NULL,
  `giaban` int(11) DEFAULT NULL,
  `kieugiamgia` tinyint(1) NOT NULL,
  `trangthai` int(1) NOT NULL,
  `hinh` text NOT NULL,
  `maloai` int(11) NOT NULL,
  `mahang` varchar(15) NOT NULL,
  `mota` text DEFAULT NULL,
  `bestSeller` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giagoc`, `giaban`, `kieugiamgia`, `trangthai`, `hinh`, `maloai`, `mahang`, `mota`, `bestSeller`) VALUES
(3, 'TIVI LED 12356124', 90000000, 0, 0, 0, 'b80745731e1ea9c71ca7f4e6b164afdc.gif', 17, 'LT02', NULL, 0),
(4, 'IPHONE 7 PLUS 128GB BLACK', 1000000000, 5000000, 0, 0, '38ffb78c217994f8eda5262d2fb22c275dc57ad7_hq.gif', 21, 'IP01', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`);

--
-- Indexes for table `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD KEY `masp` (`masp`),
  ADD KEY `madonhang` (`madonhang`),
  ADD KEY `mabl` (`mabl`);

--
-- Indexes for table `diachikhachhang`
--
ALTER TABLE `diachikhachhang`
  ADD PRIMARY KEY (`id_diachi`),
  ADD KEY `diachikhachhang_ibfk_1` (`id_makh`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `ma_km` (`ma_km`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `hangsanpham`
--
ALTER TABLE `hangsanpham`
  ADD PRIMARY KEY (`mahang`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `madonhang` (`madonhang`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`ma_km`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`),
  ADD UNIQUE KEY `mabophan` (`mabophan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `mahang` (`mahang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diachikhachhang`
--
ALTER TABLE `diachikhachhang`
  MODIFY `id_diachi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `ma_km` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `chitietdh_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `chitietdh_ibfk_2` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`),
  ADD CONSTRAINT `chitietdh_ibfk_3` FOREIGN KEY (`mabl`) REFERENCES `binhluan` (`mabl`);

--
-- Constraints for table `diachikhachhang`
--
ALTER TABLE `diachikhachhang`
  ADD CONSTRAINT `diachikhachhang_ibfk_1` FOREIGN KEY (`id_makh`) REFERENCES `khachhang` (`makh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`ma_km`) REFERENCES `khuyenmai` (`ma_km`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `donhang` (`ma_kh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisanpham` (`maloai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`mahang`) REFERENCES `hangsanpham` (`mahang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
