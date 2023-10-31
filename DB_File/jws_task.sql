-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2023 at 06:33 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jws_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `admin_role`) VALUES
(1, 'Haridas', 'haridas@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

DROP TABLE IF EXISTS `cart_item`;
CREATE TABLE IF NOT EXISTS `cart_item` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `pro_for_id` varchar(500) NOT NULL,
  `user_for_id` int NOT NULL,
  `pro_quantity` varchar(10) NOT NULL,
  `pro_price` float NOT NULL,
  `cart_add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_status` varchar(255) NOT NULL DEFAULT '' COMMENT '1-enabled, 0-disabled',
  `cart_isdeleted` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `order_items_id` bigint NOT NULL AUTO_INCREMENT,
  `order_for_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_for_id` varchar(50) NOT NULL,
  `pro_for_id` varchar(500) NOT NULL,
  `pro_for_quantity` varchar(500) NOT NULL,
  `pro_price` float NOT NULL,
  `order_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_items_status` tinyint NOT NULL DEFAULT '0' COMMENT '1-enabled, 0-disabled',
  PRIMARY KEY (`order_items_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pro_desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `pro_image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `pro_price` float NOT NULL DEFAULT '0',
  `pro_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pro_qty` int NOT NULL DEFAULT '0',
  `pro_status` enum('instock','outstock') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `user_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_last_login` datetime DEFAULT NULL,
  `user_status` enum('active','deactive') COLLATE utf8mb4_general_ci NOT NULL,
  `user_isDeleted` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `email`, `password`, `user_created_at`, `user_last_login`, `user_status`, `user_isDeleted`) VALUES
(1, 'haridas4274', 'Haridas', 'haridasnamakkal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-10-30 16:20:19', NULL, 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
CREATE TABLE IF NOT EXISTS `user_address` (
  `add_id` int NOT NULL AUTO_INCREMENT,
  `user_for_id` int NOT NULL,
  `bill_mobile_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `flat_num` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `town` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `area` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `land_mark` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pincode` int NOT NULL,
  `add_status` tinyint NOT NULL DEFAULT '0' COMMENT '1 =>user current address',
  `add_is_Deleted` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`add_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

DROP TABLE IF EXISTS `user_orders`;
CREATE TABLE IF NOT EXISTS `user_orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `or_user_for_id` int NOT NULL,
  `order_uniq_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_add_for_id` int NOT NULL,
  `order_status` tinyint NOT NULL DEFAULT '0',
  `order_created_dt` datetime NOT NULL,
  `order_updated_dt` datetime NOT NULL,
  `total_amount` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_id` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_cancel` tinyint NOT NULL DEFAULT '0',
  `is_refund` tinyint NOT NULL DEFAULT '0',
  `user_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
