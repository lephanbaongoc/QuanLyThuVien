-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2024 lúc 04:46 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlthuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `MaDG` varchar(10) NOT NULL,
  `TenDG` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NgayCapThe` date NOT NULL,
  `HanDungThe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`MaDG`, `TenDG`, `NgaySinh`, `GioiTinh`, `DiaChi`, `NgayCapThe`, `HanDungThe`) VALUES
('MH00', 'Nguyễn Bảo Quyên', '2001-11-03', 'Nữ', '01/03 Thi Sách, Nha Trang', '2022-10-25', '2025-10-25'),
('MH01', 'Trần Thị Hương Hoa', '1999-08-28', 'Nữ', 'Tuy Hòa, Phú Yên', '2022-12-12', '2024-12-12'),
('MT00', 'Tô Ngọc Uyên Thủy', '2003-12-10', 'Nữ', '1 Đống Đa, Phường 3, Đà Lạt', '2020-05-05', '2025-05-05'),
('MX00', 'Phạm Tú Anh', '2000-03-02', 'Nam', '26/02 Mai An Tiêm, Nha Trang', '2021-01-01', '2026-01-01'),
('MX01', 'Lê Phan Ngọc Bích', '2000-11-12', 'Nữ', '20/1 Bắc Sơn, Nha Trang', '2021-01-01', '2026-01-01'),
('MĐ00', 'Lưu Gia Huy', '2005-10-10', 'Nam', '26/02 Mai An Tiêm, Nha Trang', '2021-03-17', '2025-03-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisach`
--

CREATE TABLE `loaisach` (
  `MaLoaiSach` varchar(10) NOT NULL,
  `TenLoaiSach` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisach`
--

INSERT INTO `loaisach` (`MaLoaiSach`, `TenLoaiSach`) VALUES
('GT400', 'Sách Giáo trình'),
('KH500', 'Sách Khoa học'),
('MT700', 'Sách Mỹ thuật'),
('PL300', 'Sách Pháp luật'),
('TN800', 'Sách Thiếu nhi'),
('VH300', 'Sách Văn hóa xã hội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muon`
--

CREATE TABLE `muon` (
  `MaDG` varchar(10) NOT NULL,
  `NgayMuon` date NOT NULL,
  `SL_Muon` smallint(6) NOT NULL,
  `MaSach` varchar(10) NOT NULL,
  `MaTT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `muon`
--

INSERT INTO `muon` (`MaDG`, `NgayMuon`, `SL_Muon`, `MaSach`, `MaTT`) VALUES
('MH00', '2023-03-04', 35, 'N7', 'BN01'),
('MH01', '2022-10-30', 2, 'P4', 'BN01'),
('MH01', '2022-12-01', 1, 'Z5', 'HT02'),
('MT00', '2022-10-30', 20, 'C3', 'BN01'),
('MT00', '2022-12-12', 6, 'P4', 'BU00'),
('MX00', '2023-01-12', 3, 'K3', 'BN01'),
('MX00', '2022-09-12', 5, 'N7', 'BU00'),
('MX01', '2022-02-23', 10, 'A8', 'BU00'),
('MX01', '2022-02-23', 10, 'C3', 'BU00'),
('MX01', '2022-02-23', 10, 'K3', 'BU00'),
('MX01', '2022-02-23', 10, 'N7', 'BU00'),
('MX01', '2022-02-23', 10, 'P4', 'BU00'),
('MX01', '2022-11-02', 1, 'Z5', 'HT02'),
('MĐ00', '2023-04-10', 9, 'C3', 'HT02'),
('MĐ00', '2023-04-10', 5, 'Z5', 'HT02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngonngu`
--

CREATE TABLE `ngonngu` (
  `MaNN` varchar(5) NOT NULL,
  `TenNN` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ngonngu`
--

INSERT INTO `ngonngu` (`MaNN`, `TenNN`) VALUES
('ko', 'Tiếng Hàn Quốc'),
('vi', 'Tiếng Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `MaNXB` varchar(10) NOT NULL,
  `TenNXB` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DienThoai` varchar(20) NOT NULL,
  `QuocGia` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`, `DiaChi`, `DienThoai`, `QuocGia`) VALUES
('CT03', 'NXB Công Thương', '655 Phạm Văn Đồng, Bắc Từ Liêm, Hà Nội', '0438254699', 'Việt Nam'),
('HĐ01', 'NXB Hồng Đức', '65 Tràng Thi, Hàng Bông, Hoàn Kiếm, Hà Nội', '02439260024', 'Việt Nam'),
('KĐ00', 'NXB Kim Đồng', '55 Quang Trung, Hai Bà Trưng, Hà Nội', '02439434730', 'Việt Nam'),
('TH00', 'NXB Thanh Hóa', '248 Trần Phú, Ba Đình, Thanh Hoá', '0373852281', 'Việt Nam'),
('TT02', 'NXB Tri Thức', '53 Nguyễn Du, Hai Bà Trưng, Hà Nội', '02439447279', 'Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `MaSach` varchar(10) NOT NULL,
  `MaLoaiSach` varchar(10) NOT NULL,
  `TenSach` varchar(100) NOT NULL,
  `MaNXB` varchar(10) NOT NULL,
  `MaNN` varchar(5) NOT NULL,
  `SoLuong` smallint(6) NOT NULL,
  `KichCo` varchar(50) NOT NULL,
  `SoTrang` smallint(6) NOT NULL,
  `GiaTien` decimal(19,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`MaSach`, `MaLoaiSach`, `TenSach`, `MaNXB`, `MaNN`, `SoLuong`, `KichCo`, `SoTrang`, `GiaTien`) VALUES
('A8', 'TN800', 'Dế mèn phiêu lưu ký', 'KĐ00', 'vi', 28, '25x18', 144, 120000.0000),
('C3', 'VH300', 'Việt Nam phong tục', 'KĐ00', 'vi', 11, '16x24', 384, 150000.0000),
('K3', 'PL300', 'Pháp lý M&A căn bản', 'CT03', 'vi', 17, '24x15', 268, 120000.0000),
('N7', 'MT700', 'Bí quyết vẽ kí họa', 'TH00', 'vi', 51, '27x19', 143, 100000.0000),
('P4', 'GT400', 'Vitamin tiếng Hàn', 'HĐ01', 'ko', 23, '19x25', 288, 260000.0000),
('Z5', 'KH500', 'Nguồn gốc muôn loài', 'TT02', 'vi', 34, '28x26', 172, 240000.0000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `MaTG` varchar(10) NOT NULL,
  `TenbidanhTG` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenthatTG` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GioiTinh` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `QuocTich` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`MaTG`, `TenbidanhTG`, `TenthatTG`, `GioiTinh`, `NgaySinh`, `QuocTich`) VALUES
('BV', 'Bưu Văn', 'Phan Kế Bính', 'Nam', '1989-03-03', 'Việt Nam'),
('CRD', 'Charles Robert Darwin', 'Charles Robert Darwin', 'Nam', '1809-12-02', 'Anh'),
('HPHT', 'Huỳnh Phạm Hương Trang', 'Huỳnh Phạm Hương Trang', 'Nữ', '1989-02-10', 'Việt Nam'),
('JHN', 'Jun Ha Na', 'Jun Ha Na', 'Nữ', '1990-12-22', 'Hàn Quốc'),
('TH', 'Tố Hữu', 'Nguyễn Kim Thành', 'Nam', '1920-10-04', 'Việt Nam'),
('THN', 'Trương Hữu Ngữ', 'Trương Hữu Ngữ', 'Nam', '1967-11-11', 'Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia_sach`
--

CREATE TABLE `tacgia_sach` (
  `MaTG` varchar(10) NOT NULL,
  `MaSach` varchar(10) NOT NULL,
  `NgayViet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia_sach`
--

INSERT INTO `tacgia_sach` (`MaTG`, `MaSach`, `NgayViet`) VALUES
('BV', 'C3', '2020-04-04'),
('CRD', 'Z5', '2019-02-27'),
('HPHT', 'N7', '2015-05-08'),
('JHN', 'P4', '2018-01-10'),
('TH', 'A8', '1941-09-11'),
('THN', 'K3', '2022-01-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuthu`
--

CREATE TABLE `thuthu` (
  `MaTT` varchar(10) NOT NULL,
  `TenTT` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuthu`
--

INSERT INTO `thuthu` (`MaTT`, `TenTT`, `NgaySinh`, `GioiTinh`, `DiaChi`) VALUES
('BN01', 'Lê Phan Bảo Ngọc', '2003-12-12', 'Nữ', '12/12 Củ Chi, Nha Trang'),
('BU00', 'Nguyễn Bảo Uyên', '2003-10-04', 'Nữ', 'Ninh Hòa, Khánh Hòa'),
('HT02', 'Trần Thị Hương Thủy', '2003-08-08', 'Nữ', 'Tuy Hòa, Phú Yên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tra`
--

CREATE TABLE `tra` (
  `MaDG` varchar(10) NOT NULL,
  `NgayTra` date DEFAULT NULL,
  `MaSach` varchar(10) NOT NULL,
  `MaTT` varchar(10) NOT NULL,
  `TienPhat` decimal(19,4) DEFAULT NULL,
  `SL_Tra` smallint(6) DEFAULT NULL,
  `SL_Hong` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tra`
--

INSERT INTO `tra` (`MaDG`, `NgayTra`, `MaSach`, `MaTT`, `TienPhat`, `SL_Tra`, `SL_Hong`) VALUES
('MH00', '2023-04-04', 'N7', 'BN01', 320.0000, 31, 4),
('MH01', '2022-11-11', 'P4', 'BN01', NULL, 2, NULL),
('MH01', '2022-12-30', 'Z5', 'HT02', NULL, 1, NULL),
('MT00', '2022-11-09', 'C3', 'BN01', 360.0000, 17, 3),
('MT00', '2022-12-30', 'P4', 'BU00', 208.0000, 5, 1),
('MX00', '2023-02-02', 'K3', 'BN01', 96.0000, 2, 1),
('MX00', '2022-09-25', 'N7', 'BU00', 80.0000, 4, 1),
('MX01', '2022-03-03', 'A8', 'BU00', NULL, 10, NULL),
('MX01', '2022-03-03', 'C3', 'BU00', NULL, 10, NULL),
('MX01', '2022-03-03', 'K3', 'BU00', NULL, 10, NULL),
('MX01', '2022-03-03', 'N7', 'BU00', NULL, 10, NULL),
('MX01', '2022-03-03', 'P4', 'BU00', NULL, 10, NULL),
('MX01', '2022-12-22', 'Z5', 'HT02', NULL, 1, NULL),
('MĐ00', NULL, 'C3', 'HT02', NULL, NULL, NULL),
('MĐ00', NULL, 'Z5', 'HT02', NULL, 5, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`MaDG`);

--
-- Chỉ mục cho bảng `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`MaLoaiSach`);

--
-- Chỉ mục cho bảng `muon`
--
ALTER TABLE `muon`
  ADD PRIMARY KEY (`MaDG`,`MaSach`),
  ADD KEY `MaSach` (`MaSach`),
  ADD KEY `MaTT` (`MaTT`);

--
-- Chỉ mục cho bảng `ngonngu`
--
ALTER TABLE `ngonngu`
  ADD PRIMARY KEY (`MaNN`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`MaNXB`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`),
  ADD KEY `MaLoaiSach` (`MaLoaiSach`),
  ADD KEY `MaNXB` (`MaNXB`),
  ADD KEY `MaNN` (`MaNN`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MaTG`);

--
-- Chỉ mục cho bảng `tacgia_sach`
--
ALTER TABLE `tacgia_sach`
  ADD PRIMARY KEY (`MaTG`,`MaSach`),
  ADD KEY `MaSach` (`MaSach`);

--
-- Chỉ mục cho bảng `thuthu`
--
ALTER TABLE `thuthu`
  ADD PRIMARY KEY (`MaTT`);

--
-- Chỉ mục cho bảng `tra`
--
ALTER TABLE `tra`
  ADD PRIMARY KEY (`MaDG`,`MaSach`),
  ADD KEY `MaSach` (`MaSach`),
  ADD KEY `MaTT` (`MaTT`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `muon`
--
ALTER TABLE `muon`
  ADD CONSTRAINT `muon_ibfk_1` FOREIGN KEY (`MaDG`) REFERENCES `docgia` (`MaDG`),
  ADD CONSTRAINT `muon_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`),
  ADD CONSTRAINT `muon_ibfk_3` FOREIGN KEY (`MaTT`) REFERENCES `thuthu` (`MaTT`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`MaLoaiSach`) REFERENCES `loaisach` (`MaLoaiSach`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`MaNXB`) REFERENCES `nhaxuatban` (`MaNXB`),
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`MaNN`) REFERENCES `ngonngu` (`MaNN`);

--
-- Các ràng buộc cho bảng `tacgia_sach`
--
ALTER TABLE `tacgia_sach`
  ADD CONSTRAINT `tacgia_sach_ibfk_1` FOREIGN KEY (`MaTG`) REFERENCES `tacgia` (`MaTG`),
  ADD CONSTRAINT `tacgia_sach_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `tra`
--
ALTER TABLE `tra`
  ADD CONSTRAINT `tra_ibfk_1` FOREIGN KEY (`MaDG`) REFERENCES `docgia` (`MaDG`),
  ADD CONSTRAINT `tra_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`),
  ADD CONSTRAINT `tra_ibfk_3` FOREIGN KEY (`MaTT`) REFERENCES `thuthu` (`MaTT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
