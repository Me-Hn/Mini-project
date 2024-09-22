-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zain`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_categorey`
--

CREATE TABLE `add_categorey` (
  `id` int(11) NOT NULL,
  `Categorey_Name` varchar(50) NOT NULL,
  `Discription` varchar(50) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_categorey`
--

INSERT INTO `add_categorey` (`id`, `Categorey_Name`, `Discription`, `image`) VALUES
(1, 'mobile', 'sook', 'pic.jpg'),
(2, 'laptop', 'core17', 'img1.jpg'),
(3, 'Ryzen', '5600xt', 'pic.jpg'),
(7, 'Speaker Wireless', 'good Product', 'mo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_discription` varchar(50) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_QTY` int(11) NOT NULL,
  `pro_image` varchar(2000) NOT NULL,
  `categorey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `pro_discription`, `pro_price`, `pro_QTY`, `pro_image`, `categorey`) VALUES
(5, 'laptop', 'core i7', 70000, 5, 'lap1.jpg', 2),
(8, 'Gamming Mouse', 'good', 70000, 5, 'mo.jpg', 2),
(9, 'Head Phone', 'high qulity', 4000, 4, 'about3.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `First_name` varchar(59) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Passwoord` varchar(34) DEFAULT NULL,
  `Roll` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `First_name`, `Last_name`, `Email`, `Passwoord`, `Roll`) VALUES
(1, 'zain', 'khan', 'abc@gmail.com ', '123', NULL),
(2, 'shah', 'Muhammad', 'abc@gmail.com ', '456', NULL),
(3, 'akram', 'khan', 'abc@gmail.com ', '435454', NULL),
(4, 'Arsaln', 'ali', 'abc@gmail.com ', '89800', NULL),
(5, 'sara', 'nadeem', 'abc@gmail.com', '1234', NULL),
(6, 'abrar', 'khan', 'abc@gmail.com', '123', NULL),
(7, 'Aslam', 'khan', 'aslam@gmail.com', '123', 'admin'),
(8, 'Salman', 'salman@gmail.com', 'salman@gmail.com', 'abc', 'user'),
(9, 'fatma', 'fatma@gmail.com', 'fatma@gmail.com', 'abc', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_categorey`
--
ALTER TABLE `add_categorey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorey` (`categorey`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_categorey`
--
ALTER TABLE `add_categorey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categorey`) REFERENCES `add_categorey` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
