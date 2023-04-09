-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2023 at 06:02 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20085752_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `date`, `user_id`, `dob`, `gender`, `designation`, `phone`, `address`) VALUES
('Sarvani', '1234', '2023-04-01 04:49:35', 2, '2002-04-03', 'F', 'Admin', 1234567894, 'Bangalore'),
('admin', '9876', '2023-04-01 04:49:35', 3, '2002-11-04', 'F', 'Admin', 372648173, 'Mysore');

-- --------------------------------------------------------

--
-- Table structure for table `finished_goods`
--

CREATE TABLE `finished_goods` (
  `product_id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `division` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `client` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finished_goods`
--

INSERT INTO `finished_goods` (`product_id`, `product`, `division`, `type`, `quantity`, `client`) VALUES
(101, 'p1', NULL, NULL, NULL, NULL),
(1002, 'p2', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mro`
--

CREATE TABLE `mro` (
  `part_no` int(10) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `machine` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `porders`
--

CREATE TABLE `porders` (
  `order_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ordered_date` date DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porders`
--

INSERT INTO `porders` (`order_id`, `quantity`, `unit`, `status`, `ordered_date`, `product_id`, `product_name`) VALUES
(73, 1, 'kg', 'Finished Goods Inventory', '2023-03-28', 1002, 'p2'),
(74, 1, 'kg', 'Finished Goods Inventory', '2023-04-01', 101, 'p1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `materials_req` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `workbench_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `materials_req`, `quantity`, `unit`, `workbench_id`) VALUES
(101, 'p1', 'a-10,b-20,c-30', 10, 'kg', '6'),
(1002, 'p2', 'a,f,g', 90, 'kg', '9'),
(1007, 'p6', 'a-30,b-60', 200, 'pcs', '4');

-- --------------------------------------------------------

--
-- Table structure for table `product_rm`
--

CREATE TABLE `product_rm` (
  `product_id` int(11) NOT NULL,
  `raw_material` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rm_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_rm`
--

INSERT INTO `product_rm` (`product_id`, `raw_material`, `rm_quantity`) VALUES
(101, 'a', 10),
(1002, 'c', 5),
(1007, 'a', 8),
(1007, 'b', 6);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `username`, `dob`, `gender`, `designation`, `phone`, `address`) VALUES
('1RF20', 'Admin', 'sar', '13-09-2000', 'F', 'Admin', 1234567894, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE `raw_materials` (
  `sku_id` varchar(10) NOT NULL,
  `material` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `units` varchar(10) NOT NULL,
  `received_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raw_materials`
--

INSERT INTO `raw_materials` (`sku_id`, `material`, `type`, `quantity`, `units`, `received_date`) VALUES
('1', 'a', 'direct', 90, 'pcs', '2023-03-16'),
('2', 'b', 'indirect', 50, 'kg', '2023-03-07'),
('3', 'c', 'direct', -35, 'kg', '2023-03-01'),
('4', 'j', 'direct', 45, 'kg', '2023-03-25'),
('5', 'y', 'indirect', 10, 'pcs', '2023-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(200) NOT NULL,
  `comment_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `comment_at`) VALUES
(1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Vincy', '2022-06-30 09:57:11'),
(2, 1, 'Okay, thank you for your comment.', 'Admin', '2022-06-30 09:57:31'),
(3, 1, 'hi', 'roytuts', '2023-03-21 17:32:19'),
(4, 1, 'hi', 'roytuts', '2023-03-21 17:32:20'),
(5, 0, 'de', 'roytuts222', '2023-03-21 17:32:41'),
(6, 0, 'pl', 'roytuts', '2023-03-21 17:55:56'),
(7, 0, 'sadiya', 'haleema', '2023-03-21 17:56:10'),
(8, 0, 'Ok bye', 'admin', '2023-03-21 18:25:25'),
(9, 2, 'no problem', 'sarvani', '2023-03-22 10:34:08'),
(10, 0, 'hi', 'ul', '2023-03-25 05:47:51'),
(11, 10, 'bye', 'ti', '2023-03-25 05:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(23) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `workstation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `date`, `user_id`, `dob`, `gender`, `designation`, `phone`, `address`, `workstation`) VALUES
('Harsh', '2192', '2023-01-21 05:40:35', '4', '2023-01-21', 'F', 'user', 824567891, 'Bangalore', '6'),
('Kareena', '4567', '2023-01-21 14:59:10', '6', '2023-01-21', 'F', 'user', 1234567891, 'Bangalore', '3'),
('Nagabhushan', '', '2023-03-25 06:27:58', '7', '2023-02-02', 'M', 'user', 976532323, 'Yelahanka', '7');

-- --------------------------------------------------------

--
-- Table structure for table `wip`
--

CREATE TABLE `wip` (
  `batch_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `component` varchar(50) NOT NULL,
  `workstation_from` int(5) DEFAULT NULL,
  `time_deposited` time NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) DEFAULT NULL,
  `workstation_to` int(5) DEFAULT NULL,
  `time_picked` time DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workbench`
--

CREATE TABLE `workbench` (
  `id` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workbench`
--

INSERT INTO `workbench` (`id`, `department`, `status`, `duration`) VALUES
('1', 'Motor', 'Not Occupied', 120),
('2', 'Motor', 'Not Occupied', 60),
('3', 'Motor', 'Not Occupied', 58),
('4', 'Wings', 'Not Occupied', 180),
('5', 'Wings', 'Occupied', 38),
('6', 'Wings', 'Occupied', 27),
('7', 'Drones', 'Occupied', 100),
('8', 'Drones', 'Not Occupied', 110),
('9', 'Drones', 'Not Occupied', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `finished_goods`
--
ALTER TABLE `finished_goods`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `mro`
--
ALTER TABLE `mro`
  ADD PRIMARY KEY (`part_no`);

--
-- Indexes for table `porders`
--
ALTER TABLE `porders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `workbench_id` (`workbench_id`);

--
-- Indexes for table `product_rm`
--
ALTER TABLE `product_rm`
  ADD PRIMARY KEY (`product_id`,`raw_material`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD PRIMARY KEY (`material`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wip`
--
ALTER TABLE `wip`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `workbench`
--
ALTER TABLE `workbench`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `porders`
--
ALTER TABLE `porders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wip`
--
ALTER TABLE `wip`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `porders`
--
ALTER TABLE `porders`
  ADD CONSTRAINT `porders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`workbench_id`) REFERENCES `workbench` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`workbench_id`) REFERENCES `workbench` (`id`);

--
-- Constraints for table `product_rm`
--
ALTER TABLE `product_rm`
  ADD CONSTRAINT `product_rm_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
