-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2023 lúc 03:27 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project1_lvh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang_lvh`
--

CREATE TABLE `khachhang_lvh` (
  `MAKH_LVH` int(11) NOT NULL,
  `HOTEN_LVH` varchar(100) NOT NULL,
  `TAIKHOAN_LVH` varchar(50) NOT NULL,
  `MATKHAU_LVH` varchar(30) NOT NULL,
  `DIACHI_LVH` varchar(200) NOT NULL,
  `DIENTHOAI_LVH` varchar(30) NOT NULL,
  `EMAIL_LVH` varchar(50) NOT NULL,
  `NGAYSINH_LVH` datetime NOT NULL,
  `NGAYCAPNHAT_LVH` datetime NOT NULL,
  `GIOITINH_LVH` tinyint(4) NOT NULL,
  `TICHDIEM_LVH` int(11) NOT NULL,
  `TRANGTHAI_LVH` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri_lvh`
--

CREATE TABLE `quantri_lvh` (
  `TAIKHOAN_LVH` varchar(50) NOT NULL,
  `MATKHAU_LVH` varchar(50) NOT NULL,
  `TRANGTHAI_LVH` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_lvh`
--

CREATE TABLE `sanpham_lvh` (
  `MA_LVH` int(11) NOT NULL,
  `TEN_LVH` varchar(50) NOT NULL,
  `SOLUONG_LVH` int(11) NOT NULL,
  `DONGIA_LVH` float NOT NULL,
  `TRANGTHAI_LVH` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_lvh`
--

INSERT INTO `sanpham_lvh` (`MA_LVH`, `TEN_LVH`, `SOLUONG_LVH`, `DONGIA_LVH`, `TRANGTHAI_LVH`) VALUES
(8, 'btijtai', 553, 9000, 1),
(11, 'tất mũ', 2, 20, 0),
(13, 'mú kính', 553, 353, 1),
(44, 'mú kính', 553, 9000, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khachhang_lvh`
--
ALTER TABLE `khachhang_lvh`
  ADD PRIMARY KEY (`MAKH_LVH`);

--
-- Chỉ mục cho bảng `quantri_lvh`
--
ALTER TABLE `quantri_lvh`
  ADD PRIMARY KEY (`TAIKHOAN_LVH`);

--
-- Chỉ mục cho bảng `sanpham_lvh`
--
ALTER TABLE `sanpham_lvh`
  ADD PRIMARY KEY (`MA_LVH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
