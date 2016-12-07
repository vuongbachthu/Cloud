-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 08:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` char(10) NOT NULL,
  `customer_name` text NOT NULL,
  `bill_price` int(11) NOT NULL,
  `bill_time` date NOT NULL,
  `customer_customer_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `customer_name`, `bill_price`, `bill_time`, `customer_customer_id`) VALUES
('HD01', 'Vuong Bach Thu', 1800, '2016-12-02', 'KH01'),
('HD02', 'Nguyen Trung Hieu', 2500, '2016-12-04', 'KH02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` char(10) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_phone`) VALUES
('KH01', 'Vuong Bach Thu', 'Lang son', '0972297198'),
('KH02', 'Nguyen Trung Hieu', 'Nghe An', '0912345678');

-- --------------------------------------------------------

--
-- Table structure for table `detail_bill`
--

CREATE TABLE `detail_bill` (
  `bill_bill_id` char(10) NOT NULL,
  `customer_id` char(10) NOT NULL,
  `product_product_id` char(10) NOT NULL,
  `product_name` text NOT NULL,
  `type_name` text NOT NULL,
  `number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sum_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_bill`
--

INSERT INTO `detail_bill` (`bill_bill_id`, `customer_id`, `product_product_id`, `product_name`, `type_name`, `number`, `price`, `sum_price`) VALUES
('HD01', 'KH01', 'SP01', 'Iphone 7', 'L02', 2, 900, 1800),
('HD02', 'KH02', 'SP02', 'Surface pro', 'L01', 3, 2500, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` char(10) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_number` int(11) NOT NULL,
  `type_type_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_number`, `type_type_id`) VALUES
('SP01', 'Iphone 7', 950, 4, 'L02'),
('SP02', 'Surface pro', 2500, 4, 'L01');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` char(10) NOT NULL,
  `type_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
('L01', 'Laptop 01'),
('L02', 'Mobile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_customer` (`customer_customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`bill_bill_id`),
  ADD KEY `detail_bill_product` (`product_product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_type` (`type_type_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_customer` FOREIGN KEY (`customer_customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `detail_bill_bill` FOREIGN KEY (`bill_bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `detail_bill_product` FOREIGN KEY (`product_product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_type` FOREIGN KEY (`type_type_id`) REFERENCES `type` (`type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
