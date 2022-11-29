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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createtime` varchar(255) NOT NULL,
  `imgUrl` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `fullname`, `email`, `phone`, `address`, `password`, `createtime`, `imgUrl`, `status`) VALUES
('tranttuan', 'Thanh Tuan', 'tranttuan95@gmail.com', '0901491633', 'Hóc Môn', 'thanhtuan@2020', '2021-06-01 14:55:29', 'defaultavatar.png', 'active'),
('tranttuan96', 'Tran Thanh Tuan', 'tranttuan96@gmail.com', '0901491634', 'Hóc Môn', 'thanhtuan', '2021-06-01 10:16:03', 'ea83a577a5.png', 'active'),
('user123', 'Tuan', 'user@gmail.com', '0901491635', 'Hóc Môn', 'user123', '2021-06-01 19:53:22', 'defaultavatar.png', 'active'),
('user1234', 'user1234', 'user1234@gmail.com', '0901491632', 'Hóc Môn', 'user1234', '2021-06-01 19:54:35', 'defaultavatar.png', 'banned');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
