-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 14, 2021 lúc 11:05 AM
-- Phiên bản máy phục vụ: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `M2_ThiKetThucModule`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `ten_hang` varchar(40) NOT NULL,
  `loai_hang` varchar(40) NOT NULL,
  `gia` int(11) NOT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `ngay_tao` varchar(40) DEFAULT NULL,
  `mo_ta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Products`
--

INSERT INTO `Products` (`id`, `ten_hang`, `loai_hang`, `gia`, `so_luong`, `ngay_tao`, `mo_ta`) VALUES
(1, 'I Phone X ', 'Máy Tính Bảng', 90000, 3, '2021-05-14', '3'),
(3, 'I phone 6', 'Laptop', 33333, 30, '2021-05-11', 'asd'),
(4, 'I phone 7 plus', 'I phone', 3, 30, '2021-05-19', '3'),
(5, 'I phone 8 plus', 'Điện Thoại', 3, 30, '2021-05-15', 'asd');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
