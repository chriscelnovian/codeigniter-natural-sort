-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 02:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_natural_sort`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id` int(11) NOT NULL COMMENT 'Room ID',
  `name` varchar(255) NOT NULL COMMENT 'Room Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table Room';

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id`, `name`) VALUES
(1, 'Orchid 1230'),
(2, 'Rose 3'),
(3, 'Rose 1'),
(4, 'Orchid 7'),
(5, 'Rose 2'),
(6, 'Rose 12'),
(7, 'Orchid 9'),
(8, 'Rose 100'),
(9, 'Rose 23'),
(10, 'VIP1'),
(11, 'Orchid 16'),
(12, 'VIP23'),
(13, 'VIP6'),
(14, 'Orchid 10'),
(15, 'Rose 10'),
(16, 'VIP126'),
(17, 'VIP2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Room ID', AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
