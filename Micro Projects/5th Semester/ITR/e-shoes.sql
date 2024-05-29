-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2023 at 05:49 AM
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
-- Database: `e-shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `carto_info`
--

DROP TABLE IF EXISTS `carto_info`;
CREATE TABLE IF NOT EXISTS `carto_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(300) NOT NULL,
  `product_company` varchar(200) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_categories` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

DROP TABLE IF EXISTS `cart_info`;
CREATE TABLE IF NOT EXISTS `cart_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(60) NOT NULL,
  `cust_mobile` int(20) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`id`, `cust_name`, `cust_mobile`, `cust_address`) VALUES
(1, 'BVOPS9552F', 2147483647, 'Cidco Mahanagar');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`id`, `product_name`, `company_name`, `product_price`, `cust_name`, `cust_mobile`, `cust_address`, `order_by`, `order_status`, `reason`) VALUES
(2, 'Fan', 'Bajaj', 1200, 'Pallavi Thorat', '1234567890', '\r\nSinnar', 4, 'Approved', ''),
(3, 'dfsrerwer', 'job finder', 2323, 'Rutuja Dalvi', '0987654321', 'fdfs', 2, '', ''),
(4, 'Motar', 'Bajaj', 33, 'kanchan', '1234556789', 'nashik', 6, '', ''),
(6, 'bag', 'geevity', 600, 'kk', '1234567890', 'kk', 6, '', ''),
(8, 'watch', 'sonata', 1700, 'kanchan', '123456789', 'nashik', 1, '', ''),
(10, 'watch', 'sonata', 1700, 'ashu', '123456789', 'mumbai', 1, '', ''),
(11, 'Fan', 'Bajaj', 0, 'ass', '1234567898', 'nashok', 0, '', ''),
(12, 'watch', 'sonata', 1700, 'kk', '1234567890', 'nashik', 6, '', '');

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
  `product_categories` varchar(60) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  `cart_status` int(11) NOT NULL COMMENT '0-no cart , 1- in cart',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `product_name`, `company_name`, `product_price`, `product_categories`, `product_img`, `cart_status`) VALUES
(1, 'Fan', 'Bajaj', 1200, 'Women', '1.jpg', 0),
(4, 'Motar', 'Bajaj', 1500, 'Women', 'product-5.jpg', 0),
(6, 'Fan', 'Bajaj', 2000, 'Women', 'bike.jpg', 0),
(7, 'Fan', 'crompton', 800, 'Men', 'pricing-ultimate.png', 0),
(8, 'Motar', 'crompton', 1200, 'Men', 'portfolio-5.jpg', 0),
(9, 'bag', 'geevity', 600, 'Men', 'portfolio-8.jpg', 0),
(10, 'watch', 'sonata', 1700, 'Men', 'portfolio-9.jpg', 0),
(12, 'Motar', 'job finder', 80, 'Men', 'acaf1b4353133be2c48dcdc8b0da6f7a.png', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'admin@123', 0),
(2, 'Rutuja Dalvi', 'rutuja@gmail.com', 'rutuja', '1234', 1),
(4, 'Pallavi Surykant Thorat', 'thoratpallavi081@gmail.com', 'pallavi', '123456', 1),
(5, 'Gaouri', 'gouri@gmail.com', 'gaouri', '123456', 1),
(6, 'kanchan', 'kanchan@gmail.com', 'kanchan', '1234', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
