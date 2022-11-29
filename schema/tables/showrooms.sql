-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3360
-- Thời gian đã tạo: Th6 05, 2021 lúc 08:22 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showrooms`
--

CREATE TABLE `showrooms` (
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `showrooms`
--

INSERT INTO `showrooms` (`address`) VALUES
('280 E10 Lương Định Của, P. An Phú, Q.2, TP Hồ Chí Minh'),
('61C Phan Đình Phùng, P. 17, Q.Phú Nhuận, TP Hồ Chí Minh'),
('91 Xuân Thủy, P. Thảo Điền, Q. 2, TP Hồ Chí Minh (khuôn viên cà phê Cộng)'),
('Tầng 2, chung cư 42 Nguyễn Huệ, P. Bến Nghé, Quận 1, TP Hồ Chí Minh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `showrooms`
--
ALTER TABLE `showrooms`
  ADD PRIMARY KEY (`address`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
