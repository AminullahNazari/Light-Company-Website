-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 02:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lightcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `lastname`, `email`, `password`, `phone`) VALUES
(8, 'John', 'Doe', 'john@example.com', 'aminadsak', NULL),
(9, 'John', 'Doe', 'john@example.com', 'aminadsak', NULL),
(10, 'ahmad', 'ali', 'ali@gmail.com', '12345677', NULL),
(11, 'John', 'Doe', 'john@example.com', 'aminadsak', NULL),
(12, 'John', 'Doe', 'john@example.com', 'aminadsak', NULL),
(13, 'ahmad', 'Nazari', 'ali@gmail.com', 'abcdefgh', NULL),
(14, 'ahmad', 'Nazari', 'ali@gmail.com', 'adjfjkdjsalkjfdklj', NULL),
(15, 'ahmad', 'Nazari', 'ali@gmail.com', 'jgjfdkskhgfkjshd', NULL),
(16, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'sfdsfasfdasffad', NULL),
(17, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'sfdsfasfdasffad', NULL),
(18, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'sfdsfasfdasffad', NULL),
(19, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(20, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(21, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(22, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(23, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(24, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(25, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(26, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(27, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(28, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL),
(29, 'tedskf', 'dffffdsdf', 'adsa@dsf.com', 'gdfsgdfgfdh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `folwers`
--

CREATE TABLE `folwers` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `customerId` int(11) DEFAULT NULL,
  `messege` varchar(200) DEFAULT NULL,
  `messegeDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `productModel` varchar(255) NOT NULL,
  `customerId` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` float(15,2) DEFAULT NULL,
  `shippingId` int(11) DEFAULT NULL,
  `messege` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `buyPrice` float(10,2) DEFAULT NULL,
  `salePrice` float(10,2) DEFAULT NULL,
  `inOrder` int(11) DEFAULT NULL,
  `instock` int(11) DEFAULT NULL,
  `detiels` varchar(2000) DEFAULT NULL,
  `profileImage` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) DEFAULT NULL,
  `shipper` varchar(255) DEFAULT NULL,
  `cost` float(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folwers`
--
ALTER TABLE `folwers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_productModel` (`productModel`),
  ADD KEY `FK_customerId` (`customerId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`model`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_customerId` FOREIGN KEY (`customerId`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `FK_productModel` FOREIGN KEY (`productModel`) REFERENCES `products` (`model`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
