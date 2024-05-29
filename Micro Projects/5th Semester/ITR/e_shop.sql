-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 04:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `cart_info`
--

CREATE TABLE `cart_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_company` varchar(200) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_categories` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_mobile` varchar(10) NOT NULL,
  `cust_address` varchar(200) NOT NULL,
  `order_by` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_categories` varchar(60) NOT NULL,
  `men` varchar(30) NOT NULL,
  `women` varchar(30) NOT NULL,
  `product_img` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `product_name`, `company_name`, `product_price`, `product_categories`, `men`, `women`, `product_img`) VALUES
(1, 'Fan', 'Bajaj', 1200, 'male', '<p> Price :                   ', '', '1.jpg'),
(4, 'Motar', 'Bajaj', 1500, 'male', 'men', '', 'product-5.jpg'),
(6, 'Fan', 'Bajaj', 2000, 'female', '', 'women', 'bike.jpg'),
(7, 'Fan', 'crompton', 800, 'male', 'men', '', 'pricing-ultimate.png'),
(8, 'Motar', 'crompton', 1200, 'male', 'men', '', 'portfolio-5.jpg'),
(9, 'bag', 'geevity', 600, 'female', '', 'women', 'portfolio-8.jpg'),
(10, 'watch', 'sonata', 1700, 'male', 'men', '', 'portfolio-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'admin@123', 0),
(2, 'Rutuja Dalvi', 'rutuja@gmail.com', 'rutuja', '1234', 1),
(4, 'Pallavi Surykant Thorat', 'thoratpallavi081@gmail.com', 'pallavi', '123456', 1),
(5, 'Gaouri', 'gouri@gmail.com', 'gaouri', '123456', 1),
(6, 'kanchan', 'kanchan@gmail.com', 'kanchan', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_info`
--
ALTER TABLE `cart_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_info`
--
ALTER TABLE `cart_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
