-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2014 at 06:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doanthanhnien`
--

-- --------------------------------------------------------

--
-- Table structure for table `batgiu`
--

CREATE TABLE IF NOT EXISTS `batgiu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `lydo` varchar(255) NOT NULL COMMENT 'bi bat, bi tu',
  `batdau_thang` int(2) NOT NULL,
  `batdau_nam` int(4) NOT NULL,
  `ketthuc_thang` int(2) NOT NULL,
  `ketthuc_nam` int(4) NOT NULL,
  `khaibao_nguoi` varchar(255) NOT NULL,
  `vande` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chedocu`
--

CREATE TABLE IF NOT EXISTS `chedocu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `coquan` varchar(255) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  `batdau_thang` int(2) NOT NULL,
  `batdau_nam` int(4) NOT NULL,
  `ketthuc_thang` int(2) NOT NULL,
  `ketthuc_nam` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `congtac`
--

CREATE TABLE IF NOT EXISTS `congtac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `batdau_thang` int(2) NOT NULL,
  `batdau_nam` int(4) NOT NULL,
  `ketthuc_thang` int(2) NOT NULL,
  `ketthuc_nam` int(4) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `daotao`
--

CREATE TABLE IF NOT EXISTS `daotao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `tentruong` varchar(255) NOT NULL,
  `nganhhoc` varchar(255) NOT NULL,
  `thoigianhoc` varchar(255) NOT NULL,
  `hinhthuchoc` varchar(255) NOT NULL,
  `vanbang` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lylich`
--

CREATE TABLE IF NOT EXISTS `lylich` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donvitructhuoc` varchar(255) NOT NULL,
  `donvicoso` varchar(255) NOT NULL,
  `sohieucanbo` varchar(50) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `tengoikhac` varchar(100) NOT NULL,
  `capuyhientai` varchar(255) NOT NULL,
  `capuykiem` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  `phucapchucvu` varchar(50) NOT NULL,
  `sinh_ngay` int(2) NOT NULL,
  `sinh_thang` int(2) NOT NULL,
  `sinh_nam` int(4) NOT NULL,
  `noisinh` varchar(255) NOT NULL,
  `quequan_xa` varchar(255) NOT NULL,
  `quequan_huyen` varchar(255) NOT NULL,
  `quequan_tinh` varchar(255) NOT NULL,
  `noiohiennay` varchar(255) NOT NULL,
  `dienthoai` varchar(50) NOT NULL,
  `dantoc` varchar(50) NOT NULL,
  `tongiao` varchar(50) NOT NULL,
  `xuatthan` varchar(255) NOT NULL,
  `nghetruoctuyendung` varchar(255) NOT NULL,
  `ngaytuyendung` date NOT NULL,
  `coquantruoc_ten` varchar(255) NOT NULL,
  `coquantruoc_diadiem` varchar(255) NOT NULL,
  `coquanhientai_ngayvao` date NOT NULL,
  `cachmang_ngayvao` date NOT NULL,
  `dangcongsan_ngayvao` date NOT NULL,
  `dangcongsan_ngaychinhthuc` date NOT NULL,
  `tochucxahoi_ngayvao` date NOT NULL,
  `ngaynhapngu` date NOT NULL,
  `ngayxuatngu` date NOT NULL,
  `quanhamcaonhat_ten` varchar(255) NOT NULL,
  `quanhamcaonhat_nam` date NOT NULL,
  `giaoducphothong` varchar(255) NOT NULL,
  `hochamcaonhat` varchar(255) NOT NULL,
  `lyluanchinhtri` varchar(255) NOT NULL,
  `ngoaingu` varchar(255) NOT NULL,
  `congtacdanglam` varchar(255) NOT NULL,
  `ngachcongchuc_ten` varchar(255) NOT NULL,
  `ngachcongchuc_maso` varchar(255) NOT NULL,
  `ngachcongchuc_bacluong` int(5) NOT NULL,
  `ngachcongchuc_heso` int(5) NOT NULL,
  `ngachcongchuc_thang` int(2) NOT NULL,
  `ngachcongchuc_nam` int(4) NOT NULL,
  `danhhieu_ten` varchar(255) NOT NULL,
  `danhhieu_nam` int(4) NOT NULL,
  `sotruongcongtac` varchar(255) NOT NULL,
  `congvieclaunhat` varchar(255) NOT NULL,
  `khenthuong_ten` varchar(255) NOT NULL,
  `khenthuong_nam` int(4) NOT NULL,
  `kyluat_ten` varchar(255) NOT NULL,
  `kyluat_nam` int(4) NOT NULL,
  `kyluat_lydo` varchar(255) NOT NULL,
  `kyluat_hinhthuc` varchar(255) NOT NULL,
  `tinhtrangsuckhoe` varchar(255) NOT NULL,
  `chieucao` float NOT NULL,
  `cannang` int(5) NOT NULL,
  `nhommau` varchar(5) NOT NULL,
  `cmnd` varchar(50) NOT NULL,
  `thuongbinhloai` varchar(50) NOT NULL,
  `giadinhlietsy` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quanhegiadinh`
--

CREATE TABLE IF NOT EXISTS `quanhegiadinh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `quanhe` varchar(50) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `namsinh` int(4) NOT NULL,
  `chitiet` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quatrinhluong`
--

CREATE TABLE IF NOT EXISTS `quatrinhluong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `thang` int(2) NOT NULL,
  `nam` int(4) NOT NULL,
  `ngach` varchar(255) NOT NULL,
  `bac` int(10) NOT NULL,
  `heso` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thannhannuocngoai`
--

CREATE TABLE IF NOT EXISTS `thannhannuocngoai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `quanhe` varchar(255) NOT NULL,
  `lamgi` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thunhap`
--

CREATE TABLE IF NOT EXISTS `thunhap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `luong` int(11) NOT NULL,
  `thukhac` int(11) NOT NULL,
  `nhacap` int(11) NOT NULL,
  `nhacap_dientich` int(11) NOT NULL,
  `nhamua` int(11) NOT NULL,
  `nhamua_dientich` int(11) NOT NULL,
  `datcap_dientich` int(11) NOT NULL,
  `datmua_dientich` int(11) NOT NULL,
  `datsanxuat` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tochucnuocngoai`
--

CREATE TABLE IF NOT EXISTS `tochucnuocngoai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lylich_id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `lamgi` varchar(255) NOT NULL,
  `truso` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lylich_id` (`lylich_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batgiu`
--
ALTER TABLE `batgiu`
  ADD CONSTRAINT `batgiu_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `chedocu`
--
ALTER TABLE `chedocu`
  ADD CONSTRAINT `chedocu_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `congtac`
--
ALTER TABLE `congtac`
  ADD CONSTRAINT `congtac_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `daotao`
--
ALTER TABLE `daotao`
  ADD CONSTRAINT `daotao_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `quanhegiadinh`
--
ALTER TABLE `quanhegiadinh`
  ADD CONSTRAINT `quanhegiadinh_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `quatrinhluong`
--
ALTER TABLE `quatrinhluong`
  ADD CONSTRAINT `quatrinhluong_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `thannhannuocngoai`
--
ALTER TABLE `thannhannuocngoai`
  ADD CONSTRAINT `thannhannuocngoai_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `thunhap`
--
ALTER TABLE `thunhap`
  ADD CONSTRAINT `thunhap_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

--
-- Constraints for table `tochucnuocngoai`
--
ALTER TABLE `tochucnuocngoai`
  ADD CONSTRAINT `tochucnuocngoai_ibfk_1` FOREIGN KEY (`lylich_id`) REFERENCES `lylich` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
