-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2024 at 09:55 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(50) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `username` varchar(60) NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `frist_name`, `last_name`, `username`, `phone`, `email`, `password`) VALUES
(1, 'hale', 'luya', '123', 167898404, 'hal@hmail.com', '123'),
(2, 'amen', 'luya', 'sa', 167898404, 'hel@hmail.com', '23'),
(3, 'confirm', 'password', 'ebakeh', 167898404, 'hal@hmail.com', '87'),
(4, 'email', 'address', 'sdf', 167898404, 'samuelterefe808@gmail.com', '67'),
(5, 'ayele', 'bula', 'aye', 1234567, 'aye@gmail', '23'),
(6, 'confirm', 'password', 'sq', 167898404, 'hal@hmail.com', 'rt'),
(7, 'hale', 'luya', 'rer', 167898404, 'hal@hmail.com', '45'),
(8, 'hale', 'tre', 'user', 167898404, 'hal@hmail.com', '234'),
(9, 'etretr', 'eret', 'rte', 0, 'samuelterefe808@gmail.com', '1234'),
(10, 'tt', 'tret', 'ter', 0, 'etr@gmail.com', '213'),
(11, 'hale', 'luya', 'ebakeh', 231, 'hal@hmail.com', '234'),
(12, 'hale', 'luya', '12', 167898404, 'hal@hmail.com', '2121'),
(13, 'ayene', 'teger', 'ayu', 961471864, 'hal@hmail.com', '56'),
(14, 'Samuel', 'Terefe', 'samch', 938941672, '093894167@gmail.com', '123456'),
(15, 'Samuel', 'Terefe', 'su', 938941672, '093894167@gmail.com', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(23, 'yordi', 'yordi', 'b236309097c17be6b318b546731f5b71'),
(17, 'hulubesu', 'sq', '4bc92a7aeb9478e6bf3f989025232b22'),
(24, 'samuel', 'rere', '56bd7107802ebe56c6918992f0608ec6'),
(20, 'adminstrator', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(21, 'samuel', 'sami', '86f3f50a6f945bbfa351e55faac043fb');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, '', '', 'NO', 0),
(2, 'ret', '', 'yes', 0),
(3, 'food', '', 'yes', 0),
(4, 'drink', '', 'yes', 0),
(5, 'bula', '', 'yes', 0),
(6, 'klik', '', 'yes', 0),
(7, 'uiioiy', '', 'yes', 0),
(8, 'we3w', '', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

DROP TABLE IF EXISTS `tbl_food`;
CREATE TABLE IF NOT EXISTS `tbl_food` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(60,0) NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `food` varchar(150) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` int NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` int NOT NULL,
  `customer_email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `customer_address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(9, '', '', 1, '0', '2023-06-30 00:00:00', '', 'hkhjlj', 4678, 'samuelterefe808@gmail.com', 'rtyruoiuoytr'),
(10, '', '', 1, '0', '2023-07-03 00:00:00', '', 'ut', 889775, 'samuelterefe808@gmail.com', 'uytu'),
(11, '', '', 1, '0', '2023-07-04 00:00:00', '', 'amen luya', 889775, 'hel@hmail.com', 'iopoi'),
(7, '', '', 4, '0', '2023-06-14 00:00:00', '', 'ahun selam', 9167813, 'abi@gmail.com', ''),
(8, '', '', 3, '0', '2023-06-14 00:00:00', '', 'temsgan behail', 9167813, 'visatemtalign@gmail.com', 'hamelt'),
(12, '', '', 1, '0', '2023-07-04 00:00:00', '', 'email address', 889775, 'samuelterefe808@gmail.com', 'rtyruytr'),
(13, '', '', 1, '0', '2023-07-04 00:00:00', '', 'amen luya', 465768, 'hel@hmail.com', 'iopoi'),
(14, '', '', 1, '0', '2023-07-04 00:00:00', '', 'hale luya', 789798698, 'hal@hmail.com', '790907986'),
(15, '', '', 1, '0', '2023-07-05 00:00:00', '', 'sami tertefe', 532, 'samuelterefe808@gmail.com', 'rtyruytr'),
(16, '', '', 1, '0', '2023-07-05 00:00:00', '', 'confirm password', 87976, 'hal@hmail.com', 'rtyruytr'),
(17, '', '', 4, '0', '2023-07-06 00:00:00', '', 'hale luya', 9167813, 'hal@hmail.com', 'naremo'),
(18, '', '', 5, '0', '2023-07-09 00:00:00', '', 'hale luya', 4675, 'hal@h3465mail.com', '793w54350907986'),
(19, '', '', 2, '0', '2023-07-09 00:00:00', '', 'terefe', 932188537, 'terefe@gmail.com', 'homecho, sedel sefer'),
(20, '', '', 30, '0', '2024-05-07 00:00:00', '', 'Samuel Terefe', 2147483647, 'samuel@gmail.com', 'Hossina');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
