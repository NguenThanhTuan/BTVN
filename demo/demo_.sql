-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 03:20 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `sanpham` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaban` double NOT NULL,
  `trangthai` int(11) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `sanpham`, `username`, `ghichu`, `soluong`, `giaban`, `trangthai`, `diachi`) VALUES
(1, 1, 'ttxuyenkimgiap', 'abc xyz', 1, 8800000, 0, 'Hà N?i');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`maloai`, `ten`) VALUES
('BG1', 'Bàn Ghế'),
('KTV', 'Kệ tivi');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `mahang` int(20) NOT NULL,
  `tenhang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` int(20) NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sogr1sp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`mahang`, `tenhang`, `alias`, `giatien`, `slogan`, `maloai`, `chitiet`, `hinhanh`, `sogr1sp`) VALUES
(1, 'Bàn ghế ăn', 'ban-ghe-an', 8800000, 'Thiết kế mới lạ, kiểu dáng sang trọng và hiện đại bộ Bàn ghế ăn mã BA601 hiện đang bán tại Nội Thất Xinh giúp không gian nội thất phòng bếp trong căn nhà của bạn trở nên hấp dẫn, yêu thích và được rất nhiều gia đình "đổ xô" lựa chọn. Hãy cùng Nội Thất Xin', 'BG1', 'Thiết kế mới lạ, kiểu dáng sang trọng và hiện đại bộ Bàn ghế ăn mã BA601 hiện đang bán tại Nội Thất Xinh giúp không gian nội thất phòng bếp trong căn nhà của bạn trở nên hấp dẫn, yêu thích và được rất nhiều gia đình "đổ xô" lựa chọn. Hãy cùng Nội Thất Xinh chúng tôi ngắm nhìn mẫu thiết kế độc đáo này nhé. \r\nVới thiết kế mang phong cách khá mới lạ, hiện đại và sang trọng bộ bàn ghế ăn BA601 góp phần mang đến cho bất cứ ngôi nhà nào vẻ đẹp cuốn hút và tinh tế. Mẫu sản phẩm bàn ghế phòng này này là sự hài hòa về kiểu dáng, chất liệu sử dụng cùng những yếu tố về kỹ thuật, độ bền, giá trị sử dụng và độ an toàn cao. Tất cả góp phần mang đến cho ngôi nhà tận hưởng trọn vẹn bữa cơm gia đình ngon miệng, yêu thích hơn.', 'home-1491677436.jpg', 0),
(2, 'KTV610', 'ktv610', 8700000, 'Thiết kế đa năng, sang trọng và tinh tế, những mẫu kệ tivi gỗ đẹp đang trở thành sản phẩm ăn khách nhất trên thị trường hiện nay', 'KTV', 'Thiết kế đa năng, sang trọng và tinh tế, những mẫu kệ tivi gỗ đẹp đang trở thành sản phẩm ăn khách nhất trên thị trường hiện nay. Mẫu Kệ tivi gỗ mã KTV610 chính là một trong những ví dụ điển hình mà chúng tôi mang đến cho ngôi nhà của bạn.', 'home-1491700323.jpg', 0),
(3, 'Bàn ghế ăn mã BA701', 'ban-ghe-an-ma-ba701', 16100000, 'Thiết kế đa năng, sang trọng và tinh tế, những mẫu kệ tivi gỗ đẹp đang trở thành sản phẩm ăn khách nhất trên thị trường hiện nay. Mẫu Kệ tivi gỗ mã KTV610 chính là một trong những ví dụ điển hình mà chúng tôi mang đến cho ngôi nhà của bạn.', 'BG1', 'Thiết kế đa năng, sang trọng và tinh tế, những mẫu kệ tivi gỗ đẹp đang trở thành sản phẩm ăn khách nhất trên thị trường hiện nay. Mẫu Kệ tivi gỗ mã KTV610 chính là một trong những ví dụ điển hình mà chúng tôi mang đến cho ngôi nhà của bạn.', 'home-1491700347.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `quequan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`hoten`, `ngaysinh`, `quequan`, `dienthoai`, `username`, `password`, `quyen`) VALUES
('Nguyễn Thanh Tuấn', '0000-00-00', 'Hà Nội', '01648730060', 'ttxuyenkimgiap', '7cd20ef68ec43e9f0bfb44b62d6cf2f2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien_admin`
--

CREATE TABLE `thanhvien_admin` (
  `hoten` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `quequan` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` int(15) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhvien_admin`
--

INSERT INTO `thanhvien_admin` (`hoten`, `ngaysinh`, `quequan`, `dienthoai`, `username`, `password`) VALUES
('Nguyễn Thanh Tuấn', '1995-03-03', 'Hà Nội', 1648730060, 'ttxuyenkimgiap', '8ac364e3f4f4f3230ad2b483f97f99bc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`mahang`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `mahang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
