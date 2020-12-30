-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 11:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sale_system`
--
CREATE DATABASE IF NOT EXISTS `sale_system` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sale_system`;

-- --------------------------------------------------------

--
-- Table structure for table `db_basket`
--

CREATE TABLE `db_basket` (
  `db_basket_id` int(10) NOT NULL,
  `db_basket_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_basket_date` datetime DEFAULT current_timestamp(),
  `db_basket_total` int(10) NOT NULL,
  `db_product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_files`
--

CREATE TABLE `db_files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `uploaded_close` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_files`
--

INSERT INTO `db_files` (`id`, `file_name`, `uploaded_on`, `uploaded_close`) VALUES
(1, 'cfdhl76oi91gxzt23bm5.jpg', '2020-12-29 10:28:42', '0000-00-00 00:00:00'),
(2, 'e37mczbp9g5hqtsl8auo.jpg', '2020-12-29 10:56:23', '0000-00-00 00:00:00'),
(3, 'crfjubv21xealq074hs9.jpg', '2020-12-29 10:56:23', '0000-00-00 00:00:00'),
(4, 'd6izuqrgvloyafxb4e03.jpg', '2020-12-29 10:56:23', '0000-00-00 00:00:00'),
(5, 'ukmgxoqz6j4rv37seh2a.jpg', '2020-12-29 10:56:23', '0000-00-00 00:00:00'),
(6, '7dlmwk0avpu95r8ejycq.png', '2020-12-30 15:40:11', '0000-00-00 00:00:00'),
(7, '1xisfd5p9awjk0n4er6v.png', '2020-12-30 15:41:22', '0000-00-00 00:00:00'),
(8, 'oh4d38qskpmz25va9x6c.png', '2020-12-30 15:43:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `db_product`
--

CREATE TABLE `db_product` (
  `db_product_id` int(10) NOT NULL,
  `db_product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_product_price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `db_product_images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_product_description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_product_num` int(10) NOT NULL,
  `db_product_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_product`
--

INSERT INTO `db_product` (`db_product_id`, `db_product_name`, `db_product_price`, `db_product_images`, `db_product_description`, `db_product_num`, `db_product_date`) VALUES
(9, 'brand mine ', '10 THB', '', ' hidden', 40, '2020-12-29 18:15:17'),
(10, 'oefprianan', '30 THB', '', ' Thannaphat', 900, '2020-12-30 11:58:40'),
(11, 'richy rice', '50', '', ' dsdada', 5000, '2020-12-30 12:10:39'),
(12, 'richy rice', '0', '', ' asdasdas', 300, '2020-12-30 14:28:44'),
(13, 'brand mine', 'B20', '', ' fsd;lfdmk;lasmd;fl', 200, '2020-12-30 14:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `db_staff`
--

CREATE TABLE `db_staff` (
  `db_staff_id` int(10) NOT NULL,
  `db_staff_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_telephon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_idcard` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_sub_area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_Province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_houseNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_postal_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_staff_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_basket`
--
ALTER TABLE `db_basket`
  ADD PRIMARY KEY (`db_basket_id`),
  ADD KEY `basket_product` (`db_product_id`);

--
-- Indexes for table `db_files`
--
ALTER TABLE `db_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_product`
--
ALTER TABLE `db_product`
  ADD PRIMARY KEY (`db_product_id`);

--
-- Indexes for table `db_staff`
--
ALTER TABLE `db_staff`
  ADD PRIMARY KEY (`db_staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_basket`
--
ALTER TABLE `db_basket`
  MODIFY `db_basket_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_files`
--
ALTER TABLE `db_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_product`
--
ALTER TABLE `db_product`
  MODIFY `db_product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `db_staff`
--
ALTER TABLE `db_staff`
  MODIFY `db_staff_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_basket`
--
ALTER TABLE `db_basket`
  ADD CONSTRAINT `basket_product` FOREIGN KEY (`db_product_id`) REFERENCES `db_product` (`db_product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
