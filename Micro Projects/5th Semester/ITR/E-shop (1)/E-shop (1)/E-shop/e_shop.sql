-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2023 at 12:13 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

DROP TABLE IF EXISTS `order_info`;
CREATE TABLE IF NOT EXISTS `order_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_mobile` varchar(10) NOT NULL,
  `cust_address` varchar(200) NOT NULL,
  `order_by` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `reason` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`id`, `product_name`, `company_name`, `product_price`, `cust_name`, `cust_mobile`, `cust_address`, `order_by`, `order_status`, `reason`) VALUES
(2, 'Fan', 'Bajaj', 1200, 'Pallavi Thorat', '1234567890', '\r\nSinnar', 4, 'Rejected', 'sdgdsgs'),
(3, 'dfsrerwer', 'job finder', 2323, 'Rutuja Dalvi', '0987654321', 'fdfs', 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

DROP TABLE IF EXISTS `product_info`;
CREATE TABLE IF NOT EXISTS `product_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `product_name`, `company_name`, `product_price`, `product_img`) VALUES
(1, 'Fan', 'Bajaj', 1200, '1.jpg'),
(3, 'dfs', 'Bajaj', 234, '3 (2).jpg'),
(4, 'Motar', 'Bajaj', 33, 'product-5.jpg'),
(5, 'dfsrerwer', 'job finder', 2323, 'product-4.jpg'),
(6, 'Fan', 'Bajaj', 200, 'bike.jpg'),
(7, 'Fan', 'crompton', 800, 'pricing-ultimate.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'admin@123', 0),
(2, 'Rutuja Dalvi', 'rutuja@gmail.com', 'rutuja', '1234', 1),
(4, 'Pallavi Surykant Thorat', 'thoratpallavi081@gmail.com', 'pallavi', '123456', 1),
(5, 'Gaouri', 'gouri@gmail.com', 'gaouri', '123456', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
