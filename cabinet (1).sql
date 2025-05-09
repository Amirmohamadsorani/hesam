-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 06:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabinet`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `name` varchar(15) NOT NULL,
  `imageurl` varchar(20) NOT NULL,
  `id` int(9) NOT NULL,
  `ghymat` int(11) NOT NULL,
  `explane` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `imageurl`, `id`, `ghymat`, `explane`) VALUES
('cghgchgc', 'assets/mdf1.webp', 1, 4500000, 'gxgxzxzhzxchgzxgz'),
('تست', 'assets/mdf3.webp', 10, 15000000, 'موکت الماس، محصولی باکیفیت از شرکت پالاز، به دلیل داشتن ویژگی‌های منحصر به فرد، همچنان یکی از محبوب‌ترین گزینه‌ها برای کف‌پوش منازل به شمار می‌رود');

-- --------------------------------------------------------

--
-- Table structure for table `sellform`
--

CREATE TABLE `sellform` (
  `name` varchar(25) NOT NULL,
  `ghymat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `meter` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sellform`
--

INSERT INTO `sellform` (`name`, `ghymat`, `id`, `meter`, `totalprice`, `username`, `address`, `mobile`, `email`, `idk`) VALUES
('تست', 15000000, 2, 63, 945000000, 'ali', 'شیراز', 2147483647, 'amiam5556312@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` int(11) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`, `password`, `admin`) VALUES
('amirmohamad', 'amir', 'amiam5311@gmail.com', 1234, 0),
('admin', 'admin', ' afdsf@gmail.com', 1234, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellform`
--
ALTER TABLE `sellform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sellform`
--
ALTER TABLE `sellform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
