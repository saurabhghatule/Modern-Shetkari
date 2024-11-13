-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 11:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackxspirit`
--

-- --------------------------------------------------------

--
-- Table structure for table `drone`
--

CREATE TABLE `drone` (
  `d_id` int(9) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_price` varchar(255) NOT NULL,
  `d_crop` varchar(255) NOT NULL,
  `d_acr` varchar(255) NOT NULL,
  `d_date` date NOT NULL,
  `d_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drone`
--

INSERT INTO `drone` (`d_id`, `d_name`, `d_price`, `d_crop`, `d_acr`, `d_date`, `d_flag`) VALUES
(1, 'DJI Agras MG-1', '120000', 'Rice', '2 Acr', '0000-00-00', 0),
(2, 'DJI Agras MG-1', '120000', 'Rice', '2 Acr', '0000-00-00', 0),
(3, 'Yamaha RMAX', '450000', 'Wheat', '4 Acr', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `s_id` int(9) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_addr` varchar(255) NOT NULL,
  `s_state` varchar(255) NOT NULL,
  `s_dist` varchar(255) NOT NULL,
  `s_acr` varchar(255) NOT NULL,
  `s_cont` bigint(15) NOT NULL,
  `s_pass` varchar(255) NOT NULL,
  `s_type` varchar(255) NOT NULL,
  `s_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`s_id`, `s_name`, `s_addr`, `s_state`, `s_dist`, `s_acr`, `s_cont`, `s_pass`, `s_type`, `s_flag`) VALUES
(1, 'xyz', 'Rice', 'maharashtra', 'solapur', '2 acr', 0, '202cb962ac59075b964b07152d234b70', 'saab', 0),
(2, '', '', '', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', 'volvo', 0),
(3, '', '', '', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', 'volvo', 0),
(4, 'abc', 'Wheat', 'maharashtra', 'padharpur', '4 acr', 7894561230, 'd41d8cd98f00b204e9800998ecf8427e', 'mercedes', 0),
(5, 'abc', 'Isbavi, Pandharpur', 'maharashtra', 'padharpur', '2 acr', 123456789, 'd41d8cd98f00b204e9800998ecf8427e', 'mercedes', 0),
(6, 'xyz', 'Rice', 'maharashtra', 'solapur', '2 acr', 7894561230, 'd41d8cd98f00b204e9800998ecf8427e', 'Farmer', 0),
(7, 'Ahilya Kokare', 'Isbavi, Pandharpur', 'maharashtra', 'solapur', '4 acr', 9223372036854775807, 'd41d8cd98f00b204e9800998ecf8427e', 'volvo', 0),
(8, 'abc', 'Wheat', 'maharashtra', 'Raigad', '3acr', 1212121212, '202cb962ac59075b964b07152d234b70', 'Service Provider', 0),
(9, 'abc', 'Rice', 'maharashtra', 'padharpur', '2 acr', 1212121212, '250cf8b51c773f3f8dc8b4be867a9a02', 'Admin', 0),
(10, 'pqr', 'Maize', 'Kerala', 'xyz', '5 acr', 1234567890, '202cb962ac59075b964b07152d234b70', 'Farmer', 0),
(11, 'aa', 'Rice', 'maharashtra', 'solapur', '2 acr', 7894561230, '024d7f84fff11dd7e8d9c510137a2381', 'Farmer', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drone`
--
ALTER TABLE `drone`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drone`
--
ALTER TABLE `drone`
  MODIFY `d_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `s_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
