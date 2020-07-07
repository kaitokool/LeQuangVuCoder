-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2020 lúc 01:42 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Ma_ad` int(11) NOT NULL,
  `Ten_ad` varchar(255) NOT NULL,
  `Tai_khoan` varchar(255) NOT NULL,
  `Mat_khau` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Dia_chi` text NOT NULL,
  `Hinh_anh` varchar(255) NOT NULL,
  `Gioi_thieu` text NOT NULL,
  `Cong_viec` varchar(255) NOT NULL,
  `SDT` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Ma_ad`, `Ten_ad`, `Tai_khoan`, `Mat_khau`, `Email`, `Dia_chi`, `Hinh_anh`, `Gioi_thieu`, `Cong_viec`, `SDT`) VALUES
(1, 'Vu KooL', 'thanvu99', '1234', 'thanvu99@gmail.com', 'TP.HCM', 'product6.jpg', '<p>Có 4 năm kinh nghi&ecirc;̣m code các ng&ocirc;n ngữ l&acirc;̣p trình. Ví dụ như: PHP, Python, Javacript, Ruby, Scara,....Và Sản Ph&acirc;̉m <a href=\"#\">V Gaming Gear</a> là 1 trong những sản ph&acirc;̉m trong c&ocirc;ng vi&ecirc;̣c l&acirc;̣p trình su&ocirc;́t thời gian qua.</p>', 'Pro Designer', 13231234221),
(3, 'Đinh Hoàng Vũ', 'dhv', 'dhv', 'dhv0612@gmail.com', 'Biên Hòa', 'admin_image_1.jpg', '<p>Chuẩn buscu thế giới, tr&igrave;nh độ buscu của Đinh Ho&agrave;ng Vũ l&agrave; 1 thế lực cực mạnh nuốt trọn thế giới.</p>', 'Buscu', 123522511);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `branch`
--

CREATE TABLE `branch` (
  `Ma_CN` int(11) NOT NULL,
  `SDT` text NOT NULL,
  `Dia_chi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `branch`
--

INSERT INTO `branch` (`Ma_CN`, `SDT`, `Dia_chi`) VALUES
(1, '085231652', 'Tiền Giang'),
(2, '135201320', 'Cai lậy'),
(3, '045631052', 'Vĩnh Phúc'),
(4, '0451357465', 'Cao Bằng'),
(5, '0564.321', 'TPHCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `Ma_SP` int(10) NOT NULL,
  `IP_Address` varchar(255) NOT NULL,
  `Soluong` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`Ma_SP`, `IP_Address`, `Soluong`) VALUES
(227, '::1', 3),
(235, '::1', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Ma_TL` int(11) NOT NULL,
  `Ten_TL` varchar(100) NOT NULL,
  `Mo_Ta_Cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Ma_TL`, `Ten_TL`, `Mo_Ta_Cat`) VALUES
(1, 'PC', ''),
(2, 'Laptop', ''),
(3, 'Linh kiện', ''),
(4, 'Phụ kiện', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `Ma_CTSP` int(11) NOT NULL,
  `Ten_CTSP` varchar(100) NOT NULL,
  `Mo_Ta` varchar(255) NOT NULL,
  `Ma_TL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`Ma_CTSP`, `Ten_CTSP`, `Mo_Ta`, `Ma_TL`) VALUES
(1, 'Laptop gaming', '', 2),
(2, 'PC Gaming', '', 1),
(3, 'PC Workstation', '', 1),
(4, 'PC Văn phòng', '', 1),
(5, 'Màn hình', '', 4),
(7, 'Ghế ', '', 4),
(8, 'Bàn phím', '', 4),
(9, 'Chuột ', '', 4),
(10, 'Tai nghe', '<p>chuẩn ch&iacute;nh</p>', 4),
(11, 'Mainboard', '', 3),
(12, 'CPU', '', 3),
(13, 'Ram PC', '', 3),
(14, 'VGA', '', 3),
(15, 'SSD', '', 3),
(16, 'HDD', '', 3),
(17, 'Nguồn ', '', 3),
(18, 'Case', '', 3),
(19, 'Fan (Quạt)', '', 3),
(20, 'Ram laptop', '', 3),
(22, 'Laptop văn phòng', '', 2),
(23, 'Laptop doanh nhân', '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Ma_KH` int(11) NOT NULL,
  `Ten_KH` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Dia_chi` varchar(255) DEFAULT NULL,
  `SDT` text DEFAULT NULL,
  `Hinh_anh` varchar(255) DEFAULT NULL,
  `IP_khachhang` varchar(100) NOT NULL,
  `TK` varchar(100) NOT NULL,
  `MK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Ma_KH`, `Ten_KH`, `Email`, `Dia_chi`, `SDT`, `Hinh_anh`, `IP_khachhang`, `TK`, `MK`) VALUES
(1, 'Nguyễn Văn A', 'VanA@gmail.com', '', '100000', '', '', 'VanA', '200000'),
(2, 'Nguyễn Văn B', 'VanB@gmail.com', '', '100001', '', '', 'VanB', '200001'),
(3, 'Nguyen Van C ', 'VanC@gmail.com', '', '100003', '', '', 'VanC', '200003'),
(4, 'Nguyen Van D', 'VanD@gmail.com', '', '100004', '', '', 'VanD', '200004'),
(6, 'Nguyễn Văn F', 'VanF@gmail.com', '', '100006', '', '', 'VanF', '200006'),
(7, 'Nguyễn Văn G', 'VanG@gmail.com', '', '100007', '', '', 'VanG', '200007'),
(8, 'Nguyễn Văn G', 'VanG@gmail.com', '', '100008', '', '', 'VanG', '200008'),
(9, 'Nguyễn Văn H', 'VanH@gmail.com', '', '100009', '', '', 'VanH', '200009'),
(10, 'Nguyễn Văn I', 'VanI@gmail.com', '', '100010', '', '', 'VanI', '200010'),
(11, 'Nguyễn Văn J', 'VanJ@gmail.com', '', '100011', '', '', 'VanJ', '200011'),
(12, 'Nguyễn Văn K', 'VanK@gmail.com', '', '100012', '', '', 'VanK', '200012'),
(13, 'Nguyễn Văn L', 'VanL@gmail.com', '', '100013', '', '', 'VanL', '200013'),
(14, 'Nguyễn Văn M', 'VanM@gmail.com', '', '100014', '', '', 'VanL', '200014'),
(15, 'Nguyễn Văn N', 'VanN@gmail.com', '', '100015', '', '', 'VanN', '200015'),
(16, 'Nguyễn Văn O', 'VanO@gmail.com', '', '100016', '', '', 'VanO', '200016'),
(17, 'Nguyễn Văn P', 'VanP@gmail.com', '', '100017', '', '', 'VanP', '200017'),
(18, 'Nguyễn Văn Q', 'VanQ@gmail.com', '', '100018', '', '', 'VanQ', '200018'),
(19, 'Nguyễn Văn R', 'VanR@gmail.com', '', '100019', '', '', 'VanR', '200019'),
(23, 'thanvu11', 'thanvu@gmail.com', 'tp.HCM', '1231231241', 'logoVGG2.png', '::1', 'thanvu99', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_invoice_export`
--

CREATE TABLE `detail_invoice_export` (
  `Serial` int(11) NOT NULL,
  `Ma_HDX` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_invoice_import`
--

CREATE TABLE `detail_invoice_import` (
  `Ma_HDN` int(11) NOT NULL,
  `Serial` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_jurisdiction`
--

CREATE TABLE `detail_jurisdiction` (
  `Ma_quyen_han` int(11) NOT NULL,
  `Ma_chuc_vu` int(11) NOT NULL,
  `Trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detail_jurisdiction`
--

INSERT INTO `detail_jurisdiction` (`Ma_quyen_han`, `Ma_chuc_vu`, `Trang_thai`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(3, 1, 0),
(3, 2, 0),
(4, 1, 0),
(4, 2, 0),
(5, 1, 0),
(5, 2, 0),
(6, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 4, 0),
(6, 5, 0),
(6, 6, 0),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0),
(7, 6, 0),
(8, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_product`
--

CREATE TABLE `detail_product` (
  `Ma_SP` int(11) NOT NULL,
  `Serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_promotionproduct`
--

CREATE TABLE `detail_promotionproduct` (
  `Ma_SP` int(11) NOT NULL,
  `Ma_KMSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_promotion_invoice`
--

CREATE TABLE `detail_promotion_invoice` (
  `Ma_KMHD` int(11) NOT NULL,
  `Ma_HDX` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_product`
--

CREATE TABLE `image_product` (
  `Ma_SP` int(11) NOT NULL,
  `Hinh_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image_product`
--

INSERT INTO `image_product` (`Ma_SP`, `Hinh_anh`) VALUES
(223, 'product_images/5e642702e36dc312429ddcf24537125f.png'),
(223, 'product_images/c4d2850094a2a234cd1703e6ed498bd6.png'),
(223, 'product_images/c723de79c032ce50e4310dca0511026b.png'),
(224, 'product_images/06e4762ea55c426824b761b847d85672.png'),
(224, 'product_images/5c8c79ab7a912f5a020f1fd272544394.png'),
(224, 'product_images/af75e431b9330c21d05fa5a19bd2e9fe.png'),
(225, 'product_images/49adf6b391e36a013bc7e11d3c065b88.png'),
(225, 'product_images/6f3514040df13c8d8a8c9fdd3e8e9b83.png'),
(225, 'product_images/c2a1142486cc17f7e0f19f9efa12ab11.png'),
(226, 'product_images/196be9214adae42792665753ef9f094c.png'),
(226, 'product_images/28204f64b08040e3692f5aee0d4c761a.png'),
(226, 'product_images/2e78689318635d641e9aa1e4616a7c22.png'),
(227, 'product_images/7b482c585d7360581aa381d7671a4b10.png'),
(227, 'product_images/96adddeb5a4e632e25d179d9d0aed49a.png'),
(227, 'product_images/97269443406c16cc713d8e186ee88021.png'),
(228, 'product_images/613e52608513c58bed4cfda9e54b60b3.png'),
(228, 'product_images/7e7ab7c1c7542e13807c791206a76261.png'),
(228, 'product_images/8fd6392f9c5575ae4bd2511e86ec0117.png'),
(235, 'product_images/pcgm01_1.png'),
(235, 'product_images/pcgm01_3.png'),
(235, 'product_images/pcgm01_4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introductory_homepage`
--

CREATE TABLE `introductory_homepage` (
  `Introductory_Id` int(10) NOT NULL,
  `Introductory_Name` varchar(255) NOT NULL,
  `Introductory_Description` varchar(255) NOT NULL,
  `Introductory_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `introductory_homepage`
--

INSERT INTO `introductory_homepage` (`Introductory_Id`, `Introductory_Name`, `Introductory_Description`, `Introductory_Image`) VALUES
(1, 'V Gaming Gear', 'Văn Phòng Gaming', 'imagegt3.jpeg'),
(2, '  V Gaming Gear', '  Main Board Gaming Tản Nhiệt Nước', 'imagegt2.jpeg'),
(3, 'V Gaming Gear', 'Văn Phòng Gaming', 'imagegt1.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice-import`
--

CREATE TABLE `invoice-import` (
  `Ma_HDN` int(11) NOT NULL,
  `Ma_NCC` int(11) NOT NULL,
  `Ma_NV` int(11) NOT NULL,
  `Ngay_nhap` date NOT NULL,
  `Thanh_tien` double(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `invoice-import`
--

INSERT INTO `invoice-import` (`Ma_HDN`, `Ma_NCC`, `Ma_NV`, `Ngay_nhap`, `Thanh_tien`) VALUES
(1, 1, 6, '2020-01-14', 0.00),
(2, 6, 15, '2019-06-18', NULL),
(3, 18, 17, '2020-03-01', NULL),
(4, 20, 19, '2019-12-23', NULL),
(5, 16, 19, '2020-03-02', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_export`
--

CREATE TABLE `invoice_export` (
  `Ma_HDX` int(11) NOT NULL,
  `Ma_KH` int(11) NOT NULL,
  `Ma_NV` int(11) NOT NULL,
  `Thanh_tien` double(12,2) DEFAULT NULL,
  `Ngay_xuat` date NOT NULL,
  `Trang_thai` text NOT NULL,
  `Hoadon_no` int(100) NOT NULL,
  `Hinh_thuc_TT` varchar(100) NOT NULL,
  `Hinh_thuc_MH` varchar(100) NOT NULL,
  `Dia_chi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `invoice_export`
--

INSERT INTO `invoice_export` (`Ma_HDX`, `Ma_KH`, `Ma_NV`, `Thanh_tien`, `Ngay_xuat`, `Trang_thai`, `Hoadon_no`, `Hinh_thuc_TT`, `Hinh_thuc_MH`, `Dia_chi`) VALUES
(1, 23, 6, 20000000.00, '2020-04-04', 'Complete', 2077332611, '', '', ''),
(3, 19, 6, 9657.00, '2020-05-10', 'Đang Chờ Xử Lý', 4604785, '', '', ''),
(4, 19, 6, 643800.00, '2020-05-10', 'Complete', 4604785, '', '', ''),
(5, 23, 6, 9657.00, '2020-06-30', 'Đang Chờ Xử Lý', 185737304, '', '', ''),
(6, 23, 6, 643800.00, '2020-06-30', 'Đang Chờ Xử Lý', 185737304, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jurisdiction`
--

CREATE TABLE `jurisdiction` (
  `Ma_quyen_han` int(11) NOT NULL,
  `Ten_quyen_han` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `jurisdiction`
--

INSERT INTO `jurisdiction` (`Ma_quyen_han`, `Ten_quyen_han`) VALUES
(1, 'đăng nhập'),
(2, 'xem sản phẩm'),
(3, 'thêm sản phẩm'),
(4, 'sửa sản phẩm'),
(5, 'xóa sản phẩm'),
(6, 'xem thông tin account'),
(7, 'sửa thông tin account'),
(8, 'xóa account ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `Ma_ngan_hang` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `code` int(100) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`Ma_ngan_hang`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `date`) VALUES
(3, 123, 2147483647, 'VISA Card', 123, 512342, '12/07/2020'),
(5, 123, 2147483647, 'Ngân Hàng Nội Địa', 123, 0, '12/07/2020');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pending_order`
--

CREATE TABLE `pending_order` (
  `Ma_HDX` int(11) NOT NULL,
  `Ma_SP` int(11) NOT NULL,
  `Ma_KH` int(11) NOT NULL,
  `Hoadon_no` int(100) NOT NULL,
  `So_luong` int(100) NOT NULL,
  `Trang_thai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pending_order`
--

INSERT INTO `pending_order` (`Ma_HDX`, `Ma_SP`, `Ma_KH`, `Hoadon_no`, `So_luong`, `Trang_thai`) VALUES
(1, 223, 23, 2077332611, 1, 'Complete'),
(5, 227, 23, 185737304, 3, 'Đang Chờ Xử Lý'),
(6, 235, 23, 185737304, 2, 'Đang Chờ Xử Lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

CREATE TABLE `position` (
  `Ma_CV` int(11) NOT NULL,
  `Ten_CV` varchar(100) NOT NULL,
  `Luong_co_ban` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `position`
--

INSERT INTO `position` (`Ma_CV`, `Ten_CV`, `Luong_co_ban`) VALUES
(1, 'giám đốc điều hành', 20000000.00),
(2, 'phó giám đốc', 18000000.00),
(3, 'trưởng phòng', 15000000.00),
(4, 'phó phòng', 13000000.00),
(5, 'nhân viên thu ngân', 7000000.00),
(6, 'nhân viên bán hàng', 5000000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Ma_SP` int(11) NOT NULL,
  `Ma_CTSP` int(11) DEFAULT NULL,
  `Ten_SP` varchar(1000) NOT NULL,
  `Gia` double NOT NULL,
  `Mo_ta` text NOT NULL,
  `Key_word` varchar(255) NOT NULL,
  `Hinh_anh` varchar(255) NOT NULL,
  `So_luong_ton` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Ma_SP`, `Ma_CTSP`, `Ten_SP`, `Gia`, `Mo_ta`, `Key_word`, `Hinh_anh`, `So_luong_ton`) VALUES
(223, 1, 'LTGM01_1     ', 321900, '<p><span style=\"color: #555555; font-family: Arial, sans-serif;\">&nbsp;Intel&reg; Core i5-8250U (1.6GHz Upto 3.4GHz, 4 Cores 8 Threads, 6MB Cache), 4GB DDR3L 1600Mhz, 1TB HDD 5400rpm, Nvidia Geforce MX150 2GB GDDR5, 15.6\" FullHD (1920x1080) LED, DVDRW, Webcam, Wlan ac +BT, sd card reader, 4 Cell, 2.1kg, Linux</span></p>', 'l', 'LTGM01_1.png', NULL),
(224, 1, 'LTGM02_1                        ', 12989000, '<p><span style=\"color: #555555; font-family: Arial, sans-serif;\">&nbsp;Intel&reg; Core i5-8250U (1.6GHz Upto 3.4GHz, 4 Cores 8 Threads, 6MB Cache), 4GB DDR3L 1600Mhz, 1TB HDD 5400rpm, Nvidia Geforce MX150 2GB GDDR5, 15.6\" FullHD (1920x1080) LED, DVDRW, Webcam, Wlan ac +BT, sd card reader, 4 Cell, 2.1kg, Linux</span></p>', 'l', 'LTGM02_1.png', NULL),
(225, 1, 'LTGM03_1    ', 3219, '<p><span style=\"color: #555555; font-family: Arial, sans-serif;\">&nbsp;Intel&reg; Core i5-8250U (1.6GHz Upto 3.4GHz, 4 Cores 8 Threads, 6MB Cache), 4GB DDR3L 1600Mhz, 1TB HDD 5400rpm, Nvidia Geforce MX150 2GB GDDR5, 15.6\" FullHD (1920x1080) LED, DVDRW, Webcam, Wlan ac +BT, sd card reader, 4 Cell, 2.1kg, Linux</span></p>', 'l', 'LTGM03_1.png', NULL),
(226, 1, 'LTGM04_1    ', 3219, '<p><span style=\"color: #555555; font-family: Arial, sans-serif;\">&nbsp;Intel&reg; Core i5-8250U (1.6GHz Upto 3.4GHz, 4 Cores 8 Threads, 6MB Cache), 4GB DDR3L 1600Mhz, 1TB HDD 5400rpm, Nvidia Geforce MX150 2GB GDDR5, 15.6\" FullHD (1920x1080) LED, DVDRW, Webcam, Wlan ac +BT, sd card reader, 4 Cell, 2.1kg, Linux</span></p>', 'l', 'LTGM04_1.png', NULL),
(227, 1, 'LTGM05_1    ', 3219, '<p><span style=\"color: #555555; font-family: Arial, sans-serif;\">&nbsp;Intel&reg; Core i5-8250U (1.6GHz Upto 3.4GHz, 4 Cores 8 Threads, 6MB Cache), 4GB DDR3L 1600Mhz, 1TB HDD 5400rpm, Nvidia Geforce MX150 2GB GDDR5, 15.6\" FullHD (1920x1080) LED, DVDRW, Webcam, Wlan ac +BT, sd card reader, 4 Cell, 2.1kg, Linux</span></p>', 'l', 'LTGM05_1.png', NULL),
(228, 1, 'LTGM06_1    ', 3219, '<p><span style=\"color: #555555; font-family: Arial, sans-serif;\">&nbsp;Intel&reg; Core i5-8250U (1.6GHz Upto 3.4GHz, 4 Cores 8 Threads, 6MB Cache), 4GB DDR3L 1600Mhz, 1TB HDD 5400rpm, Nvidia Geforce MX150 2GB GDDR5, 15.6\" FullHD (1920x1080) LED, DVDRW, Webcam, Wlan ac +BT, sd card reader, 4 Cell, 2.1kg, Linux</span></p>', 'l', 'LTGM06_1.png', NULL),
(235, 1, 'pcgm01_2                ', 321900, '<p><span style=\"color: #555555; font-family: Arial, sans-serif;\">&nbsp;Intel&reg; Core i5-8250U (1.6GHz Upto 3.4GHz, 4 Cores 8 Threads, 6MB Cache), 4GB DDR3L 1600Mhz, 1TB HDD 5400rpm, Nvidia Geforce MX150 2GB GDDR5, 15.6\" FullHD (1920x1080) LED, DVDRW, Webcam, Wlan ac +BT, sd card reader, 4 Cell, 2.1kg, Linux</span></p>', 'l', 'pcgm01_2.png', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_in_branch`
--

CREATE TABLE `product_in_branch` (
  `Ma_CN` int(11) NOT NULL,
  `Serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion_invoice`
--

CREATE TABLE `promotion_invoice` (
  `Ma_KMHD` int(11) NOT NULL,
  `So_tien_KM` double(12,2) NOT NULL,
  `Ngay_bat_dau` date NOT NULL,
  `Ngay_ket_thuc` date NOT NULL,
  `Ten_su_kien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `promotion_invoice`
--

INSERT INTO `promotion_invoice` (`Ma_KMHD`, `So_tien_KM`, `Ngay_bat_dau`, `Ngay_ket_thuc`, `Ten_su_kien`) VALUES
(101, 1500000.00, '2020-03-01', '2020-03-10', 'Xả kho Vô Cực'),
(102, 1650000.00, '2020-03-10', '2020-03-13', 'Giảm giá laptop Gaming'),
(103, 500000.00, '2020-03-11', '2020-03-15', 'Giảm giá loa di động'),
(104, 600000.00, '2020-03-18', '2020-03-24', 'Trùm Sale! Siêu Tiết Kiệm'),
(105, 750000.00, '2020-04-01', '2020-03-10', 'Tai nghe Hyper- Khuyến Mãi Đặc Biệt Đầu Xuân'),
(106, 800000.00, '2020-04-08', '2020-03-13', 'Mua 1 được 2'),
(107, 450000.00, '2020-04-02', '2020-04-09', 'Laptop Lenovo Siêu Khuyến Mãi'),
(108, 650000.00, '2020-03-19', '2020-03-28', 'Laptop ACER Siêu Khuyến Mãi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion_product`
--

CREATE TABLE `promotion_product` (
  `Ma_KMSP` int(11) NOT NULL,
  `So_tien` int(11) NOT NULL,
  `Ngay_bat_dau` date NOT NULL,
  `Ngay_ket_thuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `promotion_product`
--

INSERT INTO `promotion_product` (`Ma_KMSP`, `So_tien`, `Ngay_bat_dau`, `Ngay_ket_thuc`) VALUES
(1001, 200000, '2020-03-08', '2020-03-09'),
(1002, 30000, '2020-03-10', '2020-03-11'),
(1003, 400000, '2020-03-12', '2020-03-13'),
(1004, 500000, '2020-03-14', '2020-03-15'),
(1005, 80000, '2020-03-16', '2020-03-17'),
(1006, 30000, '2020-03-17', '2020-03-18'),
(1007, 500000, '2020-03-24', '2020-03-25'),
(1008, 500000, '2020-03-19', '2020-03-25'),
(1009, 80000, '2020-03-12', '2020-03-19'),
(1010, 500000, '2020-04-17', '2020-04-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `URL_Slider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`, `URL_Slider`) VALUES
(1, 'Slide number 1', '1.jpg', 'http://localhost/V-Gaming-Gear/sanpham.php'),
(2, 'Slide number 2', '2.jpg', 'http://localhost/V-Gaming-Gear/sanpham.php'),
(3, 'Slide number 3', '3.jpg', 'http://localhost/V-Gaming-Gear/sanpham.php'),
(7, 'Slide number 4', 'lh3.jpg', 'http://localhost/V-Gaming-Gear/sanpham.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `Ma_NV` int(11) NOT NULL,
  `Ten_NV` varchar(100) NOT NULL,
  `SDT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`Ma_NV`, `Ten_NV`, `SDT`) VALUES
(1, 'Nguyễn Viết Vũ', '0123123'),
(2, 'Đinh Hoàng Vũ', '0123124'),
(3, 'Lê Quang Vũ', '0123125'),
(4, 'Trần Anh Vũ', '0123126'),
(5, 'Văn Thị Ngân Hà', '0123127'),
(6, 'Nguyễn Thị Thu Trang', '0123128'),
(7, 'Trần Ngọc Tuân', '0123129'),
(8, 'Nguyễn Đại Trưởng', '0123110'),
(9, 'Văn Thị Cẩm Hường', '0123111'),
(10, 'Nguyễn Đức Huy', '0123112'),
(11, 'Phạm Quang Huy', '0123113'),
(12, 'Nguyễn Thanh Lam', '0123114'),
(13, 'Nguyễn Thị Huyền Vy', '0123116'),
(14, 'Phạm Xuân Trường', '0123117'),
(15, 'Nguyễn Thị Huyền Trang', '0123128\r\n'),
(16, 'Nguyễn Thái Vũ', '0123129'),
(17, 'Trần Minh Phú', '0123200\r\n'),
(18, 'Đỗ Trung Quân', '0123201'),
(19, 'Võ Như Quỳnh', '0123202'),
(20, 'Trần Hoàng Oanh', '0123204');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff-in-company`
--

CREATE TABLE `staff-in-company` (
  `Ma_NV` int(11) NOT NULL,
  `TK` varchar(100) NOT NULL,
  `MK` varchar(100) NOT NULL,
  `Ma_CV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staff-in-company`
--

INSERT INTO `staff-in-company` (`Ma_NV`, `TK`, `MK`, `Ma_CV`) VALUES
(1, 'vietvu', '123456', NULL),
(2, 'hoangvu', '000111', NULL),
(3, 'quangvu', '000222', NULL),
(4, 'anhvu', '000001', NULL),
(5, 'nganha', '000002', NULL),
(6, 'thutrang', '000003', NULL),
(7, 'ngoctuan', '000004', NULL),
(9, 'camhuong', '000005', NULL),
(12, 'thanhlam', '000006', NULL),
(13, 'huyenvy', '000007', NULL),
(15, 'huyentrang', '000008', NULL),
(17, 'minhphu', '000009', NULL),
(18, 'trungquan', '000010', NULL),
(19, 'nhuquynh', '000011', NULL),
(20, 'hoangoanh', '000012', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff_out`
--

CREATE TABLE `staff_out` (
  `Ma_NV` int(11) NOT NULL,
  `Cong_viec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staff_out`
--

INSERT INTO `staff_out` (`Ma_NV`, `Cong_viec`) VALUES
(8, 'Shipper'),
(10, 'Vận chuyển hàng'),
(11, 'Shipper'),
(14, 'Shipper'),
(16, 'Vận chuyển hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `Ma_NCC` int(11) NOT NULL,
  `Ten_NCC` varchar(100) NOT NULL,
  `Nguoi_dai_dien` varchar(100) NOT NULL,
  `SDT` text NOT NULL,
  `Dia_chi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`Ma_NCC`, `Ten_NCC`, `Nguoi_dai_dien`, `SDT`, `Dia_chi`) VALUES
(1, 'Asus', 'Keanu reeves', '0123456789', 'TP HCM'),
(2, 'Phong Vũ', 'Lê Quang Vũ', '0909094122', 'Bạc Liêu'),
(3, 'Gear VN', 'Nguyễn Viết Vũ', '0974511235', 'Hạ Long'),
(4, 'HaNoiCOmputer', 'Đinh Hoàng Vũ', '12322025', 'TP HCM'),
(5, 'lenovo', 'Nguyễn hoàng khắc hiếu', '09123456', 'Cà Mau'),
(6, 'Samsung', 'HEhehe', '09123456', 'Lào'),
(7, 'Chocopie', 'Orion', '90512315', 'Campuchia'),
(8, 'Dell', 'Bánh chocopie', '092318583', 'China'),
(9, 'HP', 'Songoku', '09213886315', 'Hà Nội'),
(10, 'Cadic', 'Naruto', '009123822', 'Lũng cú'),
(11, 'Poc', 'Pic', '0912358652', 'HUIhu'),
(12, 'Gogeta', 'vegeto', '091234865', 'hehe'),
(13, 'Xên bọ hung', 'Pocolo', '0912315', 'HEHU'),
(14, 'Krilin', 'Calic', '023486520', 'HUhi'),
(15, 'Fide', 'Fizza', '05232153', 'HiHU'),
(16, 'Ma bư', 'Ubu', '052320120', 'HIHU'),
(17, 'Thiên xin hăng', 'Bulma', '210342132', 'HeHu'),
(18, 'Broly', 'Songohan', '053222032', 'HEhu'),
(19, 'Songoten', 'Chichi', '04532052', 'HeHU'),
(20, 'Dragon god earth', 'Dragon god namek', '05132023132', 'HeHE');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Ma_ad`);

--
-- Chỉ mục cho bảng `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Ma_CN`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Ma_SP`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Ma_TL`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`Ma_CTSP`),
  ADD KEY `Mã phân loại SP` (`Ma_TL`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Ma_KH`);

--
-- Chỉ mục cho bảng `detail_invoice_export`
--
ALTER TABLE `detail_invoice_export`
  ADD PRIMARY KEY (`Ma_HDX`,`Serial`),
  ADD KEY `detail_invoice_export_ibfk_2` (`Serial`);

--
-- Chỉ mục cho bảng `detail_invoice_import`
--
ALTER TABLE `detail_invoice_import`
  ADD PRIMARY KEY (`Ma_HDN`,`Serial`) USING BTREE,
  ADD KEY `chi tiết hóa đơn nhập_ibfk_3` (`Serial`);

--
-- Chỉ mục cho bảng `detail_jurisdiction`
--
ALTER TABLE `detail_jurisdiction`
  ADD PRIMARY KEY (`Ma_quyen_han`,`Ma_chuc_vu`),
  ADD KEY `chi tiết quyền hạn_ibfk_1` (`Ma_chuc_vu`);

--
-- Chỉ mục cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`Serial`) USING BTREE,
  ADD KEY `chi tiết sản phẩm_ibfk_1` (`Ma_SP`);

--
-- Chỉ mục cho bảng `detail_promotionproduct`
--
ALTER TABLE `detail_promotionproduct`
  ADD PRIMARY KEY (`Ma_SP`,`Ma_KMSP`),
  ADD KEY `chi tiết khuyến mãi sản phẩm_ibfk_1` (`Ma_KMSP`);

--
-- Chỉ mục cho bảng `detail_promotion_invoice`
--
ALTER TABLE `detail_promotion_invoice`
  ADD PRIMARY KEY (`Ma_HDX`),
  ADD KEY `Ma_KMHD` (`Ma_KMHD`);

--
-- Chỉ mục cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`Ma_SP`,`Hinh_anh`);

--
-- Chỉ mục cho bảng `introductory_homepage`
--
ALTER TABLE `introductory_homepage`
  ADD PRIMARY KEY (`Introductory_Id`);

--
-- Chỉ mục cho bảng `invoice-import`
--
ALTER TABLE `invoice-import`
  ADD PRIMARY KEY (`Ma_HDN`),
  ADD KEY `hóa đơn nhập_ibfk_1` (`Ma_NCC`),
  ADD KEY `hóa đơn nhập_ibfk_2` (`Ma_NV`);

--
-- Chỉ mục cho bảng `invoice_export`
--
ALTER TABLE `invoice_export`
  ADD PRIMARY KEY (`Ma_HDX`),
  ADD KEY `hóa dơn xuất_ibfk_1` (`Ma_KH`),
  ADD KEY `hóa dơn xuất_ibfk_2` (`Ma_NV`);

--
-- Chỉ mục cho bảng `jurisdiction`
--
ALTER TABLE `jurisdiction`
  ADD PRIMARY KEY (`Ma_quyen_han`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Ma_ngan_hang`);

--
-- Chỉ mục cho bảng `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`Ma_HDX`);

--
-- Chỉ mục cho bảng `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`Ma_CV`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Ma_SP`),
  ADD KEY `Loại sản phẩm` (`Ma_CTSP`);

--
-- Chỉ mục cho bảng `product_in_branch`
--
ALTER TABLE `product_in_branch`
  ADD PRIMARY KEY (`Ma_CN`,`Serial`),
  ADD KEY `product_in_branch_ibfk_3` (`Serial`);

--
-- Chỉ mục cho bảng `promotion_invoice`
--
ALTER TABLE `promotion_invoice`
  ADD PRIMARY KEY (`Ma_KMHD`);

--
-- Chỉ mục cho bảng `promotion_product`
--
ALTER TABLE `promotion_product`
  ADD PRIMARY KEY (`Ma_KMSP`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Ma_NV`);

--
-- Chỉ mục cho bảng `staff-in-company`
--
ALTER TABLE `staff-in-company`
  ADD PRIMARY KEY (`Ma_NV`),
  ADD KEY `Ma_CV` (`Ma_CV`);

--
-- Chỉ mục cho bảng `staff_out`
--
ALTER TABLE `staff_out`
  ADD PRIMARY KEY (`Ma_NV`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Ma_NCC`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Ma_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `branch`
--
ALTER TABLE `branch`
  MODIFY `Ma_CN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `Ma_TL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_product`
--
ALTER TABLE `category_product`
  MODIFY `Ma_CTSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `Ma_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `detail_invoice_import`
--
ALTER TABLE `detail_invoice_import`
  MODIFY `Ma_HDN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `introductory_homepage`
--
ALTER TABLE `introductory_homepage`
  MODIFY `Introductory_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `invoice-import`
--
ALTER TABLE `invoice-import`
  MODIFY `Ma_HDN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `invoice_export`
--
ALTER TABLE `invoice_export`
  MODIFY `Ma_HDX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `jurisdiction`
--
ALTER TABLE `jurisdiction`
  MODIFY `Ma_quyen_han` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `Ma_ngan_hang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `Ma_HDX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `position`
--
ALTER TABLE `position`
  MODIFY `Ma_CV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Ma_SP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT cho bảng `promotion_invoice`
--
ALTER TABLE `promotion_invoice`
  MODIFY `Ma_KMHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `promotion_product`
--
ALTER TABLE `promotion_product`
  MODIFY `Ma_KMSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `Ma_NV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Ma_NCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Ma_SP`) REFERENCES `product` (`Ma_SP`);

--
-- Các ràng buộc cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_ibfk_1` FOREIGN KEY (`Ma_TL`) REFERENCES `category` (`Ma_TL`);

--
-- Các ràng buộc cho bảng `detail_invoice_export`
--
ALTER TABLE `detail_invoice_export`
  ADD CONSTRAINT `detail_invoice_export_ibfk_1` FOREIGN KEY (`Ma_HDX`) REFERENCES `invoice_export` (`Ma_HDX`),
  ADD CONSTRAINT `detail_invoice_export_ibfk_2` FOREIGN KEY (`Serial`) REFERENCES `detail_product` (`Serial`);

--
-- Các ràng buộc cho bảng `detail_invoice_import`
--
ALTER TABLE `detail_invoice_import`
  ADD CONSTRAINT `detail_invoice_import_ibfk_1` FOREIGN KEY (`Ma_HDN`) REFERENCES `invoice-import` (`Ma_HDN`),
  ADD CONSTRAINT `detail_invoice_import_ibfk_3` FOREIGN KEY (`Serial`) REFERENCES `detail_product` (`Serial`);

--
-- Các ràng buộc cho bảng `detail_jurisdiction`
--
ALTER TABLE `detail_jurisdiction`
  ADD CONSTRAINT `detail_jurisdiction_ibfk_1` FOREIGN KEY (`Ma_chuc_vu`) REFERENCES `position` (`Ma_CV`),
  ADD CONSTRAINT `detail_jurisdiction_ibfk_2` FOREIGN KEY (`Ma_quyen_han`) REFERENCES `jurisdiction` (`Ma_quyen_han`);

--
-- Các ràng buộc cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`Ma_SP`) REFERENCES `product` (`Ma_SP`);

--
-- Các ràng buộc cho bảng `detail_promotionproduct`
--
ALTER TABLE `detail_promotionproduct`
  ADD CONSTRAINT `detail_promotionproduct_ibfk_1` FOREIGN KEY (`Ma_KMSP`) REFERENCES `promotion_product` (`Ma_KMSP`),
  ADD CONSTRAINT `detail_promotionproduct_ibfk_2` FOREIGN KEY (`Ma_SP`) REFERENCES `product` (`Ma_SP`);

--
-- Các ràng buộc cho bảng `detail_promotion_invoice`
--
ALTER TABLE `detail_promotion_invoice`
  ADD CONSTRAINT `detail_promotion_invoice_ibfk_1` FOREIGN KEY (`Ma_HDX`) REFERENCES `invoice_export` (`Ma_HDX`),
  ADD CONSTRAINT `detail_promotion_invoice_ibfk_2` FOREIGN KEY (`Ma_KMHD`) REFERENCES `promotion_invoice` (`Ma_KMHD`);

--
-- Các ràng buộc cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `image_product_ibfk_1` FOREIGN KEY (`Ma_SP`) REFERENCES `product` (`Ma_SP`);

--
-- Các ràng buộc cho bảng `invoice-import`
--
ALTER TABLE `invoice-import`
  ADD CONSTRAINT `invoice-import_ibfk_1` FOREIGN KEY (`Ma_NCC`) REFERENCES `supplier` (`Ma_NCC`),
  ADD CONSTRAINT `invoice-import_ibfk_2` FOREIGN KEY (`Ma_NV`) REFERENCES `staff-in-company` (`Ma_NV`);

--
-- Các ràng buộc cho bảng `invoice_export`
--
ALTER TABLE `invoice_export`
  ADD CONSTRAINT `invoice_export_ibfk_1` FOREIGN KEY (`Ma_KH`) REFERENCES `customer` (`Ma_KH`),
  ADD CONSTRAINT `invoice_export_ibfk_2` FOREIGN KEY (`Ma_NV`) REFERENCES `staff` (`Ma_NV`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Ma_CTSP`) REFERENCES `category_product` (`Ma_CTSP`);

--
-- Các ràng buộc cho bảng `product_in_branch`
--
ALTER TABLE `product_in_branch`
  ADD CONSTRAINT `product_in_branch_ibfk_1` FOREIGN KEY (`Ma_CN`) REFERENCES `branch` (`Ma_CN`),
  ADD CONSTRAINT `product_in_branch_ibfk_3` FOREIGN KEY (`Serial`) REFERENCES `detail_product` (`Serial`);

--
-- Các ràng buộc cho bảng `staff-in-company`
--
ALTER TABLE `staff-in-company`
  ADD CONSTRAINT `staff-in-company_ibfk_1` FOREIGN KEY (`Ma_NV`) REFERENCES `staff` (`Ma_NV`),
  ADD CONSTRAINT `staff-in-company_ibfk_2` FOREIGN KEY (`Ma_CV`) REFERENCES `position` (`Ma_CV`);

--
-- Các ràng buộc cho bảng `staff_out`
--
ALTER TABLE `staff_out`
  ADD CONSTRAINT `staff_out_ibfk_1` FOREIGN KEY (`Ma_NV`) REFERENCES `staff` (`Ma_NV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
