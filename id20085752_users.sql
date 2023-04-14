-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2023 at 02:29 PM
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
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(15) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `date`, `user_id`, `dob`, `gender`, `designation`, `phone`, `address`) VALUES
('admin', '$2y$10$lKLI2MQ0agBa8X765OhxNuGxx.pOZgeCFG2JUjgRM4tr7WuB.KGYG', '2023-04-14 11:04:24', 1, '1997-01-09', 'M', 'Admin', 7896589798, 'Yelahanka'),
('Sarvani', '$2y$10$f68rn0.Pba2URGh0xWA/XuZDwEeiXvvdraC.8zPTr2MLAPFb6ReSG', '2023-04-14 11:23:28', 2, '2002-07-16', 'F', 'admin', 7896589456, 'JP Nagar 9th phase');

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
(1, 'product1', NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `mro`
--

INSERT INTO `mro` (`part_no`, `part_name`, `type`, `machine`, `department`) VALUES
(500, 'abc', 'direct', 'cdf', 'wing');

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
(80, 2, 'kg', 'Finished Goods Inventory', '2023-04-05', 1, 'product1'),
(81, 5, 'pcs', 'Blocker', '2023-04-05', 2, 'product2'),
(82, 4, 'kg', 'WIP Inventory', '2023-04-14', 3, 'product3');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `workbench_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `unit`, `workbench_id`) VALUES
(1, 'product1', 52, 'kg', '4'),
(2, 'product2', 25, 'pcs', '7'),
(3, 'product3', 100, 'kg', '5');

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
(1, 'rm1', 5),
(1, 'rm2', 7),
(2, 'rm3', 10),
(3, 'rm3', 12);

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
  `sku_id` int(10) NOT NULL,
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
(1, 'rm1', 'direct', 40, 'kg', '2023-04-12'),
(2, 'rm2', 'indirect', 36, 'pcs', '2023-04-14'),
(3, 'rm3', 'direct', 50, 'm²', '2023-04-14');

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
(22, 19, 'k', 'r', '2023-04-14 08:29:06'),
(23, 20, 'gh', 'tr', '2023-04-14 08:29:18'),
(24, 20, 'gh', 'tr', '2023-04-14 08:29:21'),
(25, 0, 'Product 101 dispatched', 'Harsh - user', '2023-04-14 08:30:33'),
(26, 25, 'received. ', 'Admin', '2023-04-14 08:30:50'),
(27, 26, 'Received', 'Rahul -user - 3', '2023-04-14 08:56:17'),
(28, 0, 'Hi', 'Rohan - user - 1', '2023-04-14 08:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `workstation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `date`, `user_id`, `dob`, `gender`, `designation`, `phone`, `address`, `workstation`) VALUES
('Harsh', '$2y$10$xcTZOfwKfwTQx/TX.eSFtumd4T79OkDNT64Fgsee3FTmWQrgjkpfK', '2023-04-14 10:59:21', 'EMP1', '2023-04-09', 'M', 'user', 8907654300, 'RBI Layout', '4'),
('rohit', '$2y$10$idvEsjayu/ucDFv9orBR3eDDNzPrHOipmIgFNxnDxPbcLAB72muoq', '2023-04-14 11:19:43', 'EMP2', '2001-03-14', 'M', 'user', 7896589787, 'Jayanagar', '7');

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

--
-- Dumping data for table `wip`
--

INSERT INTO `wip` (`batch_id`, `product_id`, `component`, `workstation_from`, `time_deposited`, `sender`, `workstation_to`, `time_picked`, `receiver`) VALUES
(36, 3, 'product3', NULL, '19:58:39', NULL, NULL, NULL, NULL);

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
('1', 'Motor', 'Not Occupied', 180),
('2', 'Motor', 'Not Occupied', 60),
('3', 'Motor', 'Not Occupied', 58),
('4', 'Wings', 'Not Occupied', 180),
('5', 'Wings', 'Not Occupied', 38),
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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `wip`
--
ALTER TABLE `wip`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
