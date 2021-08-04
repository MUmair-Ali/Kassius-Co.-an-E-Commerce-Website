-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 10:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kassiusco`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `productid` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bag`
--

INSERT INTO `bag` (`productid`, `quantity`, `total`) VALUES
(26, 1, 0),
(8, 1, 0),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` int(20) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `number`, `feedback`) VALUES
('', 'test@example.com', 2147483647, ''),
('', 'test@example.com', 2147483647, 'Site is amazing and fasinating.'),
('Umair', 'sp18bsse0075@maju.ed', 2147483647, 'Site is amazing and fasinating.'),
('number', 'sp18bsse0026@maju.ed', 2145987, 'Site is amazing and fasinating.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`, `category`, `gender`) VALUES
(1, 'STROM', 'KB345', 9275, 'img/arv1.png', 'Novelties', 'M'),
(2, 'VIBES', 'KSM112', 6900, 'img/arv2.png', 'Novelties', 'M'),
(3, 'KUDDLY', 'KHW32', 2500, 'img/arv3.png', 'Novelties', 'W'),
(4, 'WOLF', 'KOW12', 9750, 'img/men.png', 'Novelties', 'M'),
(5, 'ROZE', 'KOWW29', 10000, 'img/women.png', 'Novelties', 'W'),
(6, 'KOBOLT', 'KAM77', 5000, 'img/acc.png', 'Novelties', 'M'),
(7, 'HOP', 'KJ123', 7700, 'img/outmen.png', 'Outerwear', 'M'),
(8, 'VELVET', 'KV908', 13200, 'img/outwomen.png', 'Outerwear', 'W'),
(9, 'DOPE', 'KFM23', 25000, 'img/fwm.png', 'Formalwear', 'M'),
(10, 'DASH', 'KFW908', 19875, 'img/fww.png', 'Formalwear', 'W'),
(11, 'ROUGH', 'KA99', 2300, 'img/awm.png', 'Activewear', 'M'),
(12, 'ACT', 'KAW02', 2000, 'img/aww.png', 'Activewear', 'W'),
(13, 'KAMEL', 'KB88', 6000, 'img/bootm.png', 'Boots', 'M'),
(14, 'PITCH', 'KBW98', 4590, 'img/bootw.png', 'Boots', 'W'),
(15, 'BURN', 'KS003', 5500, 'img/shoesm.png', 'Shoes', 'M'),
(16, 'KISS', 'KS313', 8800, 'img/shoew.png', 'Shoes', 'W'),
(17, 'DUST', 'KSD13', 1980, 'img/sandalm.png', 'Sandals', 'M'),
(18, 'SKY', 'KSDW9', 1250, 'img/sandalw.png', 'Sandals', 'W'),
(19, 'KXX', 'KSM3', 3000, 'img/shadesm.png', 'Shades', 'M'),
(20, 'KOOL', 'KSW5', 4500, 'img/shadesw.png', 'Shades', 'W'),
(21, 'EDTH', 'KWM11', 2075, 'img/shades.png', 'Waffers', 'M'),
(22, 'MARRY', 'KWM92', 3375, 'img/shadesw.png', 'Waffers', 'W'),
(23, 'EGILE', 'KBM3', 1500, 'img/beltsm.png', 'Belts', 'M'),
(24, 'HRT', 'KBW17', 1100, 'img/beltsw.png', 'Belts', 'W'),
(25, 'BLOSSOM', 'KAW776', 3075, 'img/aww.png', 'Novelties', 'W'),
(26, 'SKY', 'KS313', 2500, 'img/shadesw.png', 'Novelties', 'W'),
(27, 'PHEONIX', 'KOM01', 9800, 'img/men.png', 'Outerwear', 'M'),
(28, 'SAGE', 'KOW00', 1080, 'img/women.png', 'Outerwear', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `password`, `address`, `number`) VALUES
('M.Umair Ali', 'test@example.com', 'umair098', 'Karachi', '03115846875');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `email` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`email`, `status`) VALUES
('coolumi915@gmail.com', 1),
('liaumair@gmail.com', 1),
('test@gmail.com', 1),
('umar@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(2, 'Tahir', 'Zafar', 'tahirz54@gmail.com', 'thirzfr'),
(3, 'Zara', 'Khan', 'itszara21@gmail.com', 'zarazarahatky'),
(4, 'Abid', 'Ali', 'abid@gmail.com', 'abid123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
